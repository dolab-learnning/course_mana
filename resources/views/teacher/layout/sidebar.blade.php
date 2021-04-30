<nav id="sidebarMenu" class="sidebar d-md-block bg-primary text-white collapse" data-simplebar>
    <div class="sidebar-inner px-4 pt-3">
        <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
            <div class="d-flex align-items-center">
                <div class="user-avatar lg-avatar mr-4">
                    <img src="" class="card-img-top rounded-circle border-white" alt="Bonnie Green">
                </div>
                <div class="d-block">
                    <h2 class="h6">Hi, Jane</h2>
                    <a href="../../pages/examples/sign-in.html" class="btn btn-secondary text-dark btn-xs"><span class="mr-2"><span class="fas fa-sign-out-alt"></span></span>Sign Out</a>
                </div>
            </div>
            <div class="collapse-close d-md-none">
                <a href="#sidebarMenu" class="fas fa-times" data-toggle="collapse"
                   data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true"
                   aria-label="Toggle navigation"></a>
            </div>
        </div>
        <ul class="nav flex-column">
            <li class="nav-item ">
                <a href="{{route('getListCours')}}" class="nav-link">
                    <span class="sidebar-icon"><span class="fas fa-hand-holding-usd"></span></span>
                    <span>Course</span>
                </a>
            </li>
            

            <li class="nav-item ">
                <a href="{{route('manager.request')}}" class="nav-link">
                    <span>Déconnexion</span>
                </a>
            </li>

{{--            <li class="nav-item ">--}}
{{--                <a href="{{route('logout')}}" class="nav-link">--}}
{{--                    <span>Déconnexion</span>--}}
{{--                </a>--}}
{{--            </li>--}}

        </ul>
    </div>
</nav>
