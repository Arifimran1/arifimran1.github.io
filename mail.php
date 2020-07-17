<?php
 if ( function_exists( 'mail' ) )
 {
     echo 'mail() is available';
 }
 else
 {
     echo 'mail() has been disabled';
 }

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

}
