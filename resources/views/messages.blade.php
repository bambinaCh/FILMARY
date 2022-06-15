 <!--extend layout master.blade.php -->

 @extends('layouts.master')

 <!--sets value for section title to "Mini Twitter" (section title is used in messages.blade.php) 
-->

 <!--starts section content, defines some html for section content and end section content
ts value for section title to "Mini Twitter" (section content is used in messages.blade.php) -->
 @section('content')
 <!--NAVBAR-->
 <nav class="navbar navbar-expand-lg sticky-top" id="navbar">
     <div class="container-fluid">
         <a href="/messages"><img class="img-responsive" src="img/favicon.png" data-bs-hover-animate="pulse" alt="logo"></a>
         <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
             <span class="navbar-toggler-icon"></span>
         </button>

         <div class="navbar-nav ms-auto">
             <a href="/messages" class="nav-link ">HOME</a>
             <a href="/movies" class="nav-link ">MOVIES</a>

         </div>

 </nav>
 <!--CAROUSEL-->
 <header>
     <div class="carousel-inner">
         <div class="carousel-item active">
             <img src="{{('img/header_tugce.png')}}"  alt="this is a banner" class="d-block w-100">
         </div>

     </div>
 </header>

 @endsection