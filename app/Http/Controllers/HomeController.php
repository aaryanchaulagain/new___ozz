<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enquiry; // for contact form later
use App\Models\Testimonial;
use App\Models\Blog;
use App\Models\TeamMember;

class HomeController extends Controller
{
    // Home page
    public function index()
    {
        return view('website.home');
    }

    // Services page
    public function service()
    {
        return view('website.service');
    }

    // testinomial
    public function testimonial()
{
    $testimonials = Testimonial::latest()->get();
    return view('website.testimonial', compact('testimonials'));
}


    // IELTS page
    public function ielts()
    {
        return view('website.ielts');
    }

    // PTE page
    public function pte()
    {
        return view('website.pte');
    }

    // Study in Australia page
    public function australia()
    {
        return view('website.australia');
    }

    // team member
    public function aboutus()
    {
        // 2. Fetch the team members
        $teamMembers = TeamMember::all();

        // 3. Pass them to the view
        return view('website.aboutus', compact('teamMembers'));
    }

    // Contact Us page
    public function contactus()
    {
        return view('website.contactus');
    }

    // Handle Contact Form submission
    public function storeEnquiry(Request $request)
    {
        Enquiry::create($request->all()); // make sure you have model and migration
        return redirect()->back()->with('success', 'Your enquiry has been sent!');
    }
    public function blog()
{
    $blogs = Blog::orderBy('created_at', 'desc')->get();
    return view('website.blog', [
        'blogs' => $blogs
    ]);
}
public function showBlog($id)
{
    $blog = Blog::findOrFail($id);
    // Change 'blogsingle' to 'shoeblog' to match your actual filename
    return view('website.showblog', compact('blog'));
}

}
