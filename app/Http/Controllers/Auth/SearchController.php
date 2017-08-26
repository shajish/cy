<?php

namespace App\Http\Controllers;

use App\Models\Interest;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use DB;

class SearchController extends Controller
{
    public function Search(Request $request)
    {
        $username = $request->get('firstname');
        $education = $request->get('degree');

        $user = DB::table('User')
            ->join('education', 'user.id', '=', 'education.userid')
            ->join('user_profile', 'user.id', '=', 'user_profile.userid')
            ->select('user.email','education.degree', 'user_profile.first_name', 'user_profile.last_name')
            ->where('first_name', 'like', '%' . $username . '%')
            ->where('degree', 'like', '%' . $education . '%')
            ->get();
        return response()->json(['data' => $user]);
    }


}
