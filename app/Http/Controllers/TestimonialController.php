<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    //

    public function testimonialList(Request $request)
    {
        $testimonials = Testimonial::orderBy('testimonial_id', 'desc')->get();

        return view('testimonial/testimonial-list',compact('testimonials'));
    }

    public function addTestimonial(Request $request)
    {


        return view('testimonial/add-testimonial');
    }

    public function postTestimonial(Request $request)
    {

        $this -> validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'organization' => 'required',
            'testimonial' => 'required',
            'rating' => 'required',
        ]);

        $testimonial =  new Testimonial;

        $testimonial->first_name = $request->input('first_name');
        $testimonial->last_name = $request->input('last_name');
        $testimonial->email = $request->input('email');
        $testimonial->organization = $request->input('organization');
        $testimonial->testimonial = $request->input('testimonial');
        $testimonial->rating = $request->input('rating');

        $testimonial->save();

         $alert = array(
                  'message' => 'Testimonial Added successfully',
                  'alert-type' => 'success'
                  
                  ); 

        return redirect('testimonial-list')->with($alert);

    }

    public function EditTestimonial(Request $request)
    {

        $dataId = $_GET['id'];
        $testimonial =  Testimonial::find($dataId);
        return view('testimonial/edit',compact('testimonial'));
    }

    public function PostEditTestimonial(Request $request)
    {

        $this -> validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'organization' => 'required',
            'testimonial' => 'required',
            'rating' => 'required',
        ]);

        $dataId = $request->dataId;

        $testimonial = Testimonial::find($dataId);

        $testimonial->first_name = $request->input('first_name');
        $testimonial->last_name = $request->input('last_name');
        $testimonial->email = $request->input('email');
        $testimonial->organization = $request->input('organization');
        $testimonial->testimonial = $request->input('testimonial');
        $testimonial->rating = $request->input('rating');

        $testimonial->save();

         $alert = array(
                  'message' => 'Testimonial Edited successfully',
                  'alert-type' => 'success'
                  
                  ); 

        return redirect('testimonial-list')->with($alert);

    }
    public function DeleteTestimonial(Request $request)
    {
        $dataId = $request->dataId;

        $blog = Testimonial::find($dataId);
        $blog->delete();

        $alert = array(
                  'message' => 'Testimonial deleted successfully',
                  'alert-type' => 'error'
                  
                  ); 

        return redirect('testimonial-list')->with($alert);
    }
}
