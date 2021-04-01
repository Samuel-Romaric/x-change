@extends('layouts.app')

@section('title', 'Create')

@section('content')

<main x-data="data()">
  <div class="max-w-7xl px-4 sm:px-6 lg:px-12 mx-auto forum-header mt-6">
    <h3 class="text-lg font-semibold text-gray-600">Bienvenue <span
        class="text-blue-500">{{ \Auth::user()->name }}</span></h3>
  </div>

  <div class="max-w-7xl px-4 sm:px-6 lg:px-12 mx-auto mt-4 forum-body">
    <div class="flex justify-between mb-5 items-center">
      <h1 class="text-lg font-bold text-gray-800">Creation de votre post <span class="text-gray-700"></span></h1>
      <button
        class="py-2 px-4 flex items-center space-x-1 bg-blue-600 text-white rounded-md hover:bg-blue-800 duration-200">
        <x-heroicon-o-plus-sm class="h-5 w-5 flex-shrink-0" />
        <span>
          Ajouter un post
        </span>
      </button>
    </div>

    <div class="bg-white mt-8 py-6 px-8 rounded shadow-sm">
      <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div class="space-y-4">
          <div>
            <label class="font-semibold" for="title">Titre</label>
            <input name="title" value="{{ old('title') }}"
              class="block w-full rounded-md text-base py-2 h-9 border-gray-300" id="title" type="text">
            @error('title')
            <p class="text-red-600 mt-1 text-sm">{{ $message }}</p>
            @enderror
          </div>
          <div>
            <label class="font-semibold" for="content">Contenu</label>
            <textarea class="block w-full rounded-md text-base py-2 h-40 border-gray-300" name="content" id="content"
              cols="30" rows="10">{{ old('content') }}</textarea>
            @error('content')
            <p class="text-red-600 mt-1 text-sm">{{ $message }}</p>
            @enderror
          </div>
        </div>

        <button
          class="bg-blue-500 mt-5 duration-200 hover:bg-blue-700 py-2 rounded-md px-2 text-white block w-full text-base"
          type="submit">
          Ajouter
        </button>
      </form>
      <div class="text-center mt-2">
        <a class="underline" href="{{ route('login') }}">Retour</a>
      </div>
    </div>


  </div>
</main>

@endsection