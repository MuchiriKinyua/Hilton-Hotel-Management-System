<!DOCTYPE html>
<html lang="en">
   <head>
@include('home.css')
<link rel="stylesheet" href="{{ asset('css/stylechat.css') }}">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" 
integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="{{ asset('js/script.js') }}" defer></script>
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
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
        @include('home.slider')
      <!-- end banner -->
      <!-- about -->
      @include('home.about')
      <!-- end about -->
      <!-- our_room -->
      @include('home.room')
      <!-- end our_room -->
      <!-- gallery -->
      @include('home.gallery')
      <!-- end gallery -->
      <!-- blog -->
      @include('home.blog')
      <!-- end blog -->
      <!--  contact -->
      @include('home.contact')
      <!-- end contact -->
      <!--  footer -->
      <footer>
      @include('home.footer')
      <!-- chatbot -->
      @include('home.chatbot')

      <script type="text/javascript">
         $(window).on("scroll", function () {

         sessionStorage.scrollTop = $(this).scrollTop(); 

         });

         $(document).ready(function () {

         if (sessionStorage.scrollTop !== undefined) { 

         $(window).scrollTop(sessionStorage.scrollTop); 

         }

         });
      </script>



   </body>
</html>