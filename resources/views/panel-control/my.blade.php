@extends('panel-control.components.main')

@section('content')

<section class="section">

    <div class="section-header">
        <h1>{{ __('messages.my_favorites') }}</h1>
    </div>

    <div class="section-body">

        <div class="row mt-4">

            <div class="col-12">

                <div class="card">

                    <div class="card-header">
                        <h4>{{ __('messages.favorite_movies') }}</h4>
                    </div>

                    <div class="card-body">

                        <div id="favorites-content">

                           <div class="row">

@forelse($favorites as $favorite)

    <div class="col-md-3 mb-4">

        <div class="card">

            <img src="{{ $favorite->poster }}"
                 class="card-img-top">

            <div class="card-body">

                <h6>{{ $favorite->title }}</h6>

                <p>{{ $favorite->year }}</p>

                <a href="{{ url('/movie/' . $favorite->imdb_id) }}"
                   class="btn btn-primary btn-sm">

                    Detail

                </a>

                <form action="{{ url('/favorite/delete/' . $favorite->id) }}"
      method="POST"
      class="d-inline">

    @csrf
    @method('DELETE')

    <button type="submit"
            class="btn btn-danger btn-sm">

        Delete

    </button>

</form>

            </div>

        </div>

    </div>

@empty

    <div class="col-12 text-center">

        <h5>No favorites yet</h5>

    </div>

@endforelse

</div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection