<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand d-flex justify-content-center offset-1" href="#"><h3 class="align-self-center">Laracarte</h3></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mt-2 mt-lg-0">
            <li class="nav-item {{set_active_route('home')}}">
                <a class="nav-link txt-size-18" href="{{route("home")}}">Home <span class="sr-only">(current)</span></a>
            </li>
            {{--fontion set_active_route creer dans le helper--}}
            <li class="nav-item {{set_active_route('about')}}">
                <a class="nav-link txt-size-18" href="{{route("about")}}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link txt-size-18" href="#">Artisans</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle txt-size-18" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Planet</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Laravel.com</a>
                    <a class="dropdown-item" href="#">Laravel.io</a>
                    <a class="dropdown-item" href="#">Laracasts</a>
                    <a class="dropdown-item" href="#">Larajobs</a>
                    <a class="dropdown-item" href="#">Laravel news</a>
                    <a class="dropdown-item" href="#">Laravelchat</a>
                </div>
            </li>
            <li class="nav-item {{set_active_route('contact')}}">
                <a class="nav-link txt-size-18" href="{{route('contact')}}">Contact</a>
            </li>
        </ul>
    </div>
</nav>