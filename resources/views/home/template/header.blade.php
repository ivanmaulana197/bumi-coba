<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

        <div id="logo">
            <h1><a href="{{route('home')}}">BU<span>MI</span></a></h1>
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto {{request()->is('/') ? 'active': ''}}" href="{{ request()->is('/') ? '#hero' : route('home')}}">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About</a></li>
                <li class="dropdown"><a class="nav-link scrollto" href="{{ request()->is('/') ? '#category' : route('home')}}"><span>Category</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{route('homeCategory')}}">Beasiswa</a></li>
                        <li><a href="{{route('homeCategory')}}">Lomba</a></li>
                        <li><a href="{{route('homeCategory')}}">Seminar</a></li>
                        <li><a href="{{route('homeCategory')}}">Exchange</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto " href="{{ request()->is('/') ? '#trending' : route('home')}}">Hot Event</a></li>
                <li><a class="nav-link scrollto" href="{{ request()->is('/') ? '#team' : route('home')}}">Team</a></li>
                <li><a class="nav-link scrollto" href="{{ request()->is('/') ? '#contact' : route('home')}}">Contact</a></li>
                <li><a class="nav-link scrollto" href="{{route('login')}}">Login</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>
<!-- End Header -->
