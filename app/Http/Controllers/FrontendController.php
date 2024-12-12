<?php

namespace App\Http\Controllers;
use App\Models\Blogs;
use App\Models\ContactUs;
use App\Models\User;
use App\Models\Careers;
use Mail;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home(Request $request)
    {
        return view('index');
    }

    public function getBlog(Request $request)
    {
        $blogs = Blogs::all();
        return view('frontend.blog',compact('blogs'));
    }

    public function getBlogDetails($blog_slug)
    {
        // Assuming you have a Blog model
        $blogDetails = Blogs::where('blog_slug', $blog_slug)->firstOrFail();
        // dd($blogDetails);
        $recentBlogs = Blogs::where('blog_slug', '!=', $blog_slug)
                            ->orderBy('created_at', 'desc')
                            ->take(3)
                            ->get();
        // dd($recentBlogs);
        return view('frontend.blog-details', compact('blogDetails','recentBlogs'));
    }

    public function getAboutUs(Request $request)
    {
		
        return view('frontend.about-us');
    }

    public function getPortfolio(Request $request)
    {
		
        return view('frontend.portfolio');
    }

    public function getContactUs(Request $request)
    {
		$contactusUrl = 'https://demo.webwideit.solutions/webwide-dashboard/public/contact-us';
        return view('frontend.contact-us',compact('contactusUrl'));
    }

  public function postContactUs(Request $request)
{
    $contact = new ContactUs;
    $this->validate($request, [
        'first_name' => 'required|string|max:255|regex:/^[A-Za-z\s]+$/',
        'last_name' => 'required|string|max:255|regex:/^[A-Za-z\s]+$/',
        'email' => 'required|email|max:255',
        'mobile' => 'required|string|regex:/^\+?[0-9]+$/',
        'message' => 'required|string',
    ]);

    // Set contact details
    $contact->first_name = $request->first_name;
    $contact->last_name = $request->last_name;
    $contact->email = $request->email;
    $contact->mobile = $request->mobile;
    $contact->message = $request->message;
    $contact->save();
	  //dd($contact);

    // Send email notification to user
    Mail::send('email.user-enquiry', ['contact' => $contact], function ($message) use ($contact) {
        $message->from('prachigujar1205@gmail.com', 'WebWide It Solutions');
        $message->to($contact->email);
        $message->subject('Enquiry Received');
    });

    // Send email notification to admin
    $userData = User::first(); // Assuming there's only one admin, adjust as needed
    $adminEmail = $userData->email;
    Mail::send('email.admin-enquiry', ['contact' => $contact], function ($message) use ($userData, $adminEmail) {
        $message->from('prachigujar1205@gmail.com', 'WebWide It Solutions');
        $message->replyTo($userData->email);
        $message->subject("Webwideit Solutions | New enquiry from {$userData->name}");
        $message->to($adminEmail);
    });

    $alert = [
        'message' => 'Details added successfully',
        'alert-type' => 'success'
    ];
    return redirect('/thank-you');
    // return redirect()->back()->with($alert);
}


    public function getUiUxDesign(Request $request)
    {
        return view('frontend.services.ui-ux-design');
    }

    public function getWebsiteDesign(Request $request)
    {
        return view('frontend.services.website-design');
    }

    public function getGraphicDesign(Request $request)
    {
		
        return view('frontend.services.graphic-design');
    }

    public function getWordPressDesign(Request $request)
    {
        return view('frontend.services.wordpress-design');
    }

    public function getWebsiteRewamp(Request $request)
    {
        return view('frontend.services.website-rewamp');
    }

    public function getWebDevelopment(Request $request)
    {
        return view('frontend.services.web-development');
    }

    public function getAppDevelopment(Request $request)
    {
        return view('frontend.services.app-development');
    }

    public function getEComDevelopment(Request $request)
    {
        return view('frontend.services.e-com-development');
    }

    public function getHostingMaintenance(Request $request)
    {
        return view('frontend.services.hosting-maintenance');
    }

    public function getQualityAssurance(Request $request)
    {
        return view('frontend.services.quality-assurance');
    }

    public function getPPC(Request $request)
    {
        return view('frontend.services.ppc');
    }

    public function getSocialMediaMarketing(Request $request)
    {
        return view('frontend.services.social-media-marketing');
    }

    public function getSEO(Request $request)
    {
        return view('frontend.services.seo');
    }
	
	  public function getDesign(Request $request)
    {
        return view('frontend.services.design');
    }

    public function getDevelopment(Request $request)
    {
        return view('frontend.services.development');
    }

    public function getMarketing(Request $request)
    {
        return view('frontend.services.marketing');
    } 
    
    public function getCareers(Request $request)
    {
        return view('frontend.services.careers');
    } 
	
	 
	public function postCareers(Request $request)
{
    // Validate the incoming request data
    $request->validate([
        'name' => 'required|string|max:255|regex:/^[A-Za-z\s]+$/',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|regex:/^\+?[0-9]+$/',
        'position' => 'required|string',
        'resume' => 'required|file|mimes:pdf,doc,docx', // Accepts PDF, Word, or Word Document files
    ]);

    // Create a new instance of the Careers model
    $careers = new Careers;

    // Set career details from the validated request data
    $careers->name = $request->name;
    $careers->email = $request->email;
    $careers->phone = $request->phone;
    $careers->position = $request->position;

    // Handle file upload for the resume
    if ($request->hasFile('resume')) {
        $filename = $request->resume->getClientOriginalName();
        $request->resume->move(public_path() . '/backend/resume-pdf/', $filename);
        $careers->resume = $filename;
    }

    // Save the career details to the database
    $careers->save();

    // Debugging: check if the model is populated correctly
     //dd($careers);

    // Prepare a success message for redirect
    $alert = [
        'message' => 'Details added successfully',
        'alert-type' => 'success'
    ];

    // Redirect back with the success message
    return redirect()->back()->with($alert);
}

public function thanyou(){
    return view('thank-you');
}

}
