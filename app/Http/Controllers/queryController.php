<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Note;

class queryController extends Controller
{

    public function home(){
        $id = session('id');
        $notes = Note::where('user_id',$id)->get();
        return view('home',['notes'=>$notes]);
    }
    public function signup(){
        return view('signup');
    }
    public function adduser(Request $req){
       $req->validate([
        'name' => 'required|min:3',
        'email' => 'required|email',
        'password' => 'required|min:3',
       ]);

       $users = User::create([
        'name' => $req->name,
        'email' => $req->email,
        'password' => password_hash($req->password,PASSWORD_BCRYPT),
       ]);
       return redirect()->route('signin')->with('signupSuccess','Account Has Been Created Now You Can Signin');
    }

    
    public function signin(){
        return view('signin');
    }

    public function finduser(Request $req){
        $req->validate([
            'email' => 'required|email',
            'password' => 'required|min:3',
           ]);

        $user = User::where('email',$req->email)->first();
        if($user){
           if(password_verify($req->password,$user->password)){
            // echo $user;
           session()->put('id',$user->id);
           session()->put('name',$user->name);
           session()->put('email',$user->email);
            return redirect()->route('home')->with('welcome','Welcome Back '. session('name'));
            exit();
           }else{
            return redirect()->route('signin')->with('passwordError',"Password Do Not Match");
            exit();
           }
        }else{
            return redirect()->route('signin')->with('notFound',"User Not Found");
            exit();
        }
        
    }

    public function signout(){
        session()->flush();
        return redirect()->route('signin')->with('logout','You Have Been Logged Out');
    }
    public function addnote(Request $req){
        $req->validate([
            'title' => 'required|min:3',
            'description' => 'required|min:5',
           ]);
        $note = Note::create([
           'title' => $req->title,
           'description' => $req->description,
           'user_id' => session('id'),
        ]);
        if($note){
            return redirect()->route('home')->with('added',"Note Has Been Added");
        }
    }


    public function editnote(Request $req, $id){
        $note = Note::find($id);
        return view('editnote',compact('note'));
        
    }
    public function updatenote(Request $req, string $id){
        $note = Note::where('id',$id)->update([
            "title" => $req->title,
            "description" => $req->description
        ]);
        if($note){
            return redirect()->route('home')->with('updated','Note Has Been Updated');
        }
    }


    public function deletenote($id){
        $Note = Note::where('id',$id)->delete();

        if($Note){
            return redirect()->route('home')->with('deleted','Note Has Been Deleted');
        }else{
            return "Note Not Deleted";
        }
    }


    public function profile(){
        $email = session('email');
        $user = User::where('email',$email)->first();
        // return $user;

        return view('profile',compact('user'));
    }


   


    public function editprofile(){
        $email = session('email');
        $user = User::where('email',$email)->first();
        return view('updateprofile',compact('user'));
    }
    

    public function updateprofile(Request $req){

        $req->validate([
            'profile' =>"mimes:png,jpg,jpeg",
        ]);

        $email =  session('email');
        $user  = User::where('email',$email)->first();
        

         if($req->file('profile')){
            $orignal =  $req->file('profile')->getClientOriginalName();
            $req->file('profile')->move('images/faces/',$user->profile);
            $user->update([
               'name' => $req->name,
               'email' => $req->email,
               'profile' => $orignal,
              
            ]);
            return redirect()->route('profile')->with('profile','Profile Updated');
         }
         else{
            $user->update([
                'name' => $req->name,
                'email' => $req->email,
               
             ]);
             return redirect()->route('profile')->with('profile','Profile Updated');
         }
    }
}
