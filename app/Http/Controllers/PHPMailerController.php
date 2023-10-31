<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use PHPMailer\PHPMailer\PHPMailer;  
use PHPMailer\PHPMailer\Exception;
class PHPMailerController extends Controller
{  
    
    // =============== [ Email ] ===================
    public function email() {
        return view("email");
    }
    // ========== [ Compose Email ] ================
    public function composeEmail(Request $request) {
        require base_path("vendor/autoload.php");
        $mail = new PHPMailer();     // Passing `true` enables exceptions
 
        try {
 
            // Email server settings
            $mail->SMTPDebug = 1;
            $mail->isSMTP();
            $mail->Host = 'smretail-com.mail.protection.outlook.com'; 
            // $mail->Host='smris.smretailinc.com'; 
            $mail->SMTPAuth = false;          
            $mail->Port = 25;
 
            $mail->setFrom('smacademy_noreply@smretail.com', 'SM Academy');
            $mail->addAddress('ianray.d.duyao@smretail.com', 'Ian Ray D. Duyao');
            
 
            $mail->isHTML(true);                
 
            $mail->Subject = 'Test';
            $mail->Body    = 'Testing...';
 
            // $mail->AltBody = plain text version of email body;
         
 
            if( !$mail->send() ) {
                return back()->with("failed", "Email not sent.")->withErrors($mail->ErrorInfo);
            }
            
            else {
                return back()->with("success", "Email has been sent.");
            }
 
        } catch (Exception $e) {
             return back()->with('error',$e->getMessage());
        }
    }
}
