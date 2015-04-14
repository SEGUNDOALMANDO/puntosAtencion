<?php
namespace App\Http\Controllers;

use App\Activity;
use App\TypeParticipant;
use App\User;
use Input;
use Response;
use Illuminate\Http\Request;


class ActivityController extends Controller
{

	public function index()
    {
        $typePartipants = TypeParticipant::where('status','1')->lists('type', 'id');
		$job_types  = \Lang::get('utils.job_types');
		//dd($job_types);
		return view('Activity/new', compact('typePartipants'));
	}

	/*public function myactivities()
	{
		$statusactive	=	$this->activityStatusRepo->statusActive();
		$typeparticipantActive	=	$this->typeParticipantRepo->typeparticipantActive();

		$rol	=	Input::get('listarol');
		$status =	Input::get('liststatus');

		$actividades 	=	 $this->activityRepo->findActivity($rol,$status);

		return View::make('Activity/myactivities',
			compact(
				'actividades'
				,'statusactive'
				,'typeparticipantActive'
				,'rol'
				,'status'
			));*/
	public function getResponsables()
	{

		$user = Input::get('busqueda');
        $data = array();
        $search = User::where('name', 'LIKE', '%'.$user.'%')
            //->orWhere('apaterno', 'LIKE', '%' . $user . '%')
            //->orWhere('amaterno', 'LIKE', '%' . $user . '%')
            ->get();
        //dd($search);
        foreach($search as $results => $user)
        {
            $data[] = array('id'=>$user->id, 'name'=>$user->name/*.' '.$user->apaterno.' '.$user->amaterno*/);
        }

		//$data = User::findUserActivity($user);
		return Response::json($data);
	}
	/**
	 * Show the form for creating a new resource.
	 * GET /activity/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /activity
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
        $activity = new Activity;
        $activity->activity = $request->activity;
        $activity->date_end = \Carbon::parse($request->date_end)->format('Y-m-d');
        $activity->date_start =\Carbon::parse($request->date_start)->format('Y-m-d');;
        $activity->priority = $request->priority;
        $activity->user_register = $request->user_register;

        $activity->save();
        dd($activity);
        dd($request);
		return 'register activity';
	}

	/**
	 * Display the specified resource.
	 * GET /activity/{id}
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
	 * GET /activity/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		/*$statusactive	=	$this->activityStatusRepo->statusActive();
		$typeparticipantActive	=	$this->typeParticipantRepo->typeparticipantActive();


		$actividad 	=	 $this->activityRepo->getActivity($id);

		return View::make('Activity/edit', compact('actividad','statusactive'));*/
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /activity/{id}
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
	 * DELETE /activity/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}