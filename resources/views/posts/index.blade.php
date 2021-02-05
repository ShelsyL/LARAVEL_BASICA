@extends('templates.page')

@section('title')
 Portfolio
@endsection

{{-- Zone Dynamique pour le titre de la page --}}
@section('titlePage')
 <h1>Our Blog</h1>
@endsection


@section('content')
  <div class="section">
     <div class="container">
        <div class="row">
           <!-- Blog Post Excerpt -->
           @foreach ($posts as $post)
           <div class="col-sm-6">
              <div class="blog-post blog-single-post">
                 <div class="single-post-title">
                    <h2>{{ $post->title }}</h2>
                 </div>
                 <div class="single-post-image">
                    <img src="{{ asset('assets/img/blog/' . $post->image) }}"alt="Post Title">
                 </div>
                 <div class="single-post-info">
                    <i class="glyphicon glyphicon-time"></i>{{ \Carbon\Carbon::parse($post->created_at)->format('d M, Y ') }}<a href="#" title="Show Comments"><i class="glyphicon glyphicon-comment"></i>11</a>
                 </div>
                 <div class="single-post-content">
                    <p>{{ $post->content }}</p>
                    <a href="{{ route('posts.show', ['post' => $post->id, 'slug' => Str::slug($post->title, '-')]) }}" class="btn">Read more</a>
                 </div>
              </div>
           </div>
           <!-- End Blog Post Excerpt -->
           @endforeach
           <!-- Pagination -->
           <div class="pagination-wrapper ">
              <ul class="pagination pagination-sm">
                {{ $posts->links() }}
                 {{-- <li class="disabled"><a href="#">Previous</a></li>
                 <li class="active"><a href="#">1</a></li>
                 <li><a href="#">2</a></li>
                 <li><a href="#">3</a></li>
                 <li><a href="#">4</a></li>
                 <li><a href="#">5</a></li>
                 <li><a href="#">Next</a></li>--}}
              </ul>
           </div>
        </div>
     </div>
  </div>
@endsection
