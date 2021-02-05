{{--
Variables disponibles
- $work Work
- $tags ARRAY(Tag)
--}}

@php
$clients = \App\Models\Client::orderBy('name', 'ASC')->get();
$tags = \App\Models\Tag::orderBy('name', 'ASC')->get();
@endphp

<x-app-layout>
   <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
         {{ __('CreateWork : ') }}
         {{-- Create Work --}}
         <x-nav-link :href="route('admin.works.create')" :active="request()->routeIs('admin.works.create')">
            {{ __('CreateWork') }}
         </x-nav-link>
      </h2>
   </x-slot>
   {{-- LISTE DES WORKS --}}
   <div class="md:px-32 py-8 w-full">
      <div class="shadow overflow-hidden rounded border-b border-gray-200">
         <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
               <tr>
                  <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Title</th>
                  <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Content</th>
                  <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Client</th>
                  <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Tags</th>
                  <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">inSlider</th>
                  <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Validation</th>
               </tr>
            </thead>
            <tbody class="text-gray-700">
               <form action="{{ route('admin.works.store') }}" method="post">
                  @csrf
                  <tr>
                     <td class="w-1/3 text-left py-3 px-4"><input type="text" name="title" id="title"></td>
                     <td class="w-1/3 text-left py-3 px-4"><textarea name="content" id="content"></textarea></td>
                     <td class="w-1/3 text-left py-3 px-4">
                        <select name="client_id" id="client_id">
                           @foreach ($clients as $client)
                           <option value="{{ $client->id }}">{{ $client->name }}</option>
                           @endforeach
                        </select>
                     </td>
                     <td class="w-1/3 text-left py-3 px-4">
                        <select name="tags_id[]" id="tags_id" multiple>
                           @foreach ($tags as $tag)
                           <option value="{{ $tag->id }}" > {{ $tag->name }} </option>
                           @endforeach
                        </select>
                     </td>
                     <td class="w-1/3 text-left py-3 px-4">
                       <label > Is in slider ? </label><br>
                       <input type="radio" id="yes" name="inSlider" value="1">
                       <label for="yes">Yes</label><br>
                       <input type="radio" id="no" name="inSlider" value="0">
                       <label for="no">No</label><br>
                     </td>
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
