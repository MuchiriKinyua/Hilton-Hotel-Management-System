<!DOCTYPE html>
<html lang="en">
   <head>
<base href="/public">
@include('home.css')
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
               <p>Lorem Ipsum available, but the majority have suffered</p>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
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
                  <h6 style="padding: 12px; font-size: 20px">Price : {{$room->price}}</h6>
               </div>
            </div>
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
   </body>
</html>