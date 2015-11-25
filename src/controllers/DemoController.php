<?php
namespace Jc\Demo\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;
Class DemoController extends Controller {
    public function getTest() {
        return "控制器测试";
    }
    public function getMatches() {
        echo 'getMatches';
        return View::make('demo::test');
    }
}