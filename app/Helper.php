<?php 

    /**
     * [ To send well formatted api response ]
     * @param  [ String ] $param_type    [ "success" / "failed" ]
     * @param  [ String ] $message [ Message to be send with response. ]
     * @return [json object]          
     */
    function apiResponse($param_type, $param_message = null, $param_data=null, $param_customFailedStatus = null){
        if($param_type       == 'success'){
            $status      = 'Success';
            $status_code = 200;
        }elseif ($param_type == 'failed') {
            $status = 'Failed';
            if($param_customFailedStatus != null){
                $status_code = $param_customFailedStatus;
            }else{
                $status_code = 500;
            }
        }
        if($param_data != null && $param_message != null){
            return response()->json([
                'status'      => $status,
                'status_code' => $status_code,
                'message'     => $param_message,
                'data'        => $param_data
                ]);
        }elseif($param_data != null ){
            return response()->json([
                'status'      => $status,
                'status_code' => $status_code,
                'data'        => $param_data
                ]);
        }else{
            return response()->json([
                'status'      => $status,
                'status_code' => $status_code,
                'message'     => $param_message
                ]);
        }
    }

    ?>
