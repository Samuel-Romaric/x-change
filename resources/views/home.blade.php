@extends('layouts.app')

@section('title', 'Acceuil')

@section('content')
<main x-data="data()">
  <div class="max-w-7xl px-4 sm:px-6 lg:px-12 mx-auto forum-header mt-6">
    <h3 class="text-lg font-semibold text-gray-600">Bienvenue <span
        class="text-blue-500">{{ \Auth::user()->name }}</span></h3>
  </div>

  <div class="max-w-7xl px-4 sm:px-6 lg:px-12 mx-auto mt-4 forum-body">
    <div class="flex justify-between mb-5 items-center">
      <h1 class="text-lg font-bold text-gray-800">Postes du forum : <span
          class="text-gray-700">{{ $posts->total() }}</span></h1>

      <a href="{{ route('posts.create') }}"
        class="py-2 px-4 flex items-center space-x-1 bg-blue-600 text-white rounded-md hover:bg-blue-800 duration-200">
        <x-heroicon-o-plus-sm class="h-5 w-5 flex-shrink-0" />
        <span>
          Ajouter un post
        </span>
      </a>
    </div>


    <div class="grid grid-cols-2 gap-3">
      @if($posts->total() > 0)
      @foreach ($posts as $post)
      @include('partials.post-item', ['post' => $post])
      @endforeach
      @else
      <div class="text-center text-base py-4 text-gray-500">
        Aucun posts trouvé
      </div>
      @endif
    </div>

    @if($posts->total() > 0)
    <div class="mt-4">
      {!! $posts->links() !!}
    </div>
    @endif
  </div>
</main>
@endsection

@section('js')
<script>
  function data() {
  return {

  }
}
</script>
@endsection