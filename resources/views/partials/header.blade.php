<header class="text-center bg-dark py-3">
  <img height="150" src="{{ Vite::asset('resources/img/logo.png') }}" alt="The Movies Showcase logo">
  <nav class="nav justify-content-center">
    <a class="nav-link text-light mx-2 rounded-2 {{ Route::currentRouteName() === 'home' ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
    <a class="nav-link text-light mx-2 rounded-2 {{ Route::currentRouteName() === 'contactUs' ? 'active' : '' }}" href="{{ route('contactUs') }}">Contact Us</a>
  </nav>
</header>
