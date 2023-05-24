@extends("layouts.app")

@section("pageTitle")
Movies
@endsection

@section("content")
<div class="container">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 justify-content-center">
    @foreach($movies as $movie)
    <div class="col">
      <div class="card border-0 h-100 text-dark bg-light">
        <img height="300" src="{{ $movie -> image }}" alt="{{ $movie -> title }} poster" class="card-img-top">
        <div class="card_infos px-3 py-2">
          <h5 class="mb-0">{{ $movie -> title }}</h5>
          @if($movie -> title != $movie -> original_title)
          <span>{{ $movie -> original_title }}</span>
          <br>
          @endif
          <h6 class="d-inline">Voto: </h6>
          <?php $stars = round(($movie -> vote) / 2); ?>
          @for($i = 0; $i < $stars; $i++)
          <i class="fa-solid fa-star text-warning"></i>
          @endfor
          @for($i = 0; $i < 5 - $stars; $i++)
          <i class="fa-solid fa-star text-dark"></i>
          @endfor
          <br>
          <h6 class="d-inline">Data di rilascio: </h6>
          <span>{{date_format(date_create($movie -> date), "d/m/Y")}}</span>
        </div>
      </div>
    </div>
    <!-- /.col -->
    @endforeach
  </div>
  <!-- /.row -->
</div>
<!-- /.container -->
@endsection
