<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Booking;

class HomeController extends Controller
{
    public function room_details($id){

        $room = Room::find($id);

        return view('home.room_details', compact('room'));
    }
    public function add_booking(Request $request, $id){
        
        $request->validate([
            'startDate' => 'required|date',
            'endDate' => 'date|after:startDate'
        ]);

        $data = new Booking;

        $data->room_id = $id;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->amount = $request->amount;
        $data->start_date = $request->startDate;
        $data->end_date = $request->endDate;
        $data->save();

        return redirect()->back()->with('message', 'Room Booked successfully');
    }

   public function token(){
    $consumerKey = 'QAhtpLgSo7Rf9nfM6bG0K0HtrCgy07Pp8ovroNkyCuhMmtB9';
    $consumerSecret = 'd34b7XJnwRn4RMYgZEyIpwCaS0ZGYYiXGGFd7kCklHyw1ydQcobwZbWuV2EXEAqJ';
    $url = 'https://api.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';

    $response=Http::withBasicAuth($consumerKey,$consumerSecret)->get($url);
    return $response['access_token'];
   }

   public function initiateStkPush(Request $request)
{
    $accessToken = $this->token();
    $url = 'https://api.safaricom.co.ke/mpesa/stkpush/v1/processrequest';
    $PassKey = '1bf235dc92b21a2921665f672c11a4bb99905589a710f819ae230d5b4f008c60';
    $BusinessShortCode = 6544046;
    $Timestamp = Carbon::now()->format('YmdHis');
    $password = base64_encode($BusinessShortCode . $PassKey . $Timestamp);
    $TransactionType = 'CustomerBuyGoodsOnline';
    $Amount = $request->input('amount');
    $PartyA = $request->input('phone');
    $PartyB = 8834744;
    $PhoneNumber = $PartyA;
    $CallBackURL = 'https://mpesa.learnsoftbeliotechsolutions.co.ke/payments/stkCallback';
    $AccountReference = 'Hilton Hotel';
    $TransactionDesc = 'Book a room';

    try {
        // Send the STK push request to Safaricom API
        $response = Http::withToken($accessToken)->post($url, [
            'BusinessShortCode' => $BusinessShortCode,
            'Password' => $password,
            'Timestamp' => $Timestamp,
            'TransactionType' => $TransactionType,
            'Amount' => $Amount,
            'PartyA' => $PartyA,
            'PartyB' => $PartyB,
            'PhoneNumber' => $PhoneNumber,
            'CallBackURL' => $CallBackURL,
            'AccountReference' => $AccountReference,
            'TransactionDesc' => $TransactionDesc
        ]);

        // Decode the JSON response body
        $res = json_decode($response->body());

        // Check if ResponseCode exists before accessing it
        if (isset($res->ResponseCode) && $res->ResponseCode == 0) {
            // Success, extract details
            $MerchantRequestID = $res->MerchantRequestID;
            $CheckoutRequestID = $res->CheckoutRequestID;
            $CustomerMessage = $res->CustomerMessage;

            // Save the transaction details to the database
            $payment = new STKrequests();
            $payment->phone = $PhoneNumber;
            $payment->amount = $Amount;
            $payment->reference = $AccountReference;
            $payment->description = $TransactionDesc;
            $payment->MerchantRequestID = $MerchantRequestID;
            $payment->CheckoutRequestID = $CheckoutRequestID;
            $payment->status = 'Requested';
            $payment->save();

            return $CustomerMessage; 

        } else {
            return redirect()->back()->with('error', 'Transaction failed. Response: ' . json_encode($res));
        }

    } catch (Throwable $e) {
        return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
    }
}
}
