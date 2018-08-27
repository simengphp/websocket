<?php
namespace app\index\controller;

use think\Controller;

class Index extends Controller
{
    public function index()
    {
        /**WebSocket*/
        $socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
        socket_bind($socket, '127.0.0.1');
        socket_connect($socket, '127.0.0.1', 8000);
        $ret = socket_listen($socket, 2);
        dump($ret);
        return $this->fetch('index', ['hello'=>'world']);
    }
}
