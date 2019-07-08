<?php


//-----------------------------------------------------------------------------------
function vh_api_call($api_url, $params =null)
{

    $client = new GuzzleHttp\Client();
    $res = $client->get($api_url, $params);

    if($res->getStatusCode() == 200)
    {

        $response['status'] = 'success';
        $response['data'] = $res->getBody();

        return $response;

    } else
    {

        $response['status'] = 'failed';
        $response['errors'][] = 'error';
        return $response;

    }

}
//-----------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------

