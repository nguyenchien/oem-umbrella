<?php

if(isset($_POST))
{
    require_once "sendmail.php";
    header('Content-Type: application/json; charset=utf-8');
    define('SECRET_KEY', '6Lc5d0IfAAAAAAD8mxnbIgIiWkazA_JoC7JyIUyQ');

    // This is Google API url where we pass the API secret key to validate the user request.
    $google_recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $set_recaptcha_response = $_POST['g-recaptcha-response'];
    // Make the request and capture the response by making below request.
    $get_recaptcha_response = file_get_contents($google_recaptcha_url . '?secret=' . SECRET_KEY . '&response=' . $set_recaptcha_response);

    $get_recaptcha_response = json_decode($get_recaptcha_response);
    $success_msg="";
    $err_msg="";
    // Set the Google recaptcha spam score here and based the score, take your action
    if ($get_recaptcha_response->success == true && $get_recaptcha_response->score >= 0.5 && $get_recaptcha_response->action == 'submit') {

        // ============= Begin send email =============
        $mail_product = 'produce-ml@wagokoro.co.jp';
        $name_product= '傘のOEM製造・製作なら 株式会社和心へ';
        $subject = 'お問い合わせフォーム - 傘のOEM製造・製作なら 株式会社和心へ';

        $name_client = !empty($_POST['your-name']) ? $_POST['your-name'] : '';
        $mail_client = !empty($_POST['your-email']) ? $_POST['your-email'] : '';
        $tel_client = !empty($_POST['tel']) ? $_POST['tel'] : '';
        $company_client = !empty($_POST['your-company']) ? $_POST['your-company'] : '';
        $message = !empty($_POST['message']) ? $_POST['message'] : '';

        $content = "<p>会社名: $company_client </p>
                    <p>ご担当者様: $name_client </p>
                    <p>電話番号: $tel_client</p>
                    <p>メール: $mail_client</p>
                    <p>その他ご要望など:</p>
                    <p>$message</p>
                    </br>
                    <p>--</p>
                    <p>このメールは 傘のOEM製造・製作なら 株式会社和心へ (https://oem-umbrella.com/) のお問い合わせフォームから送信されました</p>
                    ";

        if(!empty($mail_client) && !empty($name_client) && !empty($tel_client)){

            try {
                send($mail_product, $mail_client, $subject, $content);
            } catch (Exception $e) {
                echo 'Caught exception: ',  $e->getMessage(), "\n";
            }
        }
        // =========== End send email ===========
    } else {
        $err_msg = "Something went wrong. Please try again after sometime.";
    }

    // Get the response and pass it into your ajax as a response.
    $return_msg = array(
        'error'     =>  $err_msg,
        'success'   =>  $success_msg
    );
    echo json_encode($return_msg);
}