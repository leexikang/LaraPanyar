<article class='col-md-2 category ' >
			<ul class='nav nav-stacked'>
                @foreach(Category::all() as $category)
                <li>
                {{ link_to('tags/' . $category = $category->name, $category ) }}
                </li>
                @endforeach
			</ul>
		
</article>