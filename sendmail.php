<?php

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


function resizeImage($resourceType, $imageWidth, $imageHeight){
    $percent = 0.5;
    $resizeWidth = $imageWidth*$percent;
    $resizeHeight = $imageHeight*$percent;
    $imageLayer = imagecreatetruecolor($resizeWidth, $resizeHeight);
    imagecopyresampled($imageLayer, $resourceType, 0, 0, 0, 0, $resizeWidth, $resizeHeight, $imageWidth, $imageHeight);

    return $imageLayer;
}

function send($mail_product, $mail_client, $subject, $content){

    $PHPMailer = new PHPMailer(true);

    try {
        $PHPMailer->SMTPDebug = 0;
        $PHPMailer->isSMTP();
        $PHPMailer->Host = 'smtp.gmail.com';
        $PHPMailer->SMTPAuth = true;

        $PHPMailer->Username = 'waginfo@silver-oem.com';
        $PHPMailer->Password = 'qR5IcYY9';

        $PHPMailer->SMTPSecure = 'tls';
        $PHPMailer->Port = 587;

        $PHPMailer->CharSet  = 'UTF-8';

        $PHPMailer->setFrom('produce-ml@wagokoro.co.jp', '傘のOEM製造・製作なら 株式会社和心へ');

        $PHPMailer->addAddress($mail_client);
        $PHPMailer->addAddress($mail_product);

        $PHPMailer->isHTML(true);
        $PHPMailer->Subject = $subject;
        $PHPMailer->Body = $content;

        if (isset($_FILES['fileToUpload']) && $_FILES['fileToUpload']['error'] == UPLOAD_ERR_OK) {
            if($_FILES['fileToUpload']['size'] > 1048576){
                $fileTmpName = $_FILES['fileToUpload']['tmp_name'];

                $sourceProperties = getimagesize($fileTmpName);
                $resizeFileName = time();
                $uploadPath = "upload/";
                $fileExt = pathinfo($_FILES['fileToUpload']['name'], PATHINFO_EXTENSION);
                $uploadImageType = $sourceProperties[2];
                $sourceImageWidth = $sourceProperties[0];
                $sourceImageHeight = $sourceProperties[1];

                // Resize Image
                switch ($uploadImageType){
                    case IMAGETYPE_JPEG:
                        $resourceType = imagecreatefromjpeg($fileTmpName);
                        $imageLayer = resizeImage($resourceType, $sourceImageWidth, $sourceImageHeight);
                        imagejpeg($imageLayer, $uploadPath."thump_".$resizeFileName.'.'.$fileExt);
                        break;

                    case IMAGETYPE_GIF:
                        $resourceType = imagecreatefromgif($fileTmpName);
                        $imageLayer = resizeImage($resourceType, $sourceImageWidth, $sourceImageHeight);
                        imagegif($imageLayer, $uploadPath."thump_".$resizeFileName.'.'.$fileExt);
                        break;

                    case IMAGETYPE_PNG:
                        $resourceType = imagecreatefrompng($fileTmpName);
                        $imageLayer = resizeImage($resourceType, $sourceImageWidth, $sourceImageHeight);
                        imagepng($imageLayer, $uploadPath."thump_".$resizeFileName.'.'.$fileExt);
                        break;

                    default:
                        echo"Invalid Image type.";
                        exit;
                        break;
                }

                // Add Attachment
                $PHPMailer->AddAttachment($uploadPath."thump_".$resizeFileName.'.'.$fileExt, "thump_".$resizeFileName.'.'.$fileExt);
            }else{
                $PHPMailer->AddAttachment($_FILES['fileToUpload']['tmp_name'], $_FILES['fileToUpload']['name']);
            }
        }

        $PHPMailer->send();
    } catch (Exception $exception) {
        echo $PHPMailer->ErrorInfo;
    }
}

?>