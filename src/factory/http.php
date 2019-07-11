<?php
if (defined('SWOOLE_SERVER'))
{
    $http = new SPF\Http\PWS();
}
elseif (defined('SWOOLE_HTTP_SERVER'))
{
    $http = Swoole::$php->ext_http_server;
}
else
{
    $http = new SPF\Http\FastCGI();
}
return $http;