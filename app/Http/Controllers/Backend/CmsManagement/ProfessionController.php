<?php

namespace App\Http\Controllers\Backend\CmsManagement;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profession;
use Illuminate\Support\Facades\Session;

class ProfessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $professionData = Profession::all();
        //dd($professionData);
        return view('backend.profession.index',compact('professionData'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        //
        return view('backend.profession.addnew');
    }

    public function store(Request $request)
    {
        //
        //dd($request);
        $request->validate([
            'title'=>'required|max:100|min:5|unique:professions,title'
        ]);

        $professionData = new Profession;
        $professionData->title = $request->title;
        $professionData->description = $request->description;
        $professionData->status = $request->status;
        if($professionData->save()){
            Session::flash('successMessage','New Profession has been successfully added');
            return redirect('admin/profession');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
        return view('backend.profession.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
