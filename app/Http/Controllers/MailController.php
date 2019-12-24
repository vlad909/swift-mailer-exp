<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function send(Request $request)
    {

        $transport = (new \Swift_SmtpTransport('smtp.mail.ru', 465, 'ssl'))->setUsername('vlad-nighthunter@mail.ru')
            ->setPassword('');

        $mailer = new \Swift_Mailer($transport);

        $message = (new \Swift_Message('Wonderfull subject'))->setFrom(['vlad-nighthunter@mail.ru' => 'Vladik'])->setTo('v389116470@yandex.ru')
            ->setBody('swift mailer say hallo');

        $result = $mailer->send($message);
        return response()->json($result);
    }
}
