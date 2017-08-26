<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class EventController extends Controller
{
    //
    /**
     * @param Request $request
     * @param $user_id
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request, $id)
    {
//        DB::beginTransaction();
        try {


            $data = new Event();
                $data->title = $request->get('title');
                 $data->detail= $request->get('detail');
                 $data-> userid =$id;
                 $data-> locationid = 1;
           /*      $data-> statusid = 1;*/

                 $data->save();
//            DB::commit();
            if ($data) {
                return response()->json(['message' => 'Event has been registered', 'data' => $data]);
            } else {
                return response()->json(['message' => 'Event not registered!!']);
            }
        } catch (\PDOException $e) {

//            DB::rollback();
            return response()->json(
                ['message' => 'Something Went Wrong, Error: ' . $e->getMessage()]
            );

        }
    }
    public function listevent()
    {
        try{
            $data =Event::all();
            if(count($data) == 0){
                return response()->json(['message' => 'Sorry !!! No data found']);
            }else {
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
            $result = Event::find($id);

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
            $data = Event::find($id);
            $data->delete();
            return response()->json(['message' => 'Event deleted successfully!!']);

        }
        catch(\Exception $e)
        {
            print_r($e);
        }
    }
    public function update(Request $request, $id)
    {
        try {
            $data = Event::find($id);

            $data->title = $request->input('title');
            $data->detail = $request->input('detail');



            $data->save();

            if ($data->save()) {
                return response()->json(['message' => 'Event data updated successfully!! ', 'data' => $data]);
            }

        } catch (\Exception $e) {
            return $e;
        }
    }
}
