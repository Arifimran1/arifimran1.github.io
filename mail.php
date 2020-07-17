<?php
// if ( function_exists( 'mail' ) )
// {
//     echo 'mail() is available';
// }
// else
// {
//     echo 'mail() has been disabled';
// }

// $email = "lime.diamond77@gmail.com";
// $subject =  "Email Test";
// $message = "this is a mail testing email function on server";
// $headers = "From: lime.diamond77@gmail.com";

// $sendMail = mail($email, $subject, $message, $headers);
// if($sendMail)
// {
// echo "Email1 Sent Successfully";
// }
// else

// {
// echo "Mail Failed";
// }

// $msg = "<table border='0' cellpadding='0' cellspacing='0' width='689' style='background: red'>
//   <tbody>
//   <tr>
//   <td colspan='9' height='97'><div align='right'><img src=''></div></td>
//   </tr>

//   <tr>

//   <td width='140'>&nbsp;</td>

//   <td width='549' colspan='7'><div align='right'>" . date('d-M-Y') . "</div></td>

//   </tr>

//   <tr>

//   <td colspan='9'><b>Account Opening Request Received</b></td>

//   </tr>

//   <tr>

//   <td width='130'> Full name </td>

//   <td width='10'> :</td>

//   <td colspan='8' width='549'>  </td>

//   </tr>

//   <tr>

//   <td colspan='9'>&nbsp;</td>

//   </tr>
//   <tr>

//   <td width='130'> Image</td>

//   <td width='10'> :</td>

//   <td colspan='9' height='97'><div align='right'><img height='80' width='80' src= ></div></td>

//   </tr>

//   <tr>

//   <td colspan='9'>&nbsp;</td>

//   </tr>

//   </tbody>

//   </table>";

$msg = "<table border='0' cellpadding='0' cellspacing='0' width='689'>
        <tbody>

        <tr>
          <td colspan='9' height='97'><div align='left'>
            <img height='80' width='80' src=assets\images\logo\logo-black.png ></div>
          </td>
        </tr>

        <tr>
          <td colspan='9'>&nbsp;</td>
        </tr>

        <tr>
          <td width='140'>&nbsp;</td>
          <td width='549' colspan='7'>
            <div align='right'>" . date('d-M-Y') . "</div>
          </td>
        </tr>

        <tr>
          <td colspan='9'>
            <b style='font-size:30px'>Welcome to Emajine,</b>
          </td>
        </tr>

        <tr>
          <td colspan='9'>&nbsp;</td>
        </tr>

        <tr>
          <td colspan='9' style='font-size:24px'>
            Thank you for taking the time to communicate with us, know that the study of your project has been entrusted to one of our best marketing specialists.
        </tr>

        <tr>
          <td colspan='9'>&nbsp;</td>
        </tr>

        <tr>
          <td colspan='9' style='font-size:24px'>
            In accordance with our project processing policy, we will respond to your request within 24 or 48 hours. In the meantime, we may have to contact you in order to obtain further information.
        </tr>

        <tr>
          <td colspan='9'>&nbsp;</td>
        </tr>

        <tr>
          <td colspan='9' style='font-size:24px'>
            In the meantime, The Emajine team asks you to accept its best regards.
        </tr>

        <tr>
          <td colspan='9'>&nbsp;</td>
        </tr>

        <tr>
          <td colspan='9'  style='font-size:24px'>
            Emajine Team.
        </tr>

        </tbody>
        </table>";

echo $msg;

$email = "lime.diamond77@gmail.com";
$admin_email = 'emajine.co';
$subject =  "Email Test";

$headers = "MIME-Version: 1.0" . "\r\n" . "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= 'From: ' . $admin_email . "\r\n"; // From

$sendMail = mail($email, $subject, $msg, $headers);
if($sendMail)
{
echo "Email1 Sent Successfully";
}
else

{
echo "Mail Failed";
}
