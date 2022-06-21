 <!--extend layout master.blade.php -->

 @extends('layouts.master')

 <!--sets value for section title to "Mini Twitter" (section title is used in messages.blade.php) -->
 @section('title', 'FILMARY')

 <!--starts section content, defines some html for section content and end section content
ts value for section title to "Mini Twitter" (section content is used in messages.blade.php) -->
 @section('content')

 <div class="content">

     <div class="movies">
         <div class="titles">
             LISTED MOVIES
         </div>
         <a href="/movies"><img class="img" src="img/white_chicks.jpg"></a>
         <a href="/movies"><img class="img" src="img/deadpool.jpg"></a>
         <a href="/movies"><img class="img" src="img/pixels.jpeg"></a>
         <a href="/movies"><img class="img" src="img/die_legende.jpeg"></a><br>
         <a href="/movies"><button id="button" class="btn btn-default" type="submit">All Movies</button></a>
     </div>
     <div class="open-forum">
         <div class="titles">
             OPEN FORUM
         </div>

         <form action="/create" method="post">
             <input class="title-input" type="text" name="title" placeholder="Title"><br>
             <input class="content-input" type="text" name="content" placeholder="Suggest a movie ..."><br>
             <!-- this blade directive is necessary for all form posts somewhere in between the form tags -->
             @csrf
             <button id="button" class="btn btn-default" type="submit">Post</button>
         </form>
     </div>

     <div class="titles">
         POSTS
     </div>
     <div class="posts">
         <div>
             <ul>
                 @foreach ($messages as $message)
                 <li class="posts-li">
                     <b>
                         <a href="/message/{{$message->id}}">{{$message->title}}</a>
                     </b><br>
                     {{$message->content}}<br>
                     <div class="timestamp">{{$message->created_at->diffForHumans()}}</div>
                 </li>
                 @endforeach
             </ul>
             @endsection
         </div>
     </div>

 </div>