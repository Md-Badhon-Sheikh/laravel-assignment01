<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function createStaff(){
        return view('pages.staff.addStaff');
    }

    public function fileStore(Request $request){

        $post = new Staff;

        // validation 
         $validated = $request->validate([
        'name' => 'required|max:255',
        'position' => 'required',
        'email' => 'required|email|unique:users,email',
        'image' => 'nullable|mimes:jpg,jpeg,png',
        'phone' => 'required',
    ]);

        // image upload 
        $imageName = null;
        if(isset($request ->image)){
              $imageName =  time().'.'. $request ->image-> extension();
              $request->image->move(public_path('images'), $imageName);
        }

        // add new post 
        $post -> name = $request ->name;
        $post -> position = $request ->position;
        $post -> email = $request ->email;
        $post -> image = $imageName;
        $post -> phone = $request ->phone;

        $post-> save();
        return redirect()->route('addStaff');
    }


    // edit 

    public function editData($id){
        $post = Staff::findOrFail($id);

        return view('pages.staff.edit', ['ourPost'=> $post]);
    }

    // update data 

    public function updateData($id, Request $request){
       
        

            // validation 
         $validated = $request->validate([
        'name' => 'required|max:255',
        'position' => 'required',
        'email' => 'required|email|unique:users,email',
        'image' => 'nullable|mimes:jpg,jpeg,png',
        'phone' => 'required',
    ]);

 // image update 
        $imageName = null;
        if(isset($request ->image)){
              $imageName =  time().'.'. $request ->image-> extension();
              $request->image->move(public_path('images'), $imageName);
        }

        // update post 

         $post = Staff::findOrFail($id);
        $post -> name = $request ->name;
        $post -> position = $request ->position;
        $post -> email = $request ->email;
        $post -> image = $imageName;
        $post -> phone = $request ->phone;

        $post-> save();
        return redirect()->route('staff-list');

    }
}
