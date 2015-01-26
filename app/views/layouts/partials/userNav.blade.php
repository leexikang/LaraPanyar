<article class='col-md-2 userNav ' >
	<ul class='nav nav-pills nav-stacked '>

		<li> {{ link_to_route("users.courses", 'View Courses', $name = Auth::user()->name) }} </li>	
		<li> {{ link_to_route("users.profile", 'Edit Profile', $name) }}  </li>	
		<li> {{ link_to_route("courses.create", 'Create Courses') }}  </li>	
		<li> {{ link_to('/logout', 'Logout') }} </li>
	</ul>
</article>