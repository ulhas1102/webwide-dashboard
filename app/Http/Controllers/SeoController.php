<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seo;

class SeoController extends Controller
{
    //Home Page SEO

    public function HomePageSeo(Request $request)
    {
        $seos = Seo::where('page_id', 1)->get();
        return view('seo-management/home/home-seo', compact('seos'));
    }

     public function AddHomePageSeo(Request $request)
    {
        return view('seo-management/home/add-home-page-title-description');
    }

    public function postHomepageSeo(Request $request)
        {

            $this->validate($request, [
                'title' => 'required',
                'description' => 'required',
               // 'author'=> 'required',
               // 'robot_meta_tag'=> 'required',
               // 'canonical_url'=> 'required',
            ]);

            $seo = new Seo;

            $seo->title = $request->input('title');
            $seo->description = $request->input('description');
            $seo->author = $request->input('author');
            $seo->robot_meta_tag = $request->input('robot_meta_tag');
            $seo->canonical_url = $request->input('canonical_url');
            $seo->page_id = $request->input('page_id');
            $seo->save();

            $alert = [
                'message' => 'SEO Details Added successfully',
                'alert-type' => 'success'
            ];

            return redirect()->route('home-seo')->with($alert);

        }

         public function DeleteHomePageSeo(Request $request)
            {
                $dataId = $request->dataId;

                $blog = Seo::find($dataId);
                $blog->delete();

                $alert = array(
                          'message' => 'Home Page SEO details deleted successfully',
                          'alert-type' => 'success'
                          
                          ); 

                return redirect()->route('home-seo')->with($alert);;
            }

        public function EditHomePageSeo(Request $request)
        {
            $dataId = $_GET['id'];
            $seo = Seo::find($dataId);
            return view('seo-management.home.edit', compact('seo'));
        }

        public function postedithomepageseo(Request $request)
        {
            //dd($request);

            $this->validate($request, [
                'title' => 'required',
                'description' => 'required',
            ]);
            $dataId = $request->dataId;

            $seo = Seo::find($dataId);

            $seo->title = $request->input('title');
            $seo->description = $request->input('description');
             $seo->author = $request->input('author');
            $seo->robot_meta_tag = $request->input('robot_meta_tag');
            $seo->canonical_url = $request->input('canonical_url');
            $seo->page_id = $request->input('page_id');
            $seo->save();

            $alert = [
                'message' => 'SEO Details Edited successfully',
                'alert-type' => 'success'
            ];

            return redirect()->route('home-seo')->with($alert);


        }


        // About us Page SEO

         public function AboutUsPageSeo(Request $request)
            {
                $seos = Seo::where('page_id', 2)->get();
                return view('seo-management/about-us/about-us-seo', compact('seos'));
            }

         public function AddAboutUsPageSeo(Request $request)
            {
                return view('seo-management/about-us/add-about-us-page-title-description');
            }


         public function postAboutUspageSeo(Request $request)
            {

                $this->validate($request, [
                    'title' => 'required',
                    'description' => 'required',
                ]);

                $seo = new Seo;

                $seo->title = $request->input('title');
                $seo->description = $request->input('description');
                $seo->author = $request->input('author');
                $seo->robot_meta_tag = $request->input('robot_meta_tag');
                $seo->canonical_url = $request->input('canonical_url');
                $seo->page_id = $request->input('page_id');
                $seo->save();

                $alert = [
                    'message' => 'SEO Details Added successfully',
                    'alert-type' => 'success'
                ];

                return redirect()->route('about-us-seo')->with($alert);

            }

            public function DeleteAboutUsPageSeo(Request $request)
            {
                $dataId = $request->dataId;

                $blog = Seo::find($dataId);
                $blog->delete();

                $alert = array(
                          'message' => 'About Us Page SEO details deleted successfully',
                          'alert-type' => 'success'
                          
                          ); 

                return redirect()->route('about-us-seo')->with($alert);;
            }

            public function EditAboutUsPageSeo(Request $request)
                {
                    $dataId = $_GET['id'];
                    $seo = Seo::find($dataId);
                  //  return view('seo-management/about-us/edit', compact('seo'));
                    return view('seo-management.about-us.edit', compact('seo'));
                }

            public function posteditaboutuspageseo(Request $request)
            {

                $this->validate($request, [
                    'title' => 'required',
                    'description' => 'required',
                ]);
                $dataId = $request->dataId;

                $seo = Seo::find($dataId);

                $seo->title = $request->input('title');
                $seo->description = $request->input('description');
                $seo->author = $request->input('author');
                $seo->robot_meta_tag = $request->input('robot_meta_tag');
                $seo->canonical_url = $request->input('canonical_url');
                $seo->page_id = $request->input('page_id');
                $seo->save();

                $alert = [
                    'message' => 'SEO Details Edited successfully',
                    'alert-type' => 'success'
                ];

                return redirect()->route('about-us-seo')->with($alert);
            }

