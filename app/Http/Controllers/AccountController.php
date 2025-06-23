<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class AccountController extends Controller
{
    public function register(Request $request){
        // need to write registration with validation
    $validator = Validator::make($request->all(), [
        'postal_code' => 'required|string|max:20',
        'prefectures' => 'required|string|max:100',
        'municipalities' => 'required|string|max:100',
        'subsequent_addresses' => 'required|string|max:255',
        'building_names' => 'nullable|string|max:255',
        'phone_number' => 'required|string|max:20',
        'email' => 'required|email|max:255|unique:users,email',
        'password' => 'required|string|min:8|confirmed',
        'full_name' => 'required|string|max:255',
        'full_furigana' => 'required|string|max:255',
    ]);

     if ($validator->fails()) {
            return response()->json(['status' => false, 'errors' => $validator->errors()]);
        } else {
            $user = new User();
            $user->username = $request->username;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->first_phone = $request->first_phone;
            $user->second_phone = $request->second_phone;
            $user->save();
    
            $user->assignRole(3);
    
            return response()->json(['status' => true, 'message' => 'Register Success']);
        }

    
    }
}
