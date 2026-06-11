@extends('panel-control.components.main')

@section('content')

<section class="section">

    <div class="section-header">
        <h1>{{ __('messages.movies_list') }}</h1>
    </div>

    <div class="section-body">

        <div class="row mt-4">

            <div class="col-12">

                <div class="card">

                    <div class="card-header">

                        <h4>{{ __('messages.all_movies') }}</h4>

                    </div>

                    <div class="card-body">

                        <div class="float-right mb-3">

                            <form action="{{ url('/panel-control') }}"
                                  method="GET">

                                <div class="search-element">

                                    <div class="input-group">

                                        <input type="text"
                                               name="q"
                                               id="search-input"
                                               class="form-control"
                                               placeholder="{{ __('messages.search_placeholder') }}">

                                        <div class="input-group-append">

                                            <button class="btn btn-primary"
                                                    type="submit">

                                                <i class="fas fa-search"></i>

                                            </button>

                                        </div>

                                    </div>

                                </div>

                            </form>

                        </div>

                        <div class="clearfix mb-3"></div>

                        <div class="table-responsive">

                            <table class="table table-striped"
                                   id="movie-table">

                                <thead>

                                    <tr>

                                        <th>{{ __('messages.poster') }}</th>

                                        <th>{{ __('messages.title') }}</th>

                                        <th>{{ __('messages.year') }}</th>

                                        <th>{{ __('messages.type') }}</th>

                                        <th>{{ __('messages.action') }}</th>

                                    </tr>

                                </thead>

                                <tbody id="Movie-container">

                                @if(!empty($movies))

                                    @foreach($movies as $movie)

                                        <tr>

                                            <td>

                                                <img src="{{ $movie['Poster'] }}"
                                                     width="80">

                                            </td>

                                            <td>

                                                {{ $movie['Title'] }}

                                            </td>

                                            <td>

                                                {{ $movie['Year'] }}

                                            </td>

                                            <td>

                                                {{ $movie['Type'] }}

                                            </td>

                                            <td>

    <a href="{{ url('/movie/' . $movie['imdbID']) }}"
       class="btn btn-info btn-sm">

        Detail

    </a>

    <form action="{{ url('/favorite/add') }}"
          method="POST"
          style="display:inline;">

        @csrf

        <input type="hidden"
               name="title"
               value="{{ $movie['Title'] }}">

        <input type="hidden"
               name="year"
               value="{{ $movie['Year'] }}">

        <input type="hidden"
               name="poster"
               value="{{ $movie['Poster'] }}">

        <input type="hidden"
               name="imdb_id"
               value="{{ $movie['imdbID'] }}">

        <input type="hidden"
               name="type"
               value="{{ $movie['Type'] }}">

        <button type="submit"
                class="btn btn-danger btn-sm">

            <i class="fas fa-heart"></i>

        </button>

    </form>

</td>

                                        </tr>

                                    @endforeach

                                @else

                                    <tr id="empty-row">

                                        <td colspan="5"
                                            class="text-center py-5">

                                            <i class="fas fa-search fa-3x text-muted mb-3 d-block"></i>

                                            <span class="text-muted">

                                                {{ __('messages.search_instruction') }}

                                            </span>

                                        </td>

                                    </tr>

                                @endif

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection