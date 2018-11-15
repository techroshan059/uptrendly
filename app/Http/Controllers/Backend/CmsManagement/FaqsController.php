<?php

namespace App\Http\Controllers\Backend\CmsManagement;

use App\Faqs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class FaqsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $faqsData = Faqs::all();
        return view('backend.faqs.index',compact('faqsData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.faqs.addnew');
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

        $request->validate([
            'question'=>'required|min:10|unique:faqs,question',
            'answer'=>'required|min:10|unique:faqs,answer',
            'type' => 'required',
            'sort_order' => 'required',
            'status' => 'required'
        ]);

        $faqsData = new Faqs;
        $faqsData->question = $request->question;
        $faqsData->answer = $request->answer;
        $faqsData->type = $request->type;
        $faqsData->sort_order = $request->sort_order;
        $faqsData->status = $request->status;

        if($faqsData->save()){
            Session::flash('successMessage','New Faqs has been successfully added');
            return redirect('admin/faqs');
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
        $editFaqs = Faqs::find($id);
        return view('backend.faqs.edit', compact('editFaqs'));

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
            'question'=>'required|min:10|unique:faqs,question',
            'answer'=>'required|min:10|unique:faqs,answer',
            'type' => 'required',
            'sort_order' => 'required',
            'status' => 'required'
        ]);

        $faqsData = Faqs::find($id);

        $faqsData->question = $request->question;
        $faqsData->answer = $request->answer;
        $faqsData->type = $request->type;
        $faqsData->sort_order = $request->sort_order;
        $faqsData->status = $request->status;
        if($faqsData->save()){
            Session::flash('successMessage','Faqs Data has been successfully updated');
            return redirect('admin/faqs');
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
        //
        $removeFaqs = Faqs::findorFail($id);


        if($removeFaqs->delete()){
            Session::flash('successMessage','Faqs has been successfully deleted');
            return redirect('admin/faqs');
        }
    }
}
