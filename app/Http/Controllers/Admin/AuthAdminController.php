<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Validator;


class AuthAdminController extends Controller
{
    public function index() {
        return view('backend.pages.auth.index');
    }

    public function authenticate(Request $request) {
        $validator = Validator::make($request->all(), [
            'username' => 'required|regex:/^[1-9a-zA-Z ]*$/',
            'password' => 'required|min:4|max:15',
        ]);
 
        if ($validator->passes()) {
            if(Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password])) {

                if(Auth::guard('admin')->user()->status == '1'){
                    Auth::guard('admin')->logout();
                    return redirect()->route('admin.index')->with('error','You are not authorized to access this page');
                }

                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->route('admin.index')->with('error','Either your username or password is incorrect');
            }
        } else {
            return redirect()->route('admin.index')->withErrors($validator)->withInput();
        }
    }

    public function logout() {
        Auth::guard('admin')->logout();      
        return redirect()->route('admin.index');
    }
}
