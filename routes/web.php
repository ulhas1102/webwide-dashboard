<?php

use Illuminate\Support\Facades\Route;
use App\Models\Blogs;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

$blogs = Blogs::orderBy('created_at', 'desc')
                ->take(3)
                ->get();

Route::view('/', 'index', [
    'blogs' => $blogs
]);

Auth::routes();

//Home Page Routes

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

//Frontend Pages Routes
Route::get('/blog',[App\Http\Controllers\FrontendController::class, 'getBlog'])->name('blog');
Route::get('/blog/{blog_slug}',[App\Http\Controllers\FrontendController::class, 'getBlogDetails']);
Route::get('/about-us', [App\Http\Controllers\FrontendController::class, 'getAboutUs']);
Route::get('/portfolio', [App\Http\Controllers\FrontendController::class, 'getPortfolio']);
Route::get('/contact-us', [App\Http\Controllers\FrontendController::class, 'getContactUs']);
Route::post('/contact-us', [App\Http\Controllers\FrontendController::class, 'postContactUs'])->name('store.contact');
Route::get('/thank-you', [App\Http\Controllers\FrontendController::class, 'thanyou']);

//Frontend Services Routes
Route::get('/services/design/ui-ux-design',[App\Http\Controllers\FrontendController::class, 'getUiUxDesign']);
Route::get('/services/design/website-design',[App\Http\Controllers\FrontendController::class, 'getWebsiteDesign']);
Route::get('/services/design/graphic-design',[App\Http\Controllers\FrontendController::class, 'getGraphicDesign']);
Route::get('/services/design/wordpress-design',[App\Http\Controllers\FrontendController::class, 'getWordPressDesign']);
Route::get('/services/design/website-rewamp', [App\Http\Controllers\FrontendController::class, 'getWebsiteRewamp']);
Route::get('/services/development/web-development', [App\Http\Controllers\FrontendController::class, 'getWebDevelopment']);
Route::get('/services/development/app-development', [App\Http\Controllers\FrontendController::class, 'getAppDevelopment']);
Route::get('/services/development/e-com-development', [App\Http\Controllers\FrontendController::class, 'getEComDevelopment']);
Route::get('/services/development/hosting-maintenance', [App\Http\Controllers\FrontendController::class, 'getHostingMaintenance']);
Route::get('/services/development/quality-assurance', [App\Http\Controllers\FrontendController::class, 'getQualityAssurance']);
Route::get('/services/marketing/ppc', [App\Http\Controllers\FrontendController::class, 'getPPC']);
Route::get('/services/marketing/social-media-marketing', [App\Http\Controllers\FrontendController::class, 'getSocialMediaMarketing']);
Route::get('/services/marketing/seo', [App\Http\Controllers\FrontendController::class, 'getSEO']);
Route::get('/services/design', [App\Http\Controllers\FrontendController::class, 'getDesign']);
Route::get('/services/development', [App\Http\Controllers\FrontendController::class, 'getDevelopment']);
Route::get('/services/marketing', [App\Http\Controllers\FrontendController::class, 'getMarketing']);
Route::get('/services/careers', [App\Http\Controllers\FrontendController::class, 'getCareers']);
Route::post('/services/careers',  [App\Http\Controllers\FrontendController::class, 'postCareers'])->name('process-careers');

//Blog Routes
Route::get('blog-list', [App\Http\Controllers\BlogController::class, 'blogList'])->name('blog-list');
Route::get('add-blog', [App\Http\Controllers\BlogController::class, 'addBlog'])->name('add-blog');
Route::post('postblog', [App\Http\Controllers\BlogController::class, 'postBlog']);
Route::post('upload', [App\Http\Controllers\BlogController::class, 'upload'])->name('ckeditor.upload');

//edit blog
Route::get('edit-blog', [App\Http\Controllers\BlogController::class, 'EditBlog'])->name('edit-blog');
Route::post('posteditblog', [App\Http\Controllers\BlogController::class, 'PostEditBlog']);
Route::post('blog-delete', [App\Http\Controllers\BlogController::class, 'DeleteBlog'])->name('blog-delete');


