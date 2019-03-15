<?php
    function generateToken(){
        $header=[
            'typ'=> 'JWT',
            'algo'=> 'HS256',
            'dev'=> 'Clarice Vega Ebalobo',
        ];
        $header=json_encode($header);
        $header=str_replace(['+','/','='],['-','_',''],base64_encode($header));

        $payload=[
            'userid'=> '201510252',
            'email'=> 'yraclarence27@gmail.com',
            'ito'=> 'Juan Dela Cruz',
            'iby'=> 'Clarice Vega Ebalobo',
            'ie'=> 'issuer@example.com',
            'idate'=> date_create()   
        ];
        $payload=json_encode($payload);
        $payload=str_replace(['+','/','='],['-','_',''],base64_encode($payload));

        $signature=hash_hmac('sha256',$header.".".$payload,base64_encode('secretkey'),true);
        $signature=str_replace(['+','/','='],['-','_',''],base64_encode($signature));

        $jwt="$header.$payload"."$signature";
        return base64_encode($jwt);
    }
    funtion validateToken(){
        if($userToekn===$existingToken){
            return 1;
        }
        return 0;
    }
?>