<?php
namespace app\index\controller;

use think\Controller;

class Index extends Controller
{
    public function index()
    {
        dump(1);
        exit();
        return $this->fetch('index', ['hello'=>'world']);
    }
}
