<nav class='navbar nav-bar-default custom-nav'>
    <div class='container-fluid'>

        <div class='navbar-header'>

            {{ link_to('/', 'Panyar', array('class' => 'navbar-brand') ) }}

        </div>
        @if ( Auth::check() )

        <div class="navbar-text navbar-right">

            <div class="dropdown">
                <a href="#" class="dropdown-toggle navbar-link"
                   data-toggle="dropdown" role="button"
                   aria-expanded="false">  {{ Auth::user()->name }}<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li> {{ link_to_route("users.courses", 'View Courses', $name = Auth::user()->name) }} </li>
                    <li> {{ link_to_route("users.edit", 'Edit Profile', $name) }}  </li>
                    <li> {{ link_to_route("courses.create", 'Create Courses') }}  </li>
                    <li class="divider"></li>
                    <li> {{ link_to('/logout', 'Logout') }} </li>
                </ul>
            </div>
        </div>

            @else
            <p class="navbar-text navbar-right">
                {{ link_to('/login', 'Login'
                , array('class' => 'navbar-link')) }}
            </p>

            @endif
    </div>
</nav>
