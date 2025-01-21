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
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

          <center>

          <h1 style="font-size: 30px; font-weight: bold;">Mail send to {{$data->name}}</h1>

          <form action="{{url('mail', $data->id)}}" method="post">
            @csrf
            <div class="div_deg">
                <label>Greeting</label>
                <input type="text" name="greeting">
            </div>
            <div class="div_deg">
                <label>Mail Body</label>
                <textarea name="body"></textarea>
            </div>
            <div class="div_deg">
                <label>Action Text</label>
                <input style="width: 300px;" type="type" name="action_text">
            </div>

            <div class="div_deg">
                <label>Action Url</label>
                <input style="width: 300px;" type="type" name="action_url">
            </div>

            <div class="div_deg">
                <label>End Line</label>
                <input style="width: 300px;" type="type" name="endline">
            </div>
            
            <div class="div_deg">
                <input class="btn btn-primary" type="submit" value="Send Mail">
            </div>
        </form>

          </center>

          </div>
        </div>
      </div>
        @include('admin.footer')
  </body>
</html>