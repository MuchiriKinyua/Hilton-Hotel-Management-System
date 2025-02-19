<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Booking;
use App\Models\Contact;
use App\Models\Gallery;

class HomeController extends Controller
{

    public function room_details($id){

        $room = Room::find($id);

        return view('home.room_details', compact('room'));
    }
    public function add_booking(Request $request, $id)
    {
        $request->validate([
            'startDate' => 'required|date',
            'endDate' => 'nullable|date|after:startDate',
            'market_segment' => 'nullable|string',
            'distribution_channel' => 'nullable|string',
            'is_repeated_guest' => 'nullable|string',
            'deposit_type' => 'nullable|string',
            'customer_type' => 'nullable|string',
            'has_special_requests' => 'nullable|string',
            'reserved_is_assigned' => 'nullable|string',
            'agent_involved' => 'nullable|string',
        ]);
    
        $data = new Booking;
    
        $data->room_id = $id;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->amount = $request->amount;
        $startDate = $request->startDate;
        $endDate = $request->endDate;
    
        $isBooked = Booking::where('room_id', $id)
            ->where('start_date', '<=', $endDate)
            ->where('end_date', '>=', $startDate)
            ->exists();
    
        $data->market_segment = $request->market_segment;
        $data->distribution_channel = $request->distribution_channel;
        $data->is_repeated_guest = $request->is_repeated_guest;
        $data->deposit_type = $request->deposit_type;
        $data->customer_type = $request->customer_type;
        $data->has_special_requests = $request->has_special_requests;
        $data->reserved_is_assigned = $request->reserved_is_assigned;
        $data->agent_involved = $request->agent_involved;
    
        if ($isBooked) {
            return redirect()->back()->with('message', 'Room already booked! Please try a different room.');
        } else {
            $data->start_date = $request->startDate;
            $data->end_date = $request->endDate;
            $data->save();
    
            return redirect()->back()->with('message', 'Room Booked successfully');
        }
    }
    

   public function token(){
    $consumerKey = 'lQCCDsJxL1LK8Ljl27RrjkwjelfCEoZUOIYI5XH0jL1Veklb';
    $consumerSecret = 'AqODG8iQ4D4K2oBI5QGVmrxLQDRkKnM8BgfOjdDIBrM6pr2nE8WW22lS0HxZFfTP';
    $url = 'https://api.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';

    $response=Http::withBasicAuth($consumerKey,$consumerSecret)->get($url);
    return $response['access_token'];
   }

   public function initiateStkPush(Request $request)
{
    $accessToken = $this->token();
    $url = 'https://api.safaricom.co.ke/mpesa/stkpush/v1/processrequest';
    $PassKey = '1bf235dc92b21a2921665f672c11a4bb99905589a710f819ae230d5b4f008c60';
    $BusinessShortCode = 600986;
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
public function stkCallback() {
    $data=file_get_contents('php://input');
    Storage::disk('local')->put('stk.txt',$data);

    $response=json_decode($data);

    $ResultCode=$response->Body->stkCallback->ResultCode;

    if($ResultCode==0){
        $MerchantRequestID=$response->Body->stkCallback->MerchantRequestID;
        $CheckoutRequestID=$response->Body->stkCallback->CheckoutRequestID;
        $ResultDesc=$response->Body->stkCallback->ResultDesc;
        $Amount=$response->Body->stkCallback->CallbackMetadata->Item[0]->Value;
        $MpesaReceiptNumber=$response->Body->stkCallback->CallbackMetadata->Item[1]->Value;
        //$Balance=$response->Body->stkCallback->CallbackMetadata->Item[2]->Value;
        $TransactionDate=$response->Body->stkCallback->CallbackMetadata->Item[3]->Value;
        $PhoneNumber=$response->Body->stkCallback->CallbackMetadata->Item[4]->Value;

        $payment=STKrequests::where('CheckoutRequestID',$CheckoutRequestID)->firstOrfail();
        $payment->status='Paid';
        $payment->TransactionDate=$TransactionDate;
        $payment->MpesaReceiptNumber=$MpesaReceiptNumber;
        $payment->ResultDesc=$ResultDesc;
        $payment->save();

    }else{

    $CheckoutRequestID=$response->Body->stkCallback->CheckoutRequestID;
    $ResultDesc=$response->Body->stkCallback->ResultDesc;
    $payment=STKrequest::where('CheckoutRequestID',$CheckoutRequestID)->firstOrfail();
    
    $payment->ResultDesc=$ResultDesc;
    $payment->status='Failed';
    $payment->save();

    }

}

    public function contact(Request $request)
    {
        $contact = new Contact;

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->message;

        $contact->save();

        return redirect()->back()->with('message', 'Message Sent Successfully');
    }

    public function our_rooms()
    {
        $room = Room::all();
        return view('home.our_rooms', compact('room'));
    }
    public function hotel_gallery()
    {
        $gallery = Gallery::all();
        return view('home.hotel_gallery', compact('gallery'));
    }
    public function hotel_blog()
    {
        return view('home.hotel_blog');
    }
    public function contact_us()
    {
        return view('home.contact_us');
    }
}
