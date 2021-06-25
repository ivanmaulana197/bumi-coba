<div class="sidebar-header">
    <div class="d-flex justify-content-between">
        <div class="logo">
            <a href="{{route('home')}}"><img src="{{asset('img/web/bumi.png')}}" alt="img"></a>
        </div>
        <div class="toggler">
            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
        </div>
    </div>
</div>

<div class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-title">Menu</li>

        <li class="sidebar-item active ">
            <a href="{{route('home')}}" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-stack"></i>
                <span>Data Master</span>
            </a>
            <ul class="submenu ">
                <li class="submenu-item ">
                    <a href="{{route('category.index')}}">Category</a>
                </li>
                <li class="submenu-item ">
                    <a href="{{route('event.index')}}">Event</a>
                </li>
            </ul>
        </li>
    </ul>
</div>
<button class="sidebar-toggler btn x" aria-label="close"><i data-feather="x"></i></button>
