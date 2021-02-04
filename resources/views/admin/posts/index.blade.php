<x-app-layout>
<x-slot name="header">
  <h2 class="font-semibold text-xl text-gray-800 leading-tight">
    {{ __('Gestion des posts : ') }}
      {{-- Create Post --}}
      <x-nav-link :href="route('admin.posts.create')" :active="request()->routeIs('admin.posts.create')">
        {{ __('CreatePost') }}
      </x-nav-link>
      {{-- Edit Post --}}
      <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
        {{ __('EditPost') }}
      </x-nav-link>
      {{-- Delete Post --}}
      <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
        {{ __('DeletePost') }}
      </x-nav-link>
  </h2>
</x-slot>


{{-- <button class="center mr-5 bg-gray-200 hover:bg-gray-300 border border-gray-400 text-black font-bold py-2 px-6 rounded-md">
  <a href="{{ route('dashboard') }}">Retour Dashboard</a>
</button> --}}

{{-- LISTE DES POSTS --}}
    <div class="md:px-32 py-8 w-full">
      <div class="shadow overflow-hidden rounded border-b border-gray-200">
        <table class="min-w-full bg-white">
          <thead class="bg-gray-800 text-white">
            <tr>
              <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Id</th>
              <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Title</th>
              <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Content</th>
              <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Date_Created</td>
              <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Date_Updated</th>
              <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Catégorie</th>
              <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Modifier / Supprimer</td>
            </tr>
          </thead>
        <tbody class="text-gray-700">
          @foreach ($posts as $post)
          <tr>
            <td class="w-1/3 text-left py-3 px-4">{{ $post->id }}</td>
            <td class="w-1/3 text-left py-3 px-4">{{ $post->title }}</td>
            <td class="w-1/3 text-left py-3 px-4">{!! Str::of($post->content)->limit(30) !!}</td>
            <td class="w-1/3 text-left py-3 px-4">{{ \Carbon\Carbon::parse($post->created_at)->format('d.m.y') }}</td>
            <td class="w-1/3 text-left py-3 px-4">{{ \Carbon\Carbon::parse($post->updated_at)->format('d.m.y') }}</td>
            <td class="w-1/3 text-left py-3 px-4">{{ $post->categorie->name }}</td>

            <td class="text-left py-3 px-4">
              <a class="hover:text-blue-500" href="#">Modifier</a> <hr>
              <a class="hover:text-blue-500" href="#">Supprimer</a>
            </td>
          </tr>
          @endforeach

        </tbody>
        </table>
      </div>
    </div>


</x-app-layout>
