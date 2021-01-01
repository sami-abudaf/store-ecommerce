<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\VerificationRequest;
use App\Http\Services\VerificationServices;
use Illuminate\Http\Request;


class VerificationCodeController extends Controller
{
    public $VerificationService;
    public function __construct(VerificationServices $VerificationService)
    {
        $this->VerificationService = $VerificationService;
    }

    public function verify(VerificationRequest $request)
    {
       $check =  $this->VerificationService -> checkOPTCode($request ->code);

        if(!$check){// code not correct

          //  return 'you enter wrong code ';
            return redirect()->route('get.verifiction.from')->withErrors(['code'=> 'الرجاء ادخل كود التحقق']);
        }else{// verifiction code correct
        $this->VerificationService->removeTOPCode($request->code);
            return redirect()->route('home');
        }
    }
    public function getVerifyPage(){
        return view('auth.verification');
    }
}
