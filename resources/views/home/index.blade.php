{{--
Variables disponibles
- $works ARRAY(Work)
- $posts ARRAY(Post)
--}}

@extends('templates.index')

@section('title')
Home
@endsection

@section('content')
{{-- Slide Works --}}
@include('works._slideHome', ['works' =>\App\Models\Work::take(10)->where('inSlider','=','1')->get()])

<!-- OUR PORTFOLIO-->
<div class="section section-white">
   <div class="container">
      <div class="row">
         <div class="section-title">
            <h1>Our Recent Works</h1>
         </div>
         <ul class="grid cs-style-3">

            {{-- Liste des Works - Portfolio --}}
            @include('works._list', ['works' =>\App\Models\Work::take(6)->get()])

         </ul>
      </div>
   </div>
</div>
<hr>

{{-- Liste des Blogs - Posts --}}
@include('posts._listHome', ['posts' =>\App\Models\Post::take(3)->get()])

@endsection
