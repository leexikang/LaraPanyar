<?php

use Panyar\Repositories\CategoryRepositoryInterface;

class CategoriesController extends \BaseController {

    protected $category;
    public function __construct( CategoryRepositoryInterface $category){

    $this->category = $category;

    }
		/**
	 * Display a listing of the resource.
	 * GET /categories
	 *
	 * @return Response
	 */

   public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /categories/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /categories
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /categories/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($name)
	{

        $page = Input::get('page');
        $data = $this->category->getByPage($page, 6, $name);
        $courses = Paginator::make($data->items, $data->totalItems, 6);
		return View::make('hello', compact('courses'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /categories/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /categories/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /categories/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}