<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   <script src="{{ asset('js/app.js') }}" defer></script>
   <title>@yield('title')</title>
</head>

<body>
   <!-- hier wird auch der Wert von der section "title" eines blade templates ausgefüllt,
   welches dieses layout "extended" -->
       <!--NAVBAR-->
       <nav class="navbar navbar-expand-lg sticky-top" id="navbar">
         <div class="container-fluid">
             <a href="/messages"><img class="img-responsive" src="img/favicon.png" data-bs-hover-animate="pulse"
                     alt="logo"></a>
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
             <img id="header-img" src="{{ 'img/header_tugce.png' }}" alt="this is a banner" class="d-block w-100">
         </div>
     </header>
   <!-- hier wird der Wert von der section "content" eines blade templates ausgefüllt,
   welches dieses layout "extended" -->
   @yield('content')
   <!-- hier wird die php Funktion date() aufgerufen mit dem Format-Pattern 'd.m.Y'
    und im html ausgegeben-->
   <footer>
      <img src="{{('img/footer_tugce.png')}}">
      <div><b>FILMARY {{date('Y')}} <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
               <path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372 372 166.6 372 372-166.6 372-372 372zm5.6-532.7c53 0 89 33.8 93 83.4.3 4.2 3.8 7.4 8 7.4h56.7c2.6 0 4.7-2.1 4.7-4.7 0-86.7-68.4-147.4-162.7-147.4C407.4 290 344 364.2 344 486.8v52.3C344 660.8 407.4 734 517.3 734c94 0 162.7-58.8 162.7-141.4 0-2.6-2.1-4.7-4.7-4.7h-56.8c-4.2 0-7.6 3.2-8 7.3-4.2 46.1-40.1 77.8-93 77.8-65.3 0-102.1-47.9-102.1-133.6v-52.6c.1-87 37-135.5 102.2-135.5z"></path>
            </svg></b></div>
   </footer>

</body>

</html>