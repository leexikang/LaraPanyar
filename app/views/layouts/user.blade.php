@include("layouts.partials.header")
@include("layouts.partials.nav")
	<div class="container-fluid">
	<div class="row">
@include("layouts.partials.userNav")
		<section class="col-md-10 content">
			<div class="cotainer-fluid">

			
		@yield('content')
		

			</div>
		</section>
	</div>
	</div>

<br/> <br/>
@include("layouts.partials.footer")	

