
<nav class='navbar nav-bar-default custom-nav'>
<div class='container-fluid'>

		<div class='navbar-header'>

			{{ link_to('/', 'Panyar', array('class' => 'navbar-brand') ) }} 
						
			</div>
			@if ( Auth::check() )

					<p class="navbar-text navbar-right"> 
					{{ link_to_route( "users.courses", 
									   $name = Auth::user()->name, 
									   $name, array('class' => 'navbar-link' ) )}} 
					</p>					

						@else
						<p class="navbar-text navbar-right"> 
						{{ link_to('/login', 'Login'
									, array('class' => 'navbar-link')) }} 
						</p>

						@endif
	</div>
	</nav>

