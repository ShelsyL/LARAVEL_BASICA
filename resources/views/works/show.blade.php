
@extends('templates.page')

@section('title')
 Portfolio
@endsection

{{-- Zone Dynamique pour le titre de la page --}}
@section('titlePage')
 <h1>PRODUCT DETAILS</h1>
@endsection


@section('content')

  <div class="section">
  <div class="container">
    <div class="row">
      <!-- Product Image & Available Colors -->
      <div class="col-sm-6">
        <div class="product-image-large">
          <img src="{{ asset('assets/img/portfolio/' . $work->image) }}"  alt="Item Name">
        </div>
        <div class="colors">
        <span class="color-white"></span>
        <span class="color-black"></span>
        <span class="color-blue"></span>
        <span class="color-orange"></span>
        <span class="color-green"></span>
      </div>
      </div>
      <!-- End Product Image & Available Colors -->
      <!-- Product Summary & Options -->
      <div class="col-sm-6 product-details">
        <h2>{{ $work->title }}</h2>
      <h3>Quick Overview</h3>
      <p>{{$work->content}}</p>
      <h3>Project Details</h3>
      <p><strong>Client: </strong>{{ $work->client->name }}</p>
      <p><strong>Date: </strong>{{ \Carbon\Carbon::parse($work->created_at)->format('F j, Y') }}</p>
      {{-- Les tags du work --}}
      @include('tags._work_tags', ['tags' => $work->tags])
      {{-- <p><strong>Tags: </strong>Photography, Art, Graphics</p> --}}
      </div>
      <!-- End Product Summary & Options -->

    </div>
</div>
</div>

<hr>

  <div class="section">
  <div class="container">
  <div class="row">

  <div class="section-title">
  <h1>Similar Works</h1>
  </div>

<ul class="grid cs-style-2">

  {{-- Liste des Works - Show --}}
  @include('works._listShow', ['works' =>\App\Models\Work::take(4)->get()])

</ul>


  </div>
</div>
</div>

@endsection
