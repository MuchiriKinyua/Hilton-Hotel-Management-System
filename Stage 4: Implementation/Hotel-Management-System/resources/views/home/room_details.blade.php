<!DOCTYPE html>
<html lang="en">
   <head>
<base href="/public">
@include('home.css')
<link rel="stylesheet" href="{{ asset('css/stylechat.css') }}">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<script src="{{ asset('js/script.js') }}" defer></script>
<style type="text/css">
label {
    display: inline-block;
    width: 200px;
    white-space: nowrap;
}

label::after {
    content: ' (optional)';
    font-size: 0.9em; /* Adjust the font size if necessary */
    color: gray;      /* Optional: Set a lighter color for optional text */
    visibility: hidden; /* Initially hidden */
}

select[required] + label::after,
input[required] + label::after {
    visibility: visible; /* Make it visible only for optional fields */
}

</style>
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
        @include('home.header')
      </header>

      <div class="our_room">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage">
               <h2>Our Room</h2>
               <p>Book a room with us and enjoy first class service</p>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-8">
            <div id="serv_hover" class="room">
               <div style="padding: 20px" class="room_img">
                  <figure>
                     <img style="height: 300px; width:550px" src="/room/{{$room->image}}" alt="#"/>
                  </figure>
               </div>
               <div class="bed_room">
                  <h3>{{$room->room_title}}</h3>
                  <p style="padding: 12px">{{$room->description}}</p>
                  <h4 style="padding: 12px">Free Wifi : {{$room->wifi}}</h4>
                  <h5 style="padding: 12px; font-size: 20px">Room Type : {{$room->room_type}}</h5>
                  <h6 style="padding: 12px; font-size: 20px">Amount : {{$room->amount}} Ksh</h6>
               </div>
            </div>
         </div>

      <div class="col-md-4">
         <h1 style="font-size: 40px!important;">Book Room</h1>

         <div>

         @if(session()->has('message'))
         <div class="alert alert-success">
            <button type="button" class="close" data-bs-dismiss="alert">X</button>
            {{session()->get('message')}}
         </div>
         @endif

         </div>

         @if($errors)

         @foreach($errors->all() as $errors)

         <li style="color:red">
            {{$errors}}
         </li>

         @endforeach

         @endif

         <form action="{{url('add_booking', $room->id)}}" method="Post">

@csrf 

<div> 
    <label>Name</label> 
    <input type="text" name="name" 
    @if(Auth::id())  
    value="{{Auth::user()->name}}" 
    @endif 
    class="form-control"> 
</div> 
<div> 
    <label>Email</label> 
    <input type="email" name="email" 
    @if(Auth::id())  
    value="{{Auth::user()->email}}" 
    @endif 
    class="form-control"> 
</div> 
<div> 
    <label>Phone</label> 
    <input type="number" name="phone" 
    @if(Auth::id())  
    value="{{Auth::user()->phone}}" 
    @endif 
    class="form-control"> 
</div> 
<div> 
    <label>Amount</label> 
    <input type="number" name="amount" value="{{ $room->amount }}" readonly class="form-control"> 
</div> 
<div> 
    <label>Start Date</label> 
    <input type="date" name="startDate" id="startDate" class="form-control"> 
</div> 
<div> 
    <label>End Date</label> 
    <input type="date" name="endDate" id="endDate" class="form-control"> 
</div> 

<div> 
    <label>Market Segment (optional)</label> 
    <select id="market_segment" name="market_segment" required class="form-control"> 
        <option value="Direct">Direct</option> 
        <option value="Corporate">Corporate</option> 
        <option value="Online TA">Online TA</option> 
        <option value="Offline TATO">Offline TATO</option> 
        <option value="Complementary">Complementary</option> 
        <option value="Groups">Groups</option> 
        <option value="Undefined">Undefined</option> 
        <option value="Aviation">Aviation</option> 
    </select> 
</div> 

<div> 
    <label>Distribution Channel (optional)</label> 
    <select id="distribution_channel" name="distribution channel" required class="form-control"> 
        <option value="Direct">Direct</option> 
        <option value="Corporate">Corporate</option> 
        <option value="TATO">TATO</option> 
        <option value="GDS">GDS</option> 
        <option value="Undefined">Undefined</option> 
    </select> 
</div> 

<div> 
    <label>Are you a Repeated Guest (optional)</label> 
    <select id="is_repeated_guest" name="is_repeated_guest" required class="form-control"> 
        <option value="Yes">Yes</option> 
        <option value="No">No</option> 
    </select> 
</div> 

<div> 
    <label>Deposit Type (optional)</label> 
    <select id="deposit_type" name="deposit_type" required class="form-control"> 
        <option value="No deposit">No deposit</option> 
        <option value="Refundable">Refundable</option> 
        <option value="Non Refund">Non Refund</option> 
    </select> 
</div> 

<div> 
    <label>Customer Type (optional)</label> 
    <select id="customer_type" name="customer_type" required class="form-control"> 
        <option value="Transient">Transient</option> 
        <option value="Contract">Contract</option> 
        <option value="Transientparty">Transient party</option> 
        <option value="Group">Group</option> 
    </select> 
</div> 

<div> 
    <label>VIP status? (optional)</label> 
    <select id="has_special_requests" name="has_special_requests" class="form-control"> 
        <option value="yes">Yes</option> 
        <option value="no">No</option> 
    </select> 
</div> 

<div> 
    <label>Reserved is Assigned (optional)</label> 
    <select id="reserved_is_assigned" name="reserved_is_assigned" class="form-control"> 
        <option value="yes">Yes</option> 
        <option value="no">No</option> 
    </select> 
</div> 

<div> 
    <label>Were you assisted by an agent (optional)</label> 
    <select id="agent_involved" name="agent_involved" class="form-control"> 
        <option value="yes">Yes</option> 
        <option value="no">No</option> 
    </select> 
</div> 

     <div style="padding-top: 20px;">
        <input type="submit" class="btn btn-primary" value="Book Room">
     </div>

</form>

      </div>

      </div>
   </div>
</div>

      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <!--  footer -->
      <footer>
      @include('home.footer')
      @include('home.chatbot')


<script type="text/javascript">
   $(function(){

      var dtToday = new Date();

      var month = dtToday.getMonth() + 1;

      var day = dtToday.getDate();

      var year = dtToday.getFullYear();

      if(month < 10)

         month = '0' + month.toString();

      if(day < 10)

         day = '0' + day.toString();

      var maxDate = year + '-' + month + '-' + day;

      $('#startDate').attr('min', maxDate);

      $('#endDate').attr('min', maxDate);

});
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" 
integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>