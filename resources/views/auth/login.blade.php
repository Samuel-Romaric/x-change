@extends('layouts.auth')

@section('title', 'Connexion')

@section('content')
<div class="max-w-lg mx-auto">
  <div class="text-center">
    <a href="{{ route('login') }}">
      <span
        class="bg-gradient-to-r shadow from-orange-400 font-bold text-2xl to-orange-500 text-white px-2 py-1 rounded">xChange</span>
    </a>
  </div>

  <div class="bg-white mt-8 py-6 px-8 rounded shadow-sm">
    {{-- <h3 class="text-3xl font-semibold mb-3 text-center">Connexion</h3>
 --}}
    <form action="{{ route('login') }}" method="post">
      @csrf
      <div class="space-y-4">
        <div>
          <label class="font-semibold" for="email">Email</label>
          <input name="email" value="{{ old('email') }}"
            class="block w-full rounded-md text-base py-2 h-9 border-gray-300" id="email" type="text">
          @error('email')
          <p class="text-red-600 mt-1 text-sm">{{ $message }}</p>
          @enderror
        </div>
        <div>
          <label class="font-semibold" for="password">Mot de passe</label>
          <input name="password" class="block w-full rounded-md text-base py-2 h-9 border-gray-300" id="password"
            type="password">
          @error('password')
          <p class="text-red-600 mt-1 text-sm">{{ $message }}</p>
          @enderror
        </div>
      </div>

      <button
        class="bg-blue-500 mt-5 duration-200 hover:bg-blue-700 py-2 rounded-md px-2 text-white block w-full text-base"
        type="submit">Connexion</button>
    </form>
    <div class="text-center mt-2">
      <a class="underline" href="{{ route('register') }}">Inscription</a>
    </div>
  </div>
</div>
@endsection