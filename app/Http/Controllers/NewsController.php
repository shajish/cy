<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    //

    public function register(Request $request, $id){
        try {


            $data = new News();
            $data->title = $request->get('title');
            $data->detail= $request->get('detail');
            $data-> userid =$id;

            /*      $data-> statusid = 1;*/

            $data->save();
//            DB::commit();
            if ($data) {
                return response()->json(['message' => 'News has been registered', 'data' => $data]);
            } else {
                return response()->json(['message' => 'News not registered!!']);
            }
        } catch (\PDOException $e) {

//            DB::rollback();
            return response()->json(['message' => 'Something Went Wrong, Error: ' . $e->getMessage()]);
        }

    }
    public function listnews()
    {
        try{
            $data =News::all();
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
            $result = News::find($id);

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
            $data = News::find($id);
            $data->delete();
            return response()->json(['message' => 'News deleted successfully!!']);

        }
        catch(\Exception $e)
        {
            print_r($e);
        }
    }
    public function update(Request $request, $id)
    {
        try {
            $data = News::find($id);

            $data->title = $request->input('title');
            $data->detail = $request->input('detail');



            $data->save();

            if ($data->save()) {
                return response()->json(
                    ['message' => 'News data updated successfully!! ', 'data' => $data]
                );
            }

        } catch (\Exception $e) {
            return $e;
        }
    }
}
