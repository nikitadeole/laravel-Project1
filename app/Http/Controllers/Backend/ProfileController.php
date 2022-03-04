<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class ProfileController extends Controller
{
    public function ProfileView() {
        $id = Auth::user()->id;
        $user = User::find($id);

        return view('backend.user.view_profile', compact('user'));
    }

    public function ProfileEdit() {
        $id = Auth::user()->id;
        $user = User::find($id);

        return view('backend.user.edit_profile', compact('user'));
    }

    public function ProfileStore(Request $request) {
        $data = User::find(Auth::user()->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->mobile = $request->mobile;
        $data->gender = $request->gender;
        $data->address = $request->address;

        if($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/user_images'.$data_image));
            $filename = date('y-m-d').$file->getClientOriginalName();       
            $file->move(public_path('upload/user_images'), $filename);
            $data['image'] = $filename;
        }

        $data->save();

        $notification =  [
            'message' => "User profile updated  successfully",
            'alert-type' => 'info'
        ];

        return redirect()->route('profile.view')->with($notification);
        
    }

    public function PasswordView(){
        return view('backend.user.edit_password');
    }

    public function PasswordUpdate(Request $request) {
        $validateData = $request->validate(
            [
                'oldPassword' => 'required',
                'password' => 'required|confirmed   '
            ]
            );

            $hashPassword = Auth::user()->password;
            if(Hash::check($request->oldPassword, $hashPassword )) {
                $user = User::find(Auth::id());
                $user->password  = Hash::make($request->password);
                $user->save();
                Auth::logout;
                return redirect()->route('login') ;
            }
            else {
                return back();
            }

    }
}
