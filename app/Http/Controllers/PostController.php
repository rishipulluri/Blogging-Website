<?php

namespace App\Http\Controllers;

class PostController extends Controller
{
    public function getBlogIndex()
    {
        //Fetch single posts and paginate
        return view('frontend.blog.index');
        
    }
    
    public function getSinglePost($post_id, $end = 'frontend')
    {
        //Fetch the post
        return view($end. 'blog.single');
    }
}