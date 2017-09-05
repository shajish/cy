<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\Contact;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Interest;
use App\User;


use App\Models\UserProfile;
use App\Models\UserRole;
use App\Models\Profession;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;
use JWTAuth;

use Dingo\Api\Exception\ValidationHttpException;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function userlist(Request $request)
    {
        /*try {
            $data = User::all();
            if (count($data) == 0) {
                return response()->json(['message' => 'Sorry !!! No data found']);
            } else {
                return response()->json(['datas' => $data]);
            }
        } catch (\Exception $e) {
            return response()->json(['Token Expired'], $e->getMessage());
        }*/
        $user = DB::table('User')
        ->leftjoin('education', 'user.id', '=', 'education.userid')
        ->join('user_profile', 'user.id', '=', 'user_profile.userid')
        ->select('user.email','education.degree','user_profile.first_name', 'user_profile.last_name')
        ->get();
        return response()->json(['datas' => $user]);
    }

    /* REGISTRATION */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email'     => 'required',
            'password'  => 'required',
            'dob'       => 'date_format:"Y-m-d"|required',
            'gender'    => 'required',
            'firstname' => 'required',
            'lastname'  => 'required',
            ]);
        if ($validator->fails()) {
            throw new ValidationHttpException($validator->errors()->all());
        }

        DB::beginTransaction();
        $userObj = User::create([
            'email'      => $request->get('email'),
            'password'   => bcrypt($request->get('password')),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'statusid'   => 2,
            ]);
        $user_id = $userObj->id;
        $userRoleObj = UserRole::create([
            'userid' => $user_id,
            'roleid' => 4
            ]);
        $userProfile = UserProfile::create([
            'DOB'        => $request->get('dob'),
            'gender'     => $request->get('gender'),
            'first_name' => $request->get('firstname'),
            'last_name'  => $request->get('lastname'),
            'userid'     => $user_id
            ]);
        try {
            DB::commit();
            return apiResponse('success','Welcome to Creative Youth.',$userObj);
        } catch (Exception $e) {
            DB::rollback();
            return apiResponse('failed','Something Went Wrong, Error: ' . $e->getMessage() );
        }
    }


    /* public function registerEducation(Request $request){
         try
         {
             $userEducation=Education::create([

                 'institute'=>$request->get('institute'),
                 'from_year'=>$request->get('fromyear'),
                 'to_year'=>$request->get('toyear'),
                 'description'=>$request->get('description'),
                 'degree'=>$request->get('degree')
             ]);
             if($userEducation->save)
             {
                 return response()->json(['message'=>'Your Data Inserted Successfully']);
             }

         }
         catch(\PDOException $e)
         {
             return response()->json(['message' => 'Something Went Wrong, Error: ' . $e->getMessage()]);
         }
     }*/

     /* VIEW THROUGH ID */
     public function view($id){
        try {
            $result = User::find($id);
            return response()->json($result);
        } catch (\Exception $e) {
            print_r($e);
        }
    }

    public function viewEducation($user_id)
    {
        try {
            /*$education= JWTAuth::parseToken()->toUser();*/

            $result = DB::table('Education')
            ->where('userid', '=', $user_id)
            ->get();


            return response()->json($result);

        } catch (\Exception $e) {
            print_r($e);
        }
    }

    public function viewProfession($user_id)
    {
        try {
            /*$profession= JWTAuth::parseToken()->toUser();*/
            /*return response()->json($profession);
            */

            $result = DB::table('profession')
            ->where('userid', '=', $user_id)
            ->get();

            return response()->json($result);
        } catch (\Exception $e) {
            print_r($e);
        }
    }

    public function viewContact($user_id)
    {
        try {
            $result = DB::table('contact')
            ->where('userid', '=', $user_id)
            ->get();

            return response()->json($result);
        } catch (\Exception $e) {
            print_r($e);
        }
    }

    public function viewInterest($user_id)
    {
        try {
            $result = DB::table('interest')
            ->where('userid', '=', $user_id)
            ->get();

            return response()->json($result);
        } catch (\Exception $e) {
            print_r($e);
        }
    }

    public function viewBusiness($user_id)
    {
        try {
            $result = DB::table('business')
            ->where('userid', '=', $user_id)
            ->get();

            return response()->json($result);
        } catch (\Exception $e) {
            print_r($e);
        }
    }

    public function viewExperience($user_id)
    {
        try {
            $result = DB::table('experience')
            ->where('userid', '=', $user_id)
            ->get();

            return response()->json($result);
        } catch (\Exception $e) {
            print_r($e);
        }
    }


    /* DELETE */

    public function deleteUser($id)
    {
        try {
            $data = User::find($id);
            $data->delete();
            return response()->json(['message' => 'You are removed from CY member']);

        } catch (\Exception $e) {
            print_r($e);
        }
    }

    public function deleteEducation($user_id, $education_id)
    {
        try {
            $data = Education::where('id', '=', $education_id)
            ->where('userid', '=', $user_id)
            ->delete();

            if ($data) {
                return response()->json(['message' => 'data deleted ', 'data' => $data]);
            } else {
                return response()->json(['message' => 'Something Went Wrong']);
            }

        } catch (\Exception $e) {
            return response()->json(['message' => 'Something Went Wrong, Error: ' . $e->getMessage()]);
        }
    }

    public function deleteProfession($user_id, $profession_id)
    {
        try {
            $data = Profession::where('id', '=', $profession_id)
            ->where('userid', '=', $user_id)
            ->delete();

            if ($data) {
                return response()->json(['message' => 'data deleted ', 'data' => $data]);
            } else {
                return response()->json(['message' => 'Something Went Wrong']);
            }

        } catch (\Exception $e) {
            return response()->json(['message' => 'Something Went Wrong, Error: ' . $e->getMessage()]);
        }
    }

    public function deleteContact($user_id, $contact_id)
    {
        try {
            $data = Contact::where('id', '=', $contact_id)
            ->where('userid', '=', $user_id)
            ->delete();

            if ($data) {
                return response()->json(['message' => 'data deleted ', 'data' => $data]);
            } else {
                return response()->json(['message' => 'Something Went Wrong']);
            }

        } catch (\Exception $e) {
            return response()->json(['message' => 'Something Went Wrong, Error: ' . $e->getMessage()]);
        }
    }

    public function deleteInterest($user_id, $interest_id)
    {
        try {
            $data = Interest::where('id', '=', $interest_id)
            ->where('userid', '=', $user_id)
            ->delete();

            if ($data) {
                return response()->json(['message' => 'data deleted ', 'data' => $data]);
            } else {
                return response()->json(['message' => 'Something Went Wrong']);
            }

        } catch (\Exception $e) {
            return response()->json(['message' => 'Something Went Wrong, Error: ' . $e->getMessage()]);
        }
    }

    public function deleteBusiness($user_id, $business_id)
    {
        try {
            $data = Business::where('id', '=', $business_id)
            ->where('userid', '=', $user_id)
            ->delete();

            if ($data) {
                return response()->json(['message' => 'data deleted ', 'data' => $data]);
            } else {
                return response()->json(['message' => 'Something Went Wrong']);
            }

        } catch (\Exception $e) {
            return response()->json(['message' => 'Something Went Wrong, Error: ' . $e->getMessage()]);
        }
    }

    public function deleteExperience($user_id, $experience_id)
    {
        try {
            $data = Experience::where('id', '=', $experience_id)
            ->where('userid', '=', $user_id)
            ->delete();

            if ($data) {
                return response()->json(['message' => 'data deleted ', 'data' => $data]);
            } else {
                return response()->json(['message' => 'Something Went Wrong']);
            }

        } catch (\Exception $e) {
            return response()->json(['message' => 'Something Went Wrong, Error: ' . $e->getMessage()]);
        }
    }

    /* UPDATE */

    public function updateUser(Request $request, $id)
    {
        try {
            $data = User::find($id);

            $data->email = $request->input('email');
            $data->password = bcrypt($request->input('password'));


            $data->save();

            if ($data->save()) {
                return response()->json(['message' => 'data updated ', 'data' => $data]);
            }

        } catch (\Exception $e) {
            return $e;
        }
    }

    public function updateEducation(Request $request, $user_id, $education_id)
    {
        try {
            $data = Education::where('id', '=', $education_id)
            ->where('userid', '=', $user_id)
            ->update([
                'institute' => $request->input('institute'),
                'from_year' => $request->input('fromyear'),
                'to_year' => $request->input('toyear'),
                'description' => $request->input('description'),
                'degree' => $request->input('degree')
                ]);

            if ($data) {
                return response()->json(['message' => 'data updated ', 'data' => $data]);
            } else {
                return response()->json(['message' => 'Something Went Wrong']);
            }

        } catch (\Exception $e) {
            return response()->json(['message' => 'Something Went Wrong, Error: ' . $e->getMessage()]);
        }
    }

    public function updateInterest(Request $request, $user_id, $interest_id)
    {
        try {
            $data = Interest::where('id', '=', $interest_id)
            ->where('userid', '=', $user_id)
            ->update([
                'interests' => $request->input('interest'),
                ]);

            if ($data) {
                return response()->json(['message' => 'data updated ', 'data' => $data]);
            } else {
                return response()->json(['message' => 'Something Went Wrong']);
            }

        } catch (\Exception $e) {
            return response()->json(['message' => 'Something Went Wrong, Error: ' . $e->getMessage()]);
        }
    }

    public function updateProfession(Request $request, $user_id, $profession_id)
    {
        try {
            $data = Profession::where('id', '=', $profession_id)
            ->where('userid', '=', $user_id)
            ->update([
                'type' => $request->input('type'),
                'detail' => $request->input('detail')
                ]);

            if ($data) {
                return response()->json(['message' => 'data updated ', 'data' => $data]);
            } else {
                return response()->json(['message' => 'Something Went Wrong']);
            }

        } catch (\Exception $e) {
            return response()->json(['message' => 'Something Went Wrong, Error: ' . $e->getMessage()]);
        }
    }

    public function updateContact(Request $request, $user_id, $contact_id)
    {
        try {
            $data = Contact::where('id', '=', $contact_id)
            ->where('userid', '=', $user_id)
            ->update([

                'mobile' => $request->input('mobile'),
                'telephone' => $request->input('telephone'),
                'social_link' => $request->input('link')

                ]);

            if ($data) {
                return response()->json(['message' => 'data updated ', 'data' => $data]);
            } else {
                return response()->json(['message' => 'Something Went Wrong']);
            }

        } catch (\Exception $e) {
            return response()->json(['message' => 'Something Went Wrong, Error: ' . $e->getMessage()]);
        }
    }

    public function updateBusiness(Request $request, $user_id, $business_id)
    {
        try {
            $data = Business::where('id', '=', $business_id)
            ->where('userid', '=', $user_id)
            ->update([

                'name' => $request->input('name'),
                'type' => $request->input('type'),
                'description' => $request->input('detail')

                ]);

            if ($data) {
                return response()->json(['message' => 'data updated ', 'data' => $data]);
            } else {
                return response()->json(['message' => 'Something Went Wrong']);
            }

        } catch (\Exception $e) {
            return response()->json(['message' => 'Something Went Wrong, Error: ' . $e->getMessage()]);
        }
    }

    public function updateExperience(Request $request, $user_id, $experience_id)
    {
        try {
            $data = Experience::where('id', '=', $experience_id)
            ->where('userid', '=', $user_id)
            ->update([

                'organization' => $request->input('organization'),
                'position' => $request->input('position'),
                'title' => $request->input('title'),
                'from' => $request->input('from'),
                'to' => $request->input('to')
                ]);

            if ($data) {
                return response()->json(['message' => 'data updated ', 'data' => $data]);
            } else {
                return response()->json(['message' => 'Something Went Wrong']);
            }

        } catch (\Exception $e) {
            return response()->json(['message' => 'Something Went Wrong, Error: ' . $e->getMessage()]);
        }
    }


    /* Insertion */

    public function insertProfession(Request $request, $id)
    {
        try {
            $data = new Profession();

            $data->type = $request->input('type');
            $data->detail = $request->input('detail');
            $data->userid = $id;

            $data->save();

            if ($data->save()) {
                return response()->json(['message' => 'data interest ', 'data' => $data]);
            }

        } catch (\Exception $e) {
            return $e;
        }
    }

    public function insertEducation(Request $request, $id)
    {
        try {
            $data = new Education();

            $data->institute = $request->input('institute');
            $data->from_year = $request->input('fromyear');
            $data->to_year = $request->input('toyear');
            $data->description = $request->input('description');
            $data->degree = $request->input('degree');
            $data->userid = $id;


            $data->save();

            if ($data->save()) {
                return response()->json(['message' => 'data inserest ', 'data' => $data]);
            }

        } catch (\Exception $e) {
            return $e;
        }
    }

    public function insertContact(Request $request, $id)
    {
        try {
            $data = new Contact();

            $data->mobile = $request->input('mobile');
            $data->telephone = $request->input('telephone');
            $data->social_link = $request->input('link');
            $data->userid = $id;


            $data->save();

            if ($data->save()) {
                return response()->json(['message' => 'data inserted ', 'data' => $data]);
            }

        } catch (\Exception $e) {
            return $e;
        }
    }

    public function insertInterest(Request $request, $id)
    {
        try {
            $data = new Interest();

            $data->interests = $request->input('interest');
            $data->userid = $id;

            $data->save();

            if ($data->save()) {
                return response()->json(['message' => 'data inserted ', 'data' => $data]);
            }

        } catch (\Exception $e) {
            return $e;
        }
    }

    public function insertBusiness(Request $request, $id)
    {
        try {
            $data = new Business();

            $data->name = $request->input('name');
            $data->type = $request->input('type');
            $data->description = $request->input('detail');
            $data->userid = $id;
            $data->save();
            if ($data->save()) {
                return response()->json(['message' => 'data inserted ', 'data' => $data]);
            }
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function insertExperience(Request $request, $id)
    {
        try {
            $data = new Experience();

            $data->organization = $request->input('organization');
            $data->position = $request->input('position');
            $data->title = $request->input('title');
            $data->from = $request->input('from');
            $data->to = $request->input('to');
            $data->userid = $id;

            $data->save();

            if ($data->save()) {
                return response()->json(['message' => 'data interest ', 'data' => $data]);
            }

        } catch (\Exception $e) {
            return $e;
        }
    }
}