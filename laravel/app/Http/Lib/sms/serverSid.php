<?php
namespace App\Http\Lib\sms;
//载入ucpass类
//require_once('lib/Ucpaas.class.php');
use App\Http\Lib\sms\Ucpaas;

//初始化必填
//填写在开发者控制台首页上的Account Sid
$options['accountsid']='c5034915f7a962634942548a970a51f3';
//填写在开发者控制台首页上的Auth Token
$options['token']='5c6bcd2252be52300564a5c39';

//初始化 $options必填
$ucpass = new Ucpaas($options);