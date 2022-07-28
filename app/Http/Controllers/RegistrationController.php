<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegistrationRequest as RequestsRegistrationRequest;

class RegistrationController extends Controller
{
    /* OAuth2 : واگذاری اعتبار یا اطلاعات کاربر به هاست و شخص ثالث برای دسترسی به اکانت یوزر 
    OAuth2 --> این خدمات رو برای وب و اپیلیکیشن های دسکتاپ و دستگاه های موبایل فراهم میکنه 
    */


    /************ روش های استفاده از authenticatin  **************/
    // passport : به دلیل پیچیدگیش کمتر مورد استفاده قرار میگیره اما یه روش بسیار عالی و کامل برای authentication هست
    // Sacntum : لاراول به جای روش پیچیده قبل اومد به روش ساده تر رو پیشنهاد داد که میتونیم ازش برای اعتبارسنجی استفاده کنیم


    public function create()
    {

    }

    public function store(RequestsRegistrationRequest $request)
    {
        
    }
}
