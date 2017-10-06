<?php
if(isset($_POST['SUBMIT'])){
		$to = 'sales@rankingbyseo.com';


		$sub = "Google Maps Inquiry";


	$from = trim($_POST['email']);



		$comments = trim($_POST['query']);

		

		$services = trim($_POST['phone']);


                
		$uname = trim($_POST['name']);


		$msg = "<table align='center' border='0' cellpadding='0' cellspacing='0' width='550' >



					<tr>



						<td><font style='font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;color:#000000'></font></td>



					</tr>



					<tr><td height='10'></td></tr>



					<tr>



						<td><font style='font-family:Arial, Helvetica, sans-serif;font-size:12;'>Name : ".$uname."</font></td>



					</tr>



					<tr><td height='10'></td></tr>

		



					<tr>



						<td><font style='font-family:Arial, Helvetica, sans-serif;font-size:12;'>Phone : ".$phone."</font></td>



					</tr> 

					

					<tr><td height='10'></td></tr>

					

					<tr>



						<td><font style='font-family:Arial, Helvetica, sans-serif;font-size:12;'>Service : ".$services."</font></td>



					</tr>

                                        <tr><td height='10'></td></tr>

					

					<tr>



						<td><font style='font-family:Arial, Helvetica, sans-serif;font-size:12;'>From Page: ".$frompage."</font></td>



					</tr>



					<tr><td height='10'></td></tr>



					<tr>



						<td><font style='font-family:Arial, Helvetica, sans-serif;font-size:12;'>Comments : ".$comments."</font></td>



					</tr>


                                        <tr><td height='10'></td></tr>
				
                                        <tr>



						<td><font style='font-family:Arial, Helvetica, sans-serif;font-size:12;'>IP Address : ".$_SERVER['REMOTE_ADDR']."</font></td>



					</tr>



				</table>";



		



		$headers = 	'MIME-Version: 1.0' . "\r\n" . 



						'Content-type: text/html; charset=iso-8859-1' . "\r\n" . 

                                              

						'From: ' . $uname . ' <' . $from . ">\r\n" .



						'Reply-To: ' . $from . "\r\n" .

                                                

						'X-Mailer: PHP/' . phpversion(); " \r\n";



		mail($to, $sub, $msg, $headers);



		echo "<script language=\"javascript\">" . PHP_EOL;



		echo "document.location.href = 'thank-you.html';" . PHP_EOL;



		echo "</script>" . PHP_EOL;




}



?>