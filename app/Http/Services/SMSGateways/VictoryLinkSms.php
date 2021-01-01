<?php


namespace App\Http\Services\SMSGateways;


class VictoryLinkSms
{
public $client;

public function __construct()
{
    if(!$this->client){
        $this->client= new Client();
    }
}

    public function sendSms($phone, $message,$language = 'en' ,$model=null)
    {

        //Preparing post parameters
        $params = [
            'username' => config(''),
            'password' => config(''),
            'SMSText' => $message,
            'SMSLang' => $language == 'ar' ? 'A' : 'E',
            'SMSSender' => config('sms.'),
            'SMSReceiver' => $phone,
        ];
        try {
            $smsURL = "http://portal.bulksmsnigeria.net/api/";
            $response = $this->client->post($smsURL, ['from_prams' => $params]);
            $content = $response->getBody();
            $xml = (array)simplexml_load_string($content);

            if ($xml[0] == '0') {
                return true;
            } else {
                info("victoryLink error status!");
                return false;
            }

        } catch (\Exception $exception) {
            info("victoryLink has been to send sms to $phone but operation failed !");

        }
    }



    public function setClint(Clint $clint)
    {
        $this->client=$clint;

        return $this;


    }
}
