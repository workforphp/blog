<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gregwar\Captcha\CaptchaBuilder;
use Mews\Captcha\Captcha;

class UserController extends Controller
{
    //
    public function capter(Request $request)
    {
        if ($request->getMethod() == 'POST')
        {
            return Captcha::create();
//            $rules = ['captcha' => 'required|captcha'];
//            $validator = Validator::make(Input::all(), $rules);
//            dd($validator);
//            if ($validator->fails())
//            {
//                echo '<p style="color: #ff0000;">Incorrect!</p>';
//            }
//            else
//            {
//                echo '<p style="color: #00ff30;">Matched :)</p>';
//            }
        }

//        $form = '<form method="post" action="captcha-test">';
//        $form .= '<input type="hidden" name="_token" value="' . csrf_token() . '">';
//        $form .= '<p>' . captcha_img() . '</p>';
//        $form .= '<p><input type="text" name="captcha"></p>';
//        $form .= '<p><button type="submit" name="check">Check</button></p>';
//        $form .= '</form>';
//        return $form;
        $builder = new CaptchaBuilder;
        $builder->build();
        cache(['verifycode' => $builder->getPhrase()],2);
        return view('Admin/capter',['name' => '张三']);
    }

    public function getValid(Request $request, Captcha $captcha){
        $this->validate($request,[
            'valid' => 'required|captcha'
        ]);
        dd(13);
//        if($request->isMethod('POST')){
//            $valid = $request->input('valid');
//            dd(cache('verifycode'));
////            dd($valid);
//        }
    }

}
