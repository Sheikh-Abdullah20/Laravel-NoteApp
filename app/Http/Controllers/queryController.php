<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\User;
use Illuminate\Http\Request;

class queryController extends Controller
{

    // AS All ways Homee
    public function home()
    {

        if(!session()->has('id')){
            return redirect()->route('signin');
        }

        $id = session('id');
        $email = session('email');
        $notes = Note::where('user_id', $id)->get();
        $users = User::where('email', $email)->first();
        return view('home', ['notes' => $notes, 'users' => $users]);
    }

    // Signup Page
    public function signup()
    {
        return view('signup');
    }

    // Signing Up
    public function adduser(Request $req)
    {
        $req->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'password' => 'required|min:3',
        ]);

        $users = User::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => password_hash($req->password, PASSWORD_BCRYPT),
        ]);
        return redirect()->route('signin')->with('signupSuccess', 'Account Has Been Created Now You Can Signin');
    }

    // Signin Page
    public function signin()
    {
        return view('signin');
    }

    // Signing In Web
    public function finduser(Request $req)
    {
        $req->validate([
            'email' => 'required|email',
            'password' => 'required|min:3',
        ]);

        $user = User::where('email', $req->email)->first();
        if ($user) {
            if (password_verify($req->password, $user->password)) {
                // echo $user;
                session()->put('id', $user->id);
                session()->put('name', $user->name);
                session()->put('email', $user->email);
                return redirect()->route('home')->with('welcome', 'Welcome Back ' . session('name'));
                exit();
            } else {
                return redirect()->route('signin')->with('passwordError', "Password Do Not Match");
                exit();
            }
        } else {
            return redirect()->route('signin')->with('notFound', "User Not Found");
            exit();
        }

    }

    // Signing Out From Web
    public function signout()
    {
        session()->flush();
        return redirect()->route('signin')->with('logout', 'You Have Been Logged Out');
    }
    public function addnote(Request $req)
    {

        $req->validate([
            'title' => 'required|min:3',
            'description' => 'required|min:5',
        ]);
        $note = Note::create([
            'title' => $req->title,
            'description' => $req->description,
            'user_id' => session('id'),
        ]);
        if ($note) {
            return redirect()->route('home')->with('added', session('name')." Your Note Has Been Added");
        }
    }

    // Editing Note
    public function editnote(Request $req, $id)
    {
        if(!session()->has('id')){
            return redirect()->route('signin');
        }
        $email = session('email');
        $note = Note::find($id);
        $users = User::where('email', $email)->first();
        return view('editnote', compact('note','users'));

    }
    public function updatenote(Request $req, string $id)
    {
        $note = Note::where('id', $id)->update([
            "title" => $req->title,
            "description" => $req->description,
        ]);
        if ($note) {
            return redirect()->route('home')->with('updated', 'Note Has Been Updated');
        }
    }

// Deleting Note
    public function deletenote($id)
    {
        if(!session()->has('id')){
            return redirect()->route('signin');
        }

        $Note = Note::where('id', $id)->delete();

        if ($Note) {
            return redirect()->route('home')->with('deleted', 'Note Has Been Deleted');
        } else {
            return "Note Not Deleted";
        }
    }

    // Profile
    public function profile()
    {
        if(!session()->has('id')){
            return redirect()->route('signin');
        }
        $email = session('email');
        $users = User::where('email', $email)->first();
        // return $user;

        return view('profile', compact('users'));
    }

    // Edit Profile Page

    public function editprofile()
    {
        if(!session()->has('id')){
            return redirect()->route('signin');
        }
        $email = session('email');
        $users = User::where('email', $email)->first();
        return view('updateprofile', compact('users'));
    }

    // Update Profile
    public function updateprofile(Request $req)
    {
        $req->validate([
            'profile' => "mimes:png,jpg,jpeg",
        ]);
        
        $id = session('id');
        $user = User::where('id', $id)->first();
        if ($req->file('profile')) {
            $req->file('profile')->move('images/faces/', $user->profile);
            $user->update([
                'name' => $req->name,
                'email' => $req->email,
                'address' => $req->address,
                'github' => $req->github,
                'twitter' => $req->twitter,
                'linkedin' => $req->linkedin,
                'portfolio' => $req->portfolio,
                'contact' => $req->contact,
                'profile' => $req->file('profile')->getClientOriginalName(),
            ]);
            return redirect()->route('profile')->with('profile', session('name') . ' Your  Profile  Has Been Updated');
        } else {
            $user->update([
                'name' => $req->name,
                'email' => $req->email,
                'address' => $req->address,
                'github' => $req->github,
                'twitter' => $req->twitter,
                'linkedin' => $req->linkedin,
                'portfolio' => $req->portfolio,
                'contact' => $req->contact,
            ]);
            session()->put('name', $req->name);
            session()->put('email', $req->email);
            return redirect()->route('profile')->with('profile', session('name') . ' Your  Has Been Profile Updated');
        }
    }
}
