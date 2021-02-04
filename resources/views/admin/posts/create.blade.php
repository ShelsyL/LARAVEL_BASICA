@php
  $categories = \App\Models\Categorie::orderBy('name', 'ASC')->get();
@endphp

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


</x-app-layout>
