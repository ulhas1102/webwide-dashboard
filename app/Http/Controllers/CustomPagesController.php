<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;
use App\Models\Careers;

class CustomPagesController extends Controller
{
   

    public function getContactList(Request $request)
    {
        $contacts = ContactUs::orderBy('id', 'desc')->get();

        //dd($blogs);
        return view('custom-pages/contact-list', compact('contacts'));
    }
	
	 public function DeleteContact(Request $request)
    {
        $dataId = $request->dataId;

        $contact = ContactUs::find($dataId);
        $contact->delete();

        $alert = array(
                  'message' => 'Contact deleted successfully',
                  'alert-type' => 'error'
                  
                  ); 

        return redirect('contact-list')->with($alert);;
    }
	
	   public function getCareerList(Request $request)
    {
        $careers = Careers::orderBy('id', 'desc')->get();

        //dd($blogs);
        return view('custom-pages/career-list', compact('careers'));
    }
	
	 public function DeleteCareer(Request $request)
    {
        $dataId = $request->dataId;

        $contact = Careers::find($dataId);
        $contact->delete();

        $alert = array(
                  'message' => 'Career deleted successfully',
                  'alert-type' => 'error'
                  
                  ); 

        return redirect('career-list')->with($alert);;
    }

  
}
