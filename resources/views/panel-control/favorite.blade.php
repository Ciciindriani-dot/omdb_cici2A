<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>My Favorite &mdash; Stisla</title>

    <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/modules/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/summernote/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
</head>

<body>
 @include('layout.header')
 @include('layout.sidebar')
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="{{ url('/') }}">Cici Indriani</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="{{ url('/') }}">CI</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Pages</li>
                        <li class="dropdown active">
                            <a href="#" class="nav-link has-dropdown"><i
                                    class="fas fa-film"></i><span>Movies</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="{{ url('dashboard') }}">Search Movies</a></li>
                                <li class="active"><a class="nav-link" href="{{ url('Favorites') }}">My Favorites</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </aside>
            </div>

            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>My Favorites</h1>
                        <div class="section-header-breadcrumb">
                            <div class="breadcrumb-item active"><a href="{{ url('dashboard') }}">Dashboard</a></div>
                            <div class="breadcrumb-item">Favorites</div>
                        </div>
                    </div>

                    <div class="section-body">
                        <div class="row mt-4">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>{{ __('messages.favorite_movies')  }}</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="favorites-content">
                                            <div class="text-center py-5">
                                                <i class="fas fa-heart-broken fa-3x text-muted mb-3 d-block"></i>
                                                <h5 class="text-muted">
                                                    {{ __('messages.No_favorites_yet') }}
                                                </h5>
                                                <p class="text-muted">
                                                    {{ __('Start adding movies to your favorites list!') }}
                                                </p>
                                                <a href="{{ url('dashboard') }}" class="btn btn-primary mt-2">
                                                    <i class="fas fa-search"></i>
                                                    {{ __('Search Movies') }}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
           @include('layout.footer')
        </div>
    </div>

    <script src="{{ asset('assets/modules/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/modules/popper.js') }}"></script>
    <script src="{{ asset('assets/modules/tooltip.js') }}"></script>
    <script src="{{ asset('assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('assets/modules/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/stisla.js') }}"></script>
    <script src="{{ asset('assets/modules/owlcarousel2/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/modules/summernote/summernote-bs4.js') }}"></script>
    <script src="{{ asset('assets/modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script>
        // Set current year in footer
        document.getElementById('years').textContent = new Date().getFullYear();
    </script>
</body>

</html>