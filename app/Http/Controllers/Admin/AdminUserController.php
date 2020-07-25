<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Routing\Controller as BaseController;

/**
 *  后台登录模块
 * @package App\Http\Controllers\Admin
 * @author GuoTong
 * @date   2020/07/24
 */
class AdminUserController extends BaseController
{
    /**
     *  登录
     * @param Request $req
     */
    public function login(Request $req)
    {
        echo '<pre>';
        $oReq = $req->all();
        var_dump($oReq);die;

    }

    public function create(Request $request)
    {
        var_dump($request->all());

        die;
    }
}
