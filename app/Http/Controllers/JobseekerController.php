<?php

namespace App\Http\Controllers;
use App\User;
use App\jobseeker;
use App\diplome;
use Illuminate\Http\Request;

class JobseekerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(jobseeker $jobseeker)
    {
        //
        $jobseeker->firstname = $_POST['firstname_jobseeeker'];
		$jobseeker->lastname = $_POST['lastname_jobseeeker'];
        $jobseeker->home = $_POST['home_jobseeeker'];
		$jobseeker->phone = $_POST['tel_jobseeeker'];
        $jobseeker->email = $_POST['email_jobseeeker'];
        $jobseeker->description = $_POST['description_jobseeeker'];
        $jobseeker->diplome = $_POST['get_diplome'];
        $jobseeker->cv = $_POST['cv_jobseeeker'];
		// $name = $_POST['name'];
		// $lastname = $_POST['lastname'];
		$jobseeker->save();
		$listjobseeker = $jobseeker->all();
		$etat = 'fermer';
		$id_update_jobseeker = '';
        //back index
        return view('welcome',compact('listjobseeker','etat','id_update_jobseeker'));
    }


    public function deleteJobseeker(User $user, jobseeker $jobseeker, diplome $diplome){
        //get id contact 
        $id_jobseeker = $_POST['btn_delete_iduser'];

        //Find user get id
        $jobseeker_delete = jobseeker::find($id_jobseeker);
        //Delete user by id
        $jobseeker_delete->delete();

        $listUsers= $user->all();
        $etat = 'fermer';
        $listjobseeker = $jobseeker->all();
        $listdiplome = $diplome->all();
        return view('home',compact('listUsers', 'listjobseeker', 'listdiplome', 'etat','id_jobseeker'));
    }


    public function formupdateJobseeker(User $user, jobseeker $jobseeker, diplome $diplome){
        //change etat
        $id_jobseeker = $_POST['btn_update_idjobseeker'];
        $jobseeker_update = jobseeker::find($id_jobseeker);
		//echo $jobseeker_delete;
		$listUsers= $user->all();
        $listjobseeker = $jobseeker->all();
        $listdiplome = $diplome->all();
        return view('formUpdateJobseeker',compact('listUsers', 'listjobseeker', 'listdiplome','id_jobseeker'));

    }
	
	public function updateJobseeker(User $user, jobseeker $jobseeker, diplome $diplome){
        //get info jobseeker
        $id_jobseeker = $_POST['btn_update_idjobseeker'];
        $firstname_jobseeeker = $_POST['firstname_jobseeeker'];
        $lastname_jobseeeker = $_POST['lastname_jobseeeker'];
        $email_jobseeeker = $_POST['email_jobseeeker'];
        $tel_jobseeeker = $_POST['tel_jobseeeker'];
        $home_jobseeeker = $_POST['home_jobseeeker'];
        $description_jobseeeker = $_POST['description_jobseeeker'];
        $get_diplome = $_POST['get_diplome'];
        $cv_jobseeeker = $_POST['cv_jobseeeker'];
		


        $jobseeker = jobseeker::find($id_jobseeker);
		//
        $jobseeker->firstname=$firstname_jobseeeker;
		$jobseeker->lastname=$lastname_jobseeeker;
        $jobseeker->email=$email_jobseeeker;
		$jobseeker->phone=$tel_jobseeeker;
        $jobseeker->home=$home_jobseeeker;
		$jobseeker->description=$description_jobseeeker;
        $jobseeker->diplome=$get_diplome;
		$jobseeker->cv=$cv_jobseeeker;
		$jobseeker->save();

		$listUsers= $user->all();
        $etat = 'fermer';
        $listjobseeker = $jobseeker->all();
        $listdiplome = $diplome->all();
        return view('home',compact('listUsers', 'listjobseeker', 'listdiplome', 'etat','id_jobseeker'));


    }










    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\jobseeker  $jobseeker
     * @return \Illuminate\Http\Response
     */
    public function show(jobseeker $jobseeker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\jobseeker  $jobseeker
     * @return \Illuminate\Http\Response
     */
    public function edit(jobseeker $jobseeker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\jobseeker  $jobseeker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, jobseeker $jobseeker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\jobseeker  $jobseeker
     * @return \Illuminate\Http\Response
     */
    public function destroy(jobseeker $jobseeker)
    {
        //
    }
}
