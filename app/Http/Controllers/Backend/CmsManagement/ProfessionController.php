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
            'title'=>'required|max:100|min:5|unique:professions,title',
            'description' => 'required|min:10',
            'status' => 'required'
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
    public function edit($id)
    {
        //
        $editProfession = Profession::find($id);
        return view('backend.profession.edit', compact('editProfession'));
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
        $request->validate([
            'title'=>'required|max:100|min:5|unique:professions,title',
            'description' => 'required|min:10',
            'status' => 'required'
        ]);

        $professionData = Profession::find($id);

        $professionData->title = $request->title;
        $professionData->description = $request->description;
        $professionData->status = $request->status;
        if($professionData->save()){
            Session::flash('successMessage','Profession Data has been successfully updated');
            return redirect('admin/profession');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $removeProfession = Profession::findorFail($id);
        //dd($removeProfession);

        if($removeProfession->delete()){
            Session::flash('successMessage','Profession has been successfully deleted');
            return redirect('admin/profession');
        }


    }
}
