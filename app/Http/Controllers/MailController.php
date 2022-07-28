<?php

namespace App\Http\Controllers;

use App\Mail\OrderShipped;
use App\User;
use Facade\Ignition\QueryRecorder\Query;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

require_once '../vendor/autoload.php';


class MailController extends Controller
{
    public function mail($id)
    {

        $user = DB::table('users')->where('id',$id)->get(); 
        foreach($user as $item);
        $mail = new PHPMailer(true);

    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow-self-signed' =>true
        )
    );

    $name = "mahdi";
    $email = $item->email;
    $subject = "send mail testing";
    $verify = $item->rand;
    $message = "this is message for test email ";

    //Server settings
    $mail->SMTPDebug = 2;                //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'mahankashef78@gmail.com';                     //SMTP username
    $mail->Password   = 'MahdI28311032';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 465;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('mahankashef78@gmail.com', 'EchoCast');
    $mail->addAddress($email, $name);     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    =  view('mails.mail')->with(['verify'=>$verify]);

    $check = $mail->send();
    
    if($check)
    {
        return redirect('/admin/user');
    }


    }

    public function check($verify)
    {
        if(User::query()->where('rand',$verify)->get())
        {
            DB::table('users')->where('rand',$verify)->update(['email_verified'=>'verified']);
            return redirect('/admin/user');
        }
        else{
            return redirect('/admin/user');
        }
        
    }

}
