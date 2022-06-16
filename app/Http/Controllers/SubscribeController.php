<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\WebsiteUser;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    public function subscribe(Request $request, $website_uuid) {
        $request->validate([
            'name' => "required",
            'email' => "required|email|unique:users,email",
            'website_uuid' => 'required'
        ]);

        $user = User::create($request->except('website_uuid'));
        WebsiteUser::create([
            'user_id' => $user->id,
            'website_uuid' => $request->website_uuid,
        ]);

        return response()->json(['success', "You have successfully subscribe to this website"]);
    }
}
