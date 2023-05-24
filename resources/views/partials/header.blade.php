<header class="text-center bg-dark py-3">
  <img height="150" src="{{ Vite::asset('resources/img/logo.png') }}" alt="The Movies Showcase logo">
  <nav class="nav justify-content-center">
    <a class="nav-link text-light {{ Route::currentRouteName() === 'home' ? 'bg-danger rounded-2' : '' }}" href="{{ route('home') }}">Home</a>
    <a class="nav-link text-light {{ Route::currentRouteName() === 'contactUs' ? 'bg-danger rounded-2' : '' }}" href="{{ route('contactUs') }}">Contact Us</a>
  </nav>
</header>
