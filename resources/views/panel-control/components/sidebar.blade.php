<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">omdb cicit</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">Cici</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Pages</li>
            <li class="dropdown active">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>{{ __('messages.movie_list') }}</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ url('/panel-control')}}">{{ __('messages.search_movies') }}</a></li>
                    <li class=active><a class="nav-link" href="{{ url('/Favorites') }}">{{ __('messages.my_favorites') }}</a></li>
                </ul>
            </li>
        </ul>

    </aside>
</div>