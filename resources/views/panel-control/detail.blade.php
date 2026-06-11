@extends('panel-control.components.main')

@section('content')

<section class="section">

    <div class="section-header">

        <h1>Movie Detail</h1>

    </div>

    <div class="section-body">

        <div class="card">

            <div class="card-body">

                <div class="row">

                    <div class="col-md-4">

                        <img src="{{ $movie['Poster'] }}"
                             class="img-fluid rounded">

                    </div>

                    <div class="col-md-8">

                        <h2>
                            {{ $movie['Title'] }}
                        </h2>

                        <p class="text-muted">

                            {{ $movie['Year'] }}
                            •
                            {{ $movie['Genre'] }}

                        </p>

                        <p>

                            {{ $movie['Plot'] }}

                        </p>

                        <hr>

                        <div class="row">

                            <div class="col-md-6">

                                <p>
                                    <b>Director :</b><br>
                                    {{ $movie['Director'] }}
                                </p>

                            </div>

                            <div class="col-md-6">

                                <p>
                                    <b>Writer :</b><br>
                                    {{ $movie['Writer'] }}
                                </p>

                            </div>

                            <div class="col-md-6">

                                <p>
                                    <b>Actors :</b><br>
                                    {{ $movie['Actors'] }}
                                </p>

                            </div>

                            <div class="col-md-6">

                                <p>
                                    <b>Language :</b><br>
                                    {{ $movie['Language'] }}
                                </p>

                            </div>

                            <div class="col-md-6">

                                <p>
                                    <b>Country :</b><br>
                                    {{ $movie['Country'] }}
                                </p>

                            </div>

                            <div class="col-md-6">

                                <p>
                                    <b>Box Office :</b><br>
                                    {{ $movie['BoxOffice'] ?? '-' }}
                                </p>

                            </div>

                        </div>

                        <a href="{{ url('/panel-control') }}"
                           class="btn btn-secondary mt-3">

                            <i class="fas fa-arrow-left"></i>
                            Back to Movies

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection