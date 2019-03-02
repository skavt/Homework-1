<?php
function getHeaders()
{
    foreach ( $_SERVER as $key => $value)
    {
        $defaultHeaders = substr($key, 0, 5);
        if($defaultHeaders == 'HTTP_') 
        {
        $headersArray[$key] = $value; 
        }  
    }
    return $headersArray;
}

function getPath()
{
    return $_SERVER['PATH_INFO'];
}

function getPort()
{
    return $_SERVER['SERVER_PORT'];
}

function getScheme()
{
    return $_SERVER['SERVER_PROTOCOL'];
}

function getQueryParameters()
{
    $queryParam = $_GET;
    return $queryParam;
}

function get($key)
{
    return $_SERVER[$key];
}

function getData()
{
    if ($_SERVER['REQUEST_METHOD'] == 'GET')
        $response = $_GET;
    else if ($_SERVER['REQUEST_METHOD'] == 'POST')
        $response = $_POST;
    return $response;
}

function getClientIp()
{
    return $_SERVER['REMOTE_ADDR'];
}

function getCountry()
{
    $data = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$_SERVER['REMOTE_ADDR']));
    return $data['geoplugin_countryName'];
}

function getMimeType()
{
    return explode(',', $_SERVER['HTTP_ACCEPT']);
}

function getUrl()
{
    $serverName = $_SERVER['SERVER_NAME'];
    if (getScheme() == 'http'){
        return "http://$serverName";
    }else if (getScheme() == 'https'){
        return "https://$serverName";
    }
}
?>