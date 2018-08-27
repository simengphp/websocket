<?php
    /**
     * Created by PhpStorm.
     * User: Administrator
     * Date: 2018/8/27
     * Time: 10:37
     */
    /**WebSocket*/
    $socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
    socket_bind($socket, '0.0.0.0');
    socket_connect($socket, '0.0.0.0', 8000);
    $ret = socket_listen($socket, 2);
    var_dump($ret);