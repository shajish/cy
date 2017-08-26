<?php

namespace App\Http\Controllers;

use App\Models\Community;
use App\User;
use App\Models\UserProfile;
use App\Models\UserRole;
use Illuminate\Http\Request;
use DB;

class CommunityController extends Controller
{
    //

    public function verifyGuestToMember(Request $request)
    {
        try {
            $changeRole = UserRole::where('userid', '=', $request->get('userid'))
                ->update([
                    'roleid' => 3//$request->get('roleid);
                ]);
            $changeActiveStatus = User::where('id', '=', $request->get('userid'))
                ->update([
                    'statusid' => 1//$request->get('roleid);
                ]);

            if ($changeActiveStatus) {
                return response()->json(['message' => 'You are Activated and role changed']);
            } else {
                return response()->json(['message' => 'Something Went Wrong']);
            }
        } catch (\PDOException $e) {
            return response()->json(['message' => 'Something Went Wrong, Error: ' . $e->getMessage()]);
        }
    }

    /* Community Registration */


 public function register(Request $request)
    {
        DB::beginTransaction();
        try {
            $communityObj = Community::create([
                'name' => $request->get('name'),
                'location' => $request->get('location'),

            ]);
            DB::commit();
            if ($communityObj) {
                return response()->json(['message' => 'Community has been registered', 'data' => $communityObj]);
            } else {
                return response()->json (['message' => 'Something Went Wrong']);
            }
        } catch (\PDOException $e) {

            DB::rollback();
            return response()->json(['message' => 'Something Went Wrong, Error: ' . $e->getMessage()]);
        }
    }

    public function listcommunity()
    {
        try{
            $data =Community::all();
            if(count($data) == 0){
                return response()->json(['message' => 'Sorry !!! No data found']);
            }else {
//                $da=$data->firstname;
                return response()->json(['datas' => $data]);
            }
        }catch(\Exception $e)
        {
            return response()->json(['message' => 'Something Went Wrong, Error: '. $e->getMessage()]);
        }
    }
    public function view($id)
    {
        try{
            $result = Community::find($id);

            return response()->json($result);

        }
        catch(\Exception $e)
        {
            print_r($e);
        }
    }
    public function delete($id)
    {
        try{
            $data = Community::find($id);
            $data->delete();
            return response()->json(['message' => 'Community has been deleted!!']);

        }
        catch(\Exception $e)
        {
            print_r($e);
        }
    }
    public function update(Request $request, $id)
    {
        try {
            $data = Community::find($id);

            $data->name = $request->input('name');
            $data->location = $request->input('location');



            $data->save();

            if ($data->save()) {
                return response()->json(['message' => 'data updated ', 'data' => $data]);
            }

        } catch (\Exception $e) {
            return $e;
        }
    }

}


