<!DOCTYPE html>
<html>
  <head> 

  <base href="/public">

    @include('admin.css')
    <style type="text/css">
        label {
            display: inline-block;
            width: 200px;
        }
        input[type="text"], 
        input[type="number"], 
        select, 
        textarea {
            width: 300px; /* Set a consistent width */
            height: 35px; /* Set a consistent height */
            padding: 5px; /* Add some padding for better appearance */
            border: 1px solid #ccc; /* Add a border for inputs */
            border-radius: 5px; /* Optional: Add rounded corners */
        }
        textarea {
            height: 100px; /* Set a taller height for textarea */
            resize: none; /* Prevent resizing */
        }
        .div_deg {
            padding-top: 30px;
        }
        .div_center {
            text-align: center;
            padding-top: 40px;
        }
        .btn {
            width: 150px; /* Optional: Consistent button width */
            height: 40px; /* Optional: Consistent button height */
        }
    </style>
  </head>
  <body>
  @include('admin.header')
  @include('admin.sidebar')

  <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

    <div class="div_center">
        <h1 style="font-size: 30px; font-weight: bold;">Update Rooms</h1>
        <form action="{{url('edit_room', $data->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="div_deg">
                <label>Room Title</label>
                <input type="text" name="title" value="{{$data->room_title}}">
            </div>
            <div class="div_deg">
                <label>Description</label>
                <textarea name="description">{{$data->description}}</textarea>
            </div>
            <div class="div_deg">
                <label>Amount</label>
                <input type="number" name="amount" value="{{$data->amount}}">
            </div>
            <div class="div_deg">
                <label>Room Type</label>
                <select name="type">

                    <option selected value = "{{$data->room_type}}">{{$data->room_type}}</option>

                    <option value="regular">Regular</option>
                    <option value="premium">Premium</option>
                    <option value="deluxe">Deluxe</option>
                </select>
            </div>
            <div class="div_deg">
                <label>Free Wifi</label>
                <select name="wifi">
                <option selected value = "{{$data->wifi}}">{{$data->wifi}}</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>
            <div class="div_deg">
                <label>Current Image</label>
                <img style="margin: auto" width = "60" src = "/room/{{$data->image}}">
            </div>
            <div class="div_deg" style="margin-left: 50px;">
                <label>Upload Image</label>
                <input type="file" name="image">
            </div>
            <div class="div_deg">
                <input class="btn btn-primary" type="submit" value="Update Room">
            </div>
        </form>
    </div>

    </div>
    </div>
    </div>
  @include('admin.footer')
  </body>
</html>
