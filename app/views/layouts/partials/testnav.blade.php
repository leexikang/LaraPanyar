

@include('layouts.partials.header')


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
        <article class='col-md-2 userNav ' >
            <ul class='nav nav-pills nav-stacked '>

            </ul>
            <

            @else
            <p class="navbar-text navbar-right">
                {{ link_to('/login', 'Login'
                , array('class' => 'navbar-link')) }}
            </p>

            @endif
    </div>
</nav>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Link</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>

<script type="text/javascript"  src=" {{ asset('components/jquery/jquery.js') }} " ></script>
<script type="text/javascript"  src=" {{ asset('js/bootstrap.js') }} " ></script>
<script type="text/javascript"  src="{{ asset('js/app.js') }}"></script>
</body>
</html>