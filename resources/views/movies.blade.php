 @extends('layouts.master')


 @section('content')
 <!-- hier wird der Wert von der section "content" eines blade templates ausgefüllt,
   welches dieses layout "extended" -->

 <div class="content">
    <div class="titles">
       LISTED MOVIES
    </div>
    <div class="movies">
       <ul class="movies-ul">
          @foreach ($movies as $movie)
          <li class="movies-li">
             <b>
                {{$movie->cover}}</br>
                <div class="movie-title">
                   {{$movie->title}}
                </div>
             </b><br>
          </li>
          @endforeach
       </ul>
    </div>
 </div>
 @endsection