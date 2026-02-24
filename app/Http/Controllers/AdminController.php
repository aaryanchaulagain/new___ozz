<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Contact;
use App\Models\Testimonial;
use App\Models\Blog;
use App\Models\CEO;
use App\Models\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    // Show login form
    public function showLoginForm()
    {
        return view('admin.login');
    }

    // Handle login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $admin = Admin::where('email', $request->email)->first();

        if ($admin && Hash::check($request->password, $admin->password)) {
            Session::put('admin_id', $admin->id);
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    // Dashboard
    public function dashboard()
    {
        if (!Session::has('admin_id')) {
            return redirect()->route('admin.login.form');
        }

        $contacts = Contact::latest()->get();
        $testimonials = Testimonial::latest()->get();
        $blogs = Blog::latest()->get();
        $ceo = CEO::first();
        $teamMembers = TeamMember::all();

        return view('admin.dashboard', compact(
            'contacts',
            'testimonials',
            'blogs',
            'ceo',
            'teamMembers'
        ));
    }

    // Logout
    public function logout()
    {
        Session::forget('admin_id');
        return redirect()->route('admin.login.form');
    }

    // Delete contact
    public function deleteContact($id)
    {
        if (!Session::has('admin_id')) {
            return redirect()->route('admin.login.form');
        }

        $contact = Contact::find($id);

        if ($contact) {
            $contact->delete();
            return redirect()->route('admin.dashboard')
                ->with('success', 'Contact deleted successfully!');
        }

        return redirect()->route('admin.dashboard')
            ->with('error', 'Contact not found!');
    }

    // store ceo image
    public function storeCeoImage(Request $request)
    {
        if ($request->hasFile('image')) {
            $path = public_path('ceo');

            if (!File::isDirectory($path)) {
                File::makeDirectory($path, 0777, true, true);
            }

            $file = $request->file('image');
            $file->move($path, 'ceo.jpg');

            return back()->with('success', 'Image uploaded successfully!');
        }

        return back()->with('error', 'No image selected.');
    }

    // Update CEO Name & Message
    public function updateCEOInfo(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $ceo = CEO::first();
        if (!$ceo) {
            $ceo = new CEO();
        }

        $ceo->name = $request->name;
        $ceo->message = $request->message;
        $ceo->save();

        return redirect()->route('admin.dashboard')->with('success', 'CEO info updated successfully!');
    }

    // Upload / Replace CEO Image
    public function updateCEOImage(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,,webp,jpg,gif|max:2048',
        ]);

        $ceo = CEO::first();
        if (!$ceo) $ceo = new CEO();

        $imagePath = public_path('ceo/ceo.jpg');
        if (file_exists($imagePath)) unlink($imagePath); // remove old image

        $request->photo->move(public_path('ceo'), 'ceo.jpg');

        $ceo->photo = 'ceo.jpg';
        $ceo->save();

        return redirect()->route('admin.dashboard')->with('success', 'CEO image uploaded successfully!');
    }

    // Delete CEO Image
    public function deleteCEOImage()
    {
        $ceo = CEO::first();
        $imagePath = public_path('ceo/ceo.jpg');

        if ($ceo && file_exists($imagePath)) {
            unlink($imagePath); // delete file
            $ceo->photo = null; // clear DB
            $ceo->save();
        }

        return redirect()->route('admin.dashboard')->with('success', 'CEO image deleted successfully!');
    }

    // ------------------- Team Member CRUD -------------------

    // Store new team member
    public function storeTeam(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $destinationPath = public_path('uploads/team');

            if (!File::isDirectory($destinationPath)) {
                File::makeDirectory($destinationPath, 0777, true, true);
            }

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $imageName = time() . '.' . $extension;

            $file->move($destinationPath, $imageName);

            TeamMember::create([
                'name' => $request->name,
                'image' => $imageName
            ]);

            return back()->with('success', 'Team member added successfully!');
        }
    }

    // Edit team member form
    public function editTeam($id)
    {
        $member = TeamMember::findOrFail($id);
        return view('admin.team_edit', compact('member'));
    }

    // Update team member
    public function updateTeam(Request $request, $id)
    {
        $member = TeamMember::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,webp,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('image')) {
            if (file_exists(public_path('uploads/team/' . $member->image))) {
                unlink(public_path('uploads/team/' . $member->image));
            }
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/team'), $imageName);
            $member->image = $imageName;
        }

        $member->name = $request->name;
        $member->save();

        return redirect()->route('admin.dashboard')->with('success', 'Team member updated successfully!');
    }

    // Delete team member
    public function deleteTeam($id)
    {
        $member = TeamMember::findOrFail($id);

        if (file_exists(public_path('uploads/team/' . $member->image))) {
            unlink(public_path('uploads/team/' . $member->image));
        }

        $member->delete();

        return back()->with('success', 'Team member deleted successfully!');
    }

    // Store Blog
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->content = $request->content;

        if ($request->hasFile('image')) {
            $path = public_path('uploads/blogs');

            if (!File::isDirectory($path)) {
                File::makeDirectory($path, 0777, true, true);
            }

            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move($path, $imageName);
            $blog->image = $imageName;
        }

        $blog->save();

        return back()->with('success', 'Blog added successfully');
    }
// App\Http\Controllers\AdminController.php

public function storeTestimonial(Request $request)
{
    $request->validate([
        'name' => 'required',
        'message' => 'required',
        'image' => 'required|image|mimes:jpg,jpeg,webp,png|max:2048',
    ]);

    if ($request->hasFile('image')) {
        $imageName = time() . '.' . $request->image->extension();

        // Ensure this folder exists: public/uploads/testimonials
        $request->image->move(public_path('uploads/testimonials'), $imageName);

        \App\Models\Testimonial::create([
            'name' => $request->name,
            'message' => $request->message,
            'image' => $imageName,
        ]);

        return back()->with('success', 'Testimonial added successfully!');
    }

    return back()->with('error', 'Image upload failed.');
}
}