// Department Routes
Route::get('department-list', [App\Http\Controllers\DepartmentController::class, 'departmentList'])->name('department-list');
Route::get('add-department', [App\Http\Controllers\DepartmentController::class, 'addDepartment'])->name('add-department');
Route::post('postdepartment', [App\Http\Controllers\DepartmentController::class, 'postDepartment']);
//edit blog
Route::get('edit-department', [App\Http\Controllers\DepartmentController::class, 'EditDepartment'])->name('edit-department');
Route::post('posteditdepartment', [App\Http\Controllers\DepartmentController::class, 'PostEditDepartment']);
Route::post('department-delete', [App\Http\Controllers\DepartmentController::class, 'DeleteDepartment'])->name('department-delete');


//Team 
Route::get('team-list', [App\Http\Controllers\TeamController::class, 'teamList'])->name('team-list');
Route::get('add-team', [App\Http\Controllers\TeamController::class, 'addTeam'])->name('add-team');
Route::post('postteam', [App\Http\Controllers\TeamController::class, 'postTeam']);
//edit Team
Route::get('edit-team', [App\Http\Controllers\TeamController::class, 'EditTeam'])->name('edit-team');
Route::post('posteditteam', [App\Http\Controllers\TeamController::class, 'PostEditTeam']);
Route::post('team-member-delete', [App\Http\Controllers\TeamController::class, 'DeleteTeam'])->name('team-member-delete');


//Testimonial 
Route::get('testimonial-list', [App\Http\Controllers\TestimonialController::class, 'testimonialList'])->name('testimonial-list');
Route::get('add-testimonial', [App\Http\Controllers\TestimonialController::class, 'addTestimonial'])->name('add-testimonial');
Route::post('posttestimonial', [App\Http\Controllers\TestimonialController::class, 'postTestimonial']);

//edit Testimonial
Route::get('edit-testimonial', [App\Http\Controllers\TestimonialController::class, 'EditTestimonial'])->name('edit-testimonial');
Route::post('postedittestimonial', [App\Http\Controllers\TestimonialController::class, 'PostEditTestimonial']);
Route::post('testimonial-delete', [App\Http\Controllers\TestimonialController::class, 'DeleteTestimonial'])->name('testimonial-delete');


//SEO Title Description Mangement

//Home page SEO Mangement

Route::get('home-page-seo', [App\Http\Controllers\SeoController::class, 'HomePageSeo'])->name('home-seo');
Route::get('add-home-page-seo', [App\Http\Controllers\SeoController::class, 'AddHomePageSeo'])->name('add-home-page-title-description');
Route::post('postHomepageSeo', [App\Http\Controllers\SeoController::class, 'postHomepageSeo']);

//Edit Home Page Seo

Route::get('edit-home-page-seo', [App\Http\Controllers\SeoController::class, 'EditHomePageSeo'])->name('edit-home-page-seo');
Route::post('postedithomepageseo', [App\Http\Controllers\SeoController::class, 'postedithomepageseo']);
Route::post('home-page-seo-delete', [App\Http\Controllers\SeoController::class, 'DeleteHomePageSeo'])->name('home-page-seo-delete');

//About Us page SEO Mangement

Route::get('about-us-page-seo', [App\Http\Controllers\SeoController::class, 'AboutUsPageSeo'])->name('about-us-seo');
Route::get('add-about-us-page-seo', [App\Http\Controllers\SeoController::class, 'AddAboutUsPageSeo'])->name('add-about-us-page-title-description');
Route::post('postAboutUspageSeo', [App\Http\Controllers\SeoController::class, 'postAboutUspageSeo']);

//Edit About Us Page Seo

Route::get('edit-about-us-page-seo', [App\Http\Controllers\SeoController::class, 'EditAboutUsPageSeo'])->name('edit-about-us-page-seo');
Route::post('posteditaboutuspageseo', [App\Http\Controllers\SeoController::class, 'posteditaboutuspageseo']);
Route::post('about-us-page-seo-delete', [App\Http\Controllers\SeoController::class, 'DeleteAboutUsPageSeo'])->name('about-us-page-seo-delete');

// Contact Us PAge SEO

Route::get('contact-us-page-seo', [App\Http\Controllers\SeoController::class, 'ContactUsPageSeo'])->name('contact-us-seo');
Route::get('add-contact-us-page-seo', [App\Http\Controllers\SeoController::class, 'AddContactUsPageSeo'])->name('add-contact-us-page-title-description');
Route::post('postContactUspageSeo', [App\Http\Controllers\SeoController::class, 'postContactUspageSeo']);


