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
                   aria-expanded="false">  {{ $name = Auth::user()->name }}<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li> <a href="{{ route('users.courses', $name)}} ">
                            <span class="glyphicon glyphicon-folder-open"></span>
                            View Courses </a></li>
                    <li><a href="{{ route('courses.create', $name)}}">
                            <span class="glyphicon glyphicon-plus"> </span>
                            Create Course </a></li>
                    <li><a href="{{ route('users.edit', $name)}}">
                            <span class="glyphicon glyphicon-edit"> </span>
                            Create Course </a></li>
                    <li class="divider"></li>
                    <li> <a href=" {{ url('/logout') }} "><span class="glyphicon glyphicon-off"></span> Logout</a></li>
                </ul>
            </div>
        </div>

            @else
            <p class="navbar-text navbar-right">
                {{ link_to('/login', 'login'
                , array('class' => 'navbar-link')) }}
            </p>

            @endif
    </div>
</nav>
