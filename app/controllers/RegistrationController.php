<?php
use Panyar\Repositories\UserRepositoryInterface;
use Panyar\Services\Validation\UserValidator as Validator;
class RegistrationController extends \BaseController {

    protected $user;
    protected $validator;
    public function __construct(UserRepositoryInterface $user, Validator $validator){

        $this->user = $user;
        $this->validator = $validator;
    }
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function index()
	{
        return View::make("pages.create");
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
      if( $this->validator->validate(Input::all()) )
      {
	 	  return Redirect::to("/signup")->withErrors($this->validator->errors())->withInput();
      }
        $this->user->create(Input::all());

	}



	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
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
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
