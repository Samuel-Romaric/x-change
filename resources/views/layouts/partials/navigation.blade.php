<nav class="bg-white shadow-sm">
  <div class="max-w-7xl px-4 sm:px-6 lg:px-12 mx-auto">
    <div class="flex items-center justify-between py-4">
      <h1>
        <a href="{{ route('home') }}">
          <span
            class="bg-gradient-to-r from-orange-400 font-bold text-base to-orange-500 text-white px-2 py-1 rounded">xChange</span>
        </a>
      </h1>

      <ul class="flex items-center font-semibold text-sm space-x-3">
        <li><a class="text-blue-600 hover:text-blue-800 duration-200 underline" href="{{ route('home') }}">Postes</a>
        </li>
        <li><a class="text-blue-600 hover:text-blue-800 duration-200 underline" href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('form-logout').submit();">Déconnexion</a>
        </li>
        <form action="{{ route('logout') }}" method="post" id="form-logout" class="sr-only">
          @csrf
        </form>
      </ul>
    </div>
  </div>
</nav>