{{--
Variables disponibles
- $post Post
- $categories ARRAY(Categorie)
--}}

@php
$categories = \App\Models\Categorie::orderBy('name', 'ASC')->get();
@endphp

<x-app-layout>
   <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
         {{ __('Modification Post : ') }}
         {{-- Create Post --}}
         <x-nav-link :href="route('admin.posts.create')" :active="request()->routeIs('admin.posts.create')">
            {{ __('CreatePost') }}
         </x-nav-link>
      </h2>
   </x-slot>
   <div class="md:px-32 py-8 w-full">
      <div class="shadow overflow-hidden rounded border-b border-gray-200">
         <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
               <tr>
                  <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Title</th>
                  <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Content</th>
                  <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Catégorie</th>
                  <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Image</th>
                  <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Validation</th>
               </tr>
            </thead>
            <tbody class="text-gray-700">
               <form action="{{ route('admin.posts.update', $post->id) }}" method="post">
                  @csrf
                  {{ method_field('PUT') }}
                  <tr>
                     <td class="w-1/3 text-left py-3 px-4"><input type="text" name="title" id="title" value="{{ $post->title }}"></td>
                     <td class="w-1/3 text-left py-3 px-4"><textarea name="content" id="content">{{ $post->content }}</textarea></td>
                     <td class="w-1/3 text-left py-3 px-4">
                        <select name="categorie_id" id="categorie_id">
                           @foreach ($categories as $categorie)
                           <option value="{{ $categorie->id }}"
                              <?php if($categorie->id === $post->categorie_id)
                                 { echo 'selected'; } ?>>{{ $categorie->name }}
                           </option>
                           @endforeach
                        </select>
                     </td>
                     <td class="w-1/3 text-left py-3 px-4"><input type="file" name="image" id="image" value=""></td>
                     {{-- Submit --}}
                     <td class="w-1/3 text-left py-3 px-4">
                        <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-800 rounded" type="submit">Envoyer</button>
                     </td>
               </form>
            </tbody>
         </table>
      </div>
   </div>
</x-app-layout>
