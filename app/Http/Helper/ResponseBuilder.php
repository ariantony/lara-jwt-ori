<?php
namespace App\Http\Helper;

class ResponseBuilder {

    public static function result($status="", $message="", $data="", $response_code="" ) {

        return response()->json([
            "status" => $status,
            "message" => $message,
            "data" => $data,
        ], $response_code);

    }
}

?>