    // Contact Us Page SEo
            public function ContactUsPageSeo(Request $request)
            {
                $seos = Seo::where('page_id', 3)->get();
                return view('seo-management/contact-us/contact-us-seo', compact('seos'));
            }

            public function AddContactUsPageSeo(Request $request)
            {
                return view('seo-management/contact-us/add-contact-us-page-title-description');
            }

            public function postContactUspageSeo(Request $request)
            {

                $this->validate($request, [
                    'title' => 'required',
                    'description' => 'required',
                ]);

                $seo = new Seo;

                $seo->title = $request->input('title');
                $seo->description = $request->input('description');
                $seo->author = $request->input('author');
                $seo->robot_meta_tag = $request->input('robot_meta_tag');
                $seo->canonical_url = $request->input('canonical_url');
                $seo->page_id = $request->input('page_id');
                $seo->save();

                $alert = [
                    'message' => 'SEO Details Added successfully',
                    'alert-type' => 'success'
                ];

                return redirect()->route('contact-us-seo')->with($alert);

            }

            public function DeleteContactUsPageSeo(Request $request)
            {
                $dataId = $request->dataId;

                $blog = Seo::find($dataId);
                $blog->delete();

                $alert = array(
                          'message' => 'Contact Us Page SEO details deleted successfully',
                          'alert-type' => 'success'
                          
                          ); 

                return redirect()->route('contact-us-seo')->with($alert);;
            }

            public function EditContactUsPageSeo(Request $request)
                {
                    $dataId = $_GET['id'];
                    $seo = Seo::find($dataId);
                    return view('seo-management/contact-us/edit', compact('seo'));
                }

            public function posteditcontactuspageseo(Request $request)
            {

                $this->validate($request, [
                    'title' => 'required',
                    'description' => 'required',
                ]);
                $dataId = $request->dataId;

                $seo = Seo::find($dataId);

                $seo->title = $request->input('title');
                $seo->description = $request->input('description');
                $seo->author = $request->input('author');
                $seo->robot_meta_tag = $request->input('robot_meta_tag');
                $seo->canonical_url = $request->input('canonical_url');
                $seo->page_id = $request->input('page_id');
                $seo->save();

                $alert = [
                    'message' => 'SEO Details Edited successfully',
                    'alert-type' => 'success'
                ];

                return redirect()->route('contact-us-seo')->with($alert);
            }


    // Privacy Policy SEO

         public function PrivacyPolicyPageSeo(Request $request)
            {
                $seos = Seo::where('page_id', 4)->get();
                return view('seo-management/privacy-policy/privacy-policy-seo', compact('seos'));
            }

         public function AddPrivacyPolicyPageSeo(Request $request)
            {
                return view('seo-management/privacy-policy/add-privacy-policy-page-title-description');
            }


         public function postPrivacyPolicypageSeo(Request $request)
            {

                $this->validate($request, [
                    'title' => 'required',
                    'description' => 'required',
                ]);

                $seo = new Seo;

                $seo->title = $request->input('title');
                $seo->description = $request->input('description');
                $seo->author = $request->input('author');
                $seo->robot_meta_tag = $request->input('robot_meta_tag');
                $seo->canonical_url = $request->input('canonical_url');
                $seo->page_id = $request->input('page_id');
                $seo->save();

                $alert = [
                    'message' => 'SEO Details Added successfully',
                    'alert-type' => 'success'
                ];

                return redirect()->route('privacy-policy-seo')->with($alert);

            }

            public function DeletePrivacyPolicyPageSeo(Request $request)
            {
                $dataId = $request->dataId;

                $blog = Seo::find($dataId);
                $blog->delete();

                $alert = array(
                          'message' => 'Privacy Policy Page SEO details deleted successfully',
                          'alert-type' => 'success'
                          
                          ); 

                return redirect()->route('privacy-policy-seo')->with($alert);;
            }

             public function EditPrivacyPolicyPageSeo(Request $request)
                {
                    $dataId = $_GET['id'];
                    $seo = Seo::find($dataId);
                    return view('seo-management/privacy-policy/edit', compact('seo'));
                }

            public function posteditprivacypolicypageseo(Request $request)
            {

                $this->validate($request, [
                    'title' => 'required',
                    'description' => 'required',
                ]);
                $dataId = $request->dataId;

                $seo = Seo::find($dataId);

                $seo->title = $request->input('title');
                $seo->description = $request->input('description');
                $seo->author = $request->input('author');
                $seo->robot_meta_tag = $request->input('robot_meta_tag');
                $seo->canonical_url = $request->input('canonical_url');
                $seo->page_id = $request->input('page_id');
                $seo->save();

                $alert = [
                    'message' => 'SEO Details Edited successfully',
                    'alert-type' => 'success'
                ];

                return redirect()->route('privacy-policy-seo')->with($alert);
            }


