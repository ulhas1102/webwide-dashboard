<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;

class BlogController extends Controller
{
    //
    public function addBlog(Request $request)
    {

        return view('blog/add-blog');
    }

    public function blogList(Request $request)
    {
        $blogs = Blogs::orderBy('blog_id', 'desc')->get();

        //dd($blogs);
        return view('blog/blog-list', compact('blogs'));
    }

    public function postBlog(Request $request)
    {
        //dd($request->blog_images);
        $blog = new Blogs;
        $this -> validate($request, [
            'blog_title' => 'required',
        ]);
        if($request->blog_images != Null){
            if($request->hasFile('blog_images')){
            $filename = $request->blog_images->getClientOriginalName();
            $request->blog_images->move(public_path() . '/backend/blog-images/', $filename);
            $blog->blog_images = $filename;
        } 
        }
         if($request->auther_name != Null){ 
            $blog->auther_name = $request->auther_name;
        }
        if($request->blog_title != Null){
            $blog->blog_title = $request->blog_title;
        }
        if($request->blog_title != Null){
            $cleaned_title = str_replace("?", "", $request->blog_title);
            // Replace spaces with hyphens and convert to lowercase for generating the blog slug
            $replaced_string = str_replace(" ", "-", $cleaned_title);
            $blog->blog_slug = strtolower($replaced_string);
        }
        if($request->blog_description != Null){
            $blog->blog_description = $request->blog_description;
        }
         if($request->blog_meta_title != Null){
            $blog->blog_meta_title = $request->blog_meta_title;
        }
         if($request->blog_meta_description != Null){
            $blog->blog_meta_description = $request->blog_meta_description;
        }
        $blog->save();

        $alert = array(
                  'message' => 'Blog Added successfully',
                  'alert-type' => 'success'
                  
                  ); 

        return redirect('blog-list')->with($alert);
    }

    public function EditBlog(Request $request)
    {
        $dataId = $_GET['id'];
        $blog = Blogs::find($dataId);
        return view('blog/edit', compact('blog'));
    }

    public function PostEditBlog(Request $request)
    {

        $dataId = $request->dataId;
        $blog = Blogs::find($dataId);
        $this -> validate($request, [
            'blog_title' => 'required',
        ]);
        if($request->blog_images != Null){
            if($request->hasFile('blog_images')){
            $filename = $request->blog_images->getClientOriginalName();
            $request->blog_images->move(public_path() . '/backend/blog-images/', $filename);
            $blog->blog_images = $filename;
        } 
        }
         if($request->auther_name != Null){ 
            $blog->auther_name = $request->auther_name;
        }
        if($request->blog_title != Null){
            $blog->blog_title = $request->blog_title;
        }
        if($request->blog_title != Null){
            $cleaned_title = str_replace("?", "", $request->blog_title);
            // Replace spaces with hyphens and convert to lowercase for generating the blog slug
            $replaced_string = str_replace(" ", "-", $cleaned_title);
            $blog->blog_slug = strtolower($replaced_string);
        }
        if($request->blog_description != Null){
            $blog->blog_description = $request->blog_description;
        }
         if($request->blog_meta_title != Null){
            $blog->blog_meta_title = $request->blog_meta_title;
        }
         if($request->blog_meta_description != Null){
            $blog->blog_meta_description = $request->blog_meta_description;
        }
        $blog->save();

        $alert = array(
                  'message' => 'Blog Edited successfully',
                  'alert-type' => 'success'
                  
                  ); 
        return redirect('blog-list')->with($alert);;
    }

    public function DeleteBlog(Request $request)
    {
        $dataId = $request->dataId;

        $blog = Blogs::find($dataId);
        $blog->delete();

        $alert = array(
                  'message' => 'Blog deleted successfully',
                  'alert-type' => 'error'
                  
                  ); 

        return redirect('blog-list')->with($alert);;
    }
	
	    public function upload(Request $request)
    {
        if($request->hasFile('upload'))
        {
            $file = $request->file('upload');
            $extension = $file->getClientOriginalExtension();
    
            // Check if the file extension is allowed
            $allowedExtensions = ['jpg', 'jpeg', 'png', 'webp'];
            if (!in_array(strtolower($extension), $allowedExtensions)) {
                return response()->json(['error' => 'Invalid file format. Allowed formats: jpg, jpeg, png, gif']);
            }
    
            $originName = $file->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $fileName = $fileName . '_' . time() . '.' . $extension;
    
            // Move the uploaded file to the public/media directory
            $file->move(public_path('media'), $fileName);
    
            $url = asset('media/' . $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);
        }
    }
}
