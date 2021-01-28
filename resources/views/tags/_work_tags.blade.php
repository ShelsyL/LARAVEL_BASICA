{{--
  Variables disponibles:
    - $tags ARRAY(Tag)
 --}}

<p><strong>Tags: </strong>
  @foreach ($tags as $tag)
    {{ $tag->name }}, {{--- {{ count($tag->works) }} --}}
  @endforeach
  ...
</p>