//Edit Contact Us Page Seo

Route::get('edit-contact-us-page-seo', [App\Http\Controllers\SeoController::class, 'EditContactUsPageSeo'])->name('edit-contact-us-page-seo');
Route::post('posteditcontactuspageseo', [App\Http\Controllers\SeoController::class, 'posteditcontactuspageseo']);
Route::post('contact-us-page-seo-delete', [App\Http\Controllers\SeoController::class, 'DeleteContactUsPageSeo'])->name('contact-us-page-seo-delete');

// Privacy Policy PAge SEO

Route::get('privacy-policy-page-seo', [App\Http\Controllers\SeoController::class, 'PrivacyPolicyPageSeo'])->name('privacy-policy-seo');
Route::get('add-privacy-policy-page-seo', [App\Http\Controllers\SeoController::class, 'AddPrivacyPolicyPageSeo'])->name('add-privacy-policy-page-title-description');
Route::post('postPrivacyPolicypageSeo', [App\Http\Controllers\SeoController::class, 'postPrivacyPolicypageSeo']);

//Edit Privacy Policy Page Seo

Route::get('edit-privacy-policy-page-seo', [App\Http\Controllers\SeoController::class, 'EditPrivacyPolicyPageSeo'])->name('edit-privacy-policy-page-seo');
Route::post('posteditprivacypolicypageseo', [App\Http\Controllers\SeoController::class, 'posteditprivacypolicypageseo']);
Route::post('privacy-policy-page-seo-delete', [App\Http\Controllers\SeoController::class, 'DeletePrivacyPolicyPageSeo'])->name('privacy-policy-page-seo-delete');

// Terms And Conditions Page SEO terms-condition TermsCondition

Route::get('terms-condition-page-seo', [App\Http\Controllers\SeoController::class, 'TermsConditionPageSeo'])->name('terms-condition-seo');
Route::get('add-terms-condition-page-seo', [App\Http\Controllers\SeoController::class, 'AddTermsConditionPageSeo'])->name('add-terms-condition-page-title-description');
Route::post('postTermsConditionpageSeo', [App\Http\Controllers\SeoController::class, 'postTermsConditionpageSeo']);


// Edit Terms And Condition 
Route::get('edit-terms-condition-page-seo', [App\Http\Controllers\SeoController::class, 'EditTermsConditionPageSeo'])->name('edit-terms-condition-page-seo');
Route::post('posteditTermsConditionpageseo', [App\Http\Controllers\SeoController::class, 'posteditTermsConditionpageseo']);
Route::post('terms-condition-page-seo-delete', [App\Http\Controllers\SeoController::class, 'DeleteTermsConditionPageSeo'])->name('terms-condition-page-seo-delete');


//Blog List Page SEO

Route::get('blog-page-seo', [App\Http\Controllers\SeoController::class, 'BlogPageSeo'])->name('blog-seo');
Route::get('add-blog-page-seo', [App\Http\Controllers\SeoController::class, 'AddBlogPageSeo'])->name('add-blog-page-title-description');
Route::post('postBlogpageSeo', [App\Http\Controllers\SeoController::class, 'postBlogpageSeo']);


// Edit Blog List PAge SEO
Route::get('edit-blog-page-seo', [App\Http\Controllers\SeoController::class, 'EditBlogPageSeo'])->name('edit-blog-page-seo');
Route::post('posteditBlogpageseo', [App\Http\Controllers\SeoController::class, 'posteditBlogpageseo']);
Route::post('blog-page-seo-delete', [App\Http\Controllers\SeoController::class, 'DeleteBlogPageSeo'])->name('blog-page-seo-delete');

//Custom Pages Routes
Route::get('/contact-list',[App\Http\Controllers\CustomPagesController::class, 'getContactList']);
Route::post('contact-delete', [App\Http\Controllers\CustomPagesController::class, 'DeleteContact'])->name('contact-delete');

Route::get('/career-list',[App\Http\Controllers\CustomPagesController::class, 'getCareerList']);
Route::post('career-delete', [App\Http\Controllers\CustomPagesController::class, 'DeleteCareer'])->name('career-delete');

