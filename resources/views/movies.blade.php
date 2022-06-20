 @extends('layouts.master')


 @section('content')<br>

 <!-- hier wird der Wert von der section "content" eines blade templates ausgefüllt,
   welches dieses layout "extended" -->

 <div class="content">
    <div class="titles">
       LISTED MOVIES
    </div>
    <div class="movies">
       <ul>
          @foreach ($movies as $movie)
          <li>
             <b>{{$movie->title}}:</b><br>
             {{$movie->content}}<br>
          </li>
          @endforeach
       </ul>

       @endsection

       <img>
       </ul>
    </div>
 </div>

 @endsection