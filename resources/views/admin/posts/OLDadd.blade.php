<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gestion des posts : ') }}
            {{-- Add Post --}}
          <x-nav-link :href="route('admin.posts.add')" :active="request()->routeIs('admin.posts.add')">
              {{ __('AddPost') }}
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


    {{-- ADD POST --}}
    <div class="heading text-center font-bold text-2xl m-5 text-gray-800">Ajouter un Post</div>
    <style>
      body {background:white !important;}
    </style>



  <div class="editor mx-auto w-10/12 flex flex-col text-gray-800 border border-gray-300 p-4 shadow-lg max-w-2xl">
    <form method="POST" action="{{ route('posts.store') }}">
     @csrf

{{-- Titre --}}
  <div>
    <input type="text" id="title" name="title" placeholder="Title" class="title bg-gray-100 border border-gray-300 p-2 mb-4 outline-none"  />
  </div>

  {{-- Content --}}
  <div >
    <textarea id="content" name="content" placeholder="Description du post" class="description bg-gray-100 border border-gray-300 p-2 mb-4 outline-none"></textarea>
  </div>

  {{-- Categorie --}}
  <div>
    <input type="text" id="categorie" name="categorie" placeholder="Categorie" class="title bg-gray-100 border border-gray-300 p-2 mb-4 outline-none"   />
  </div>

  {{-- Submit --}}
  <div>
    <input class="btn border border-indigo-500 p-1 px-4 font-semibold cursor-pointer text-gray-200 ml-2 bg-indigo-500" type="submit" />
  </div>
</form>
</div>




</x-app-layout>
