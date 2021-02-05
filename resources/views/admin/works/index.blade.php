<x-app-layout>
   <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
         {{ __('Gestion Work : ') }}
         {{-- Create Post --}}
         <x-nav-link :href="route('admin.works.create')" :active="request()->routeIs('admin.works.create')">
            {{ __('CreateWork') }}
         </x-nav-link>
      </h2>
   </x-slot>
   <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
         <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
               <h3>Liste des works</h3>
            </div>
         </div>
      </div>
   </div>
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
                  <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Client</th>
                  <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Tags</th>
                  <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">inSlider</th>
                  <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Modifier / Supprimer</td>
               </tr>
            </thead>
            <tbody class="text-gray-700">
               @foreach ($works as $work)
               <tr>
                  <td class="w-1/3 text-left py-3 px-4">{{ $work->id }}</td>
                  <td class="w-1/3 text-left py-3 px-4">{{ $work->title }}</td>
                  <td class="w-1/3 text-left py-3 px-4">{!! Str::of($work->content)->limit(30) !!}</td>
                  <td class="w-1/3 text-left py-3 px-4">{{ \Carbon\Carbon::parse($work->created_at)->format('d.m.y') }}</td>
                  <td class="w-1/3 text-left py-3 px-4">{{ \Carbon\Carbon::parse($work->updated_at)->format('d.m.y') }}</td>
                  <td class="w-1/3 text-left py-3 px-4">{{ $work->client->name }}</td>
                  <td class="w-1/3 text-left py-3 px-4">
                     @foreach ($work->tags as $tag)
                     {{ $tag->name }}
                     @endforeach
                  </td>
                  <td class="w-1/3 text-left py-3 px-4">{{ $work->inSlider }}</td>
                  <td class="text-left py-3 px-4">
                     <a class="hover:text-blue-500" href="{{ route('admin.works.edit', $work->id) }}">Modifier</a>
                     <hr>
                     <form action="{{ route('admin.works.destroy', $work->id) }}" method="post" >
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit">Supprimer</button>
                     </form>
                  </td>
               </tr>
               @endforeach
            </tbody>
         </table>
      </div>
   </div>
</x-app-layout>
