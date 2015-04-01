@include("layouts.partials.header")
@include("layouts.partials.nav")
	<div class="container">
	<div class="row">
		<section class="col-md-12 ">
			<div class="cotainer-fluid">

			
		@yield('content')
		

			</div>
		</section>
	</div>
        </div>

<br/> <br/>
@include("layouts.partials.footer")	

