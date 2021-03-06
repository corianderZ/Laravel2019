<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Lib\sms\Ucpaas;

class LoginController extends Controller
{
    //private 
    //登录页面
    public function getLogin()
    {
        return view('Admin.login');
    }

    public function checkLogin(Request $request)
    {
        

        // //初始化必填
        // //填写在开发者控制台首页上的Account Sid
        // $options['accountsid']='xxxxxxxxxxx';
        // //填写在开发者控制台首页上的Auth Token
        // $options['token']='xxxxxxxxxxx';

        // //初始化 $options必填
        // $ucpass = new Ucpaas($options);

        //载入ucpass类
        // require_once('lib/Ucpaas.class.php');
        // require_once('serverSid.php');


        $appid = "e35861db33d942e38c821240a3304b97";	//应用的ID，可在开发者控制台内的短信产品下查看
        $templateid = "419146";    //可在后台短信产品→选择接入的应用→短信模板-模板ID，查看该模板ID
        $param = $request->code; //多个参数使用英文逗号隔开（如：param=“a,b,c”），如为参数则留空
        $mobile = $request->phone;
        $uid = "";

        //70字内（含70字）计一条，超过70字，按67字/条计费，超过长度短信平台将会自动分割为多条发送。分割后的多条短信将按照具体占用条数计费。

        echo $ucpass->SendSms($appid,$templateid,$param,$mobile,$uid);
    }
}
