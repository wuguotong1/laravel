<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Routing\Controller as BaseController;

/**
 *  首页类
 * @package App\Http\Controllers\Admin
 * @author GuoTong
 * @date   2020/07/24
 */
class IndexController extends BaseController
{
    /**
     *  登录
     * @param Request $req
     */
    public function index(Request $req)
    {
        echo 'index';

    }

    public function create(Request $request)
    {
        var_dump($request->all());
        die;
    }
}