    // Terms and Condition SEO

         public function TermsConditionPageSeo(Request $request)
            {
                $seos = Seo::where('page_id', 5)->get();
                return view('seo-management/terms-condition/terms-condition-seo', compact('seos'));
            }

         public function AddTermsConditionPageSeo(Request $request)
            {
                return view('seo-management/terms-condition/add-terms-condition-page-title-description');
            }


         public function postTermsConditionpageSeo(Request $request)
            {

                $this->validate($request, [
                    'title' => 'required',
                    'description' => 'required',
                ]);

                $seo = new Seo;

                $seo->title = $request->input('title');
                $seo->description = $request->input('description');
                $seo->author = $request->input('author');
                $seo->robot_meta_tag = $request->input('robot_meta_tag');
                $seo->canonical_url = $request->input('canonical_url');
                $seo->page_id = $request->input('page_id');
                $seo->save();

                $alert = [
                    'message' => 'SEO Details Added successfully',
                    'alert-type' => 'success'
                ];

                return redirect()->route('terms-condition-seo')->with($alert);

            }

            public function DeleteTermsConditionPageSeo(Request $request)
            {
                $dataId = $request->dataId;

                $blog = Seo::find($dataId);
                $blog->delete();

                $alert = array(
                          'message' => 'Terms Condition Page SEO details deleted successfully',
                          'alert-type' => 'success'
                          
                          ); 

                return redirect()->route('terms-condition-seo')->with($alert);;
            }

            public function EditTermsConditionPageSeo(Request $request)
                {
                    $dataId = $_GET['id'];
                    $seo = Seo::find($dataId);
                    return view('seo-management/terms-condition/edit', compact('seo'));
                }

            public function posteditTermsConditionpageseo(Request $request)
            {

                $this->validate($request, [
                    'title' => 'required',
                    'description' => 'required',
                ]);
                $dataId = $request->dataId;

                $seo = Seo::find($dataId);

                $seo->title = $request->input('title');
                $seo->description = $request->input('description');
                $seo->author = $request->input('author');
                $seo->robot_meta_tag = $request->input('robot_meta_tag');
                $seo->canonical_url = $request->input('canonical_url');
                $seo->page_id = $request->input('page_id');
                $seo->save();

                $alert = [
                    'message' => 'SEO Details Edited successfully',
                    'alert-type' => 'success'
                ];

                return redirect()->route('terms-condition-seo')->with($alert);
            }


    // Blog List Page SEO

        public function BlogPageSeo(Request $request)
            {
                $seos = Seo::where('page_id', 6)->get();
                return view('seo-management/blogs/blog-seo', compact('seos'));
            }

         public function AddBlogPageSeo(Request $request)
            {
                return view('seo-management/blogs/add-blog-page-title-description');
            }


         public function postBlogpageSeo(Request $request)
            {

                $this->validate($request, [
                    'title' => 'required',
                    'description' => 'required',
                ]);

                $seo = new Seo;

                $seo->title = $request->input('title');
                $seo->description = $request->input('description');
                $seo->author = $request->input('author');
                $seo->robot_meta_tag = $request->input('robot_meta_tag');
                $seo->canonical_url = $request->input('canonical_url');
                $seo->page_id = $request->input('page_id');
                $seo->save();

                $alert = [
                    'message' => 'SEO Details Added successfully',
                    'alert-type' => 'success'
                ];

                return redirect()->route('blog-seo')->with($alert);

            }

            public function DeleteBlogPageSeo(Request $request)
            {
                $dataId = $request->dataId;

                $blog = Seo::find($dataId);
                $blog->delete();

                $alert = array(
                          'message' => 'Blog List Page SEO details deleted successfully',
                          'alert-type' => 'success'
                          
                          ); 

                return redirect()->route('blog-seo')->with($alert);;
            }

            public function EditBlogPageSeo(Request $request)
                {
                    $dataId = $_GET['id'];
                    $seo = Seo::find($dataId);
                    return view('seo-management/blogs/edit', compact('seo'));
                }

            public function posteditBlogpageseo(Request $request)
            {

                $this->validate($request, [
                    'title' => 'required',
                    'description' => 'required',
                ]);
                $dataId = $request->dataId;

                $seo = Seo::find($dataId);

                $seo->title = $request->input('title');
                $seo->description = $request->input('description');
                $seo->author = $request->input('author');
                $seo->robot_meta_tag = $request->input('robot_meta_tag');
                $seo->canonical_url = $request->input('canonical_url');
                $seo->page_id = $request->input('page_id');
                $seo->save();

                $alert = [
                    'message' => 'SEO Details Edited successfully',
                    'alert-type' => 'success'
                ];

                return redirect()->route('blog-seo')->with($alert);
            }
}
