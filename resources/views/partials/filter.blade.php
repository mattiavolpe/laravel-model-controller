<div class="text-end mb-3 text-light">
  <span>Ordina per: </span>
  <a href="{{ route('home') }}" class="ms-3 {{ Route::currentRouteName() === 'home' ? 'text-light' : 'text-danger' }}">Predefinito</a>
  <a href="{{ route('sortByVote') }}" class="mx-3 {{ Route::currentRouteName() === 'sortByVote' ? 'text-light' : 'text-danger' }}">Voto</a>
  <a href="{{ route('sortByTitle') }}" class="{{ Route::currentRouteName() === 'sortByTitle' ? 'text-light' : 'text-danger' }}">Titolo</a>
</div>
