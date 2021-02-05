<!-- Our Articles -->
<div class="section">
   <div class="container">
      <div class="row">
         <!-- Featured News -->
         <div class="col-sm-6 featured-news">
            <h2>Latest Blog Posts</h2>
            @foreach ($posts as $post)
            <div class="row">
               <div class="col-xs-4"><a href="{{ route('posts.show', ['post' => $post->id, 'slug' => Str::slug($post->title, '-')]) }}"><img src="{{ asset('assets/img/blog/' . $post->image) }}" alt="Post Title"></a></div>
               <div class="col-xs-8">
                  <div class="caption"><a href="{{ route('posts.show', ['post' => $post->id, 'slug' => Str::slug($post->title, '-')]) }}">{{$post->title}}</a></div>
                  <div class="date">{{ \Carbon\Carbon::parse($post->created_at)->format('j F Y') }}</div>
                  <div class="intro">{{$post->content}}<a href="{{ route('posts.show', ['post' => $post->id, 'slug' => Str::slug($post->title, '-')]) }}"> Read more...</a></div>
               </div>
            </div>
            @endforeach
         </div>
         <!-- End Featured News -->


         <!-- Latest News FB -->
         <div class="col-sm-6 latest-news">
            <h2>Lastest FaceBookkkk/Twitter News</h2>
            <div class="row">
               <div class="col-sm-12">
                  <div class="fb-page" data-href="https://www.facebook.com/Ofeel-102226305040573/"
                     data-tabs="timeline,events,messages" data-width="500" data-height="500"
                     data-small-header="true" data-adapt-container-width="true"
                     data-hide-cover="true" data-show-facepile="true">
                     <blockquote cite="https://www.facebook.com/Ofeel-102226305040573/" class="fb-xfbml-parse-ignore">
                        <a href="https://www.facebook.com/Ofeel-102226305040573/">O&#039;feel</a>
                     </blockquote>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-sm-12">
                  <a class="twitter-timeline"
                     href="https://twitter.com/twitterdev">
                  Tweets by @TwitterDev
                  </a>
               </div>
               <div id="superman">
               </div>
               <script>
                  twttr.widgets.createTimeline(
                        {
                          sourceType: "profile",
                          screenName: "TwitterDev"
                        },
                  document.getElementById("superman"));
               </script>
            </div>
            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v9.0" nonce="qiTpaxFa"></script>
         </div>
         <!-- End Featured News -->
      </div>
   </div>
</div>
