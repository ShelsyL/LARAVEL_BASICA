@extends('templates.page')

@section('title')
 BlogPost
@endsection

{{-- Zone Dynamique pour le titre de la page --}}
@section('titlePage')
 <h1>Blog Post</h1>
@endsection


@section('content')
  <div class="section">
  <div class="container">
  <div class="row">
    <!-- Blog Post -->
    <div class="col-sm-8">
      <div class="blog-post blog-single-post">
        <div class="single-post-title">
          <h2>{{ $post->title }}</h2>
        </div>

        <div class="single-post-image">
          <img src="{{ asset('assets/img/blog/' . $post->image) }}" alt="Post Title">
        </div>
        <div class="single-post-info">
          <i class="glyphicon glyphicon-time"></i>{{ \Carbon\Carbon::parse($post->created_at)->format('d M, Y ') }}<a href="#" title="Show Comments"><i class="glyphicon glyphicon-comment"></i>11</a>
        </div>
        <div class="single-post-content">
          <h3>{{ $post->title }}</h3>
          <p>{{ $post->content }}</p>
        </div>
      </div>
    </div>
    <!-- End Blog Post -->
    <!-- Sidebar -->
    <div class="col-sm-4 blog-sidebar">

    {{-- Recents Posts --}}
    @include('posts._recents', ['posts' => \App\Models\Post::orderBy('created_at', 'DESC')->take(4)->get()])

    {{-- Categories --}}
    @include('categories._index', ['categories' => \App\Models\Categorie::orderBy('name', 'ASC')->take(4)->get()])

    </div>
    <!-- End Sidebar -->
  </div>
</div>
</div>
@endsection
