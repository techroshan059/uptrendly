<?php

namespace App\Http\Controllers\Backend\CmsManagement;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Testimonial;
use Illuminate\Support\Facades\Session;

class TestimonialsController extends Controller
{
    //
    public function index()
    {
        //
        $testimonialData = Testimonial::all();
        //dd($testimonialData);
        return view('backend.testimonials.index',compact('testimonialData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.testimonials.addnew');
    }

    public function store(Request $request) {
        $request->validate([
            'fullname'=>'required|max:80|min:5',
            'description' => 'required|min:10',
            'status' => 'required',
        ]);


        $testimonialData = new Testimonial;
        $testimonialData->fullname = $request->fullname;
        $testimonialData->description = $request->description;
        $testimonialData->status = $request->status;
        $testimonialData->photo_path = $request-> photo_path;
        $testimonialData->sort_order = $request -> sort_order;
       // dd($testimonialData);
        if($testimonialData->save()){
            //dd('asdasd');
            Session::flash('successMessage','New Testimonial has been successfully added');
            return redirect('admin/testimonials');
        }

    }

    public function edit()
    {
        //
        return view('backend.testimonials.edit');
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
        $testimonialsData = Testimonial::find($id);

        $testimonialsData->
    }

    public function destroy($id)
    {
        $removeTestimonial = Testimonial::findorFail($id);
        //dd($removeProfession);

        if($removeTestimonial->delete()){
            Session::flash('successMessage','Profession has been successfully deleted');
            return redirect('admin/testimonials');
        }


    }


}
