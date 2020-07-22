<?php

date_default_timezone_set('Asia/Jakarta');

if(isset($_GET['name_app']) && isset($_GET['package_name'])  && isset($_GET['nama_godev']) ){
	$messages = $_GET['messages'];
	$name_app = $_GET['name_app'];
	$package_name = $_GET['package_name'];
	$nama_godev = $_GET['nama_godev'];
	$link_sd = $_GET['link_sd'];
	$link_hd = $_GET['link_hd'];
	$link_eng = $_GET['link_eng'];
	$created = date('d-m-Y H:i:s', time());


    
   $email_notification = 'buatmovie32@gmail.com';
 
    
    //rubah email penerima di bawah ini
    $recipient =  $email_notification;
	$subject = "Messages ([$name_app])"; 
	 // header
    $header = "From: Monitoring App <info@onixstudio.me>\r\n";
    $header .= "Content-Type: text/html; charset=UTF-8\r\n";

     // message & attachment
     $email_content = '<html>
                      <head>
                        <title>Messages For '.$nama_godev.'</title>
                      </head>
                      <body>
                        <hr width="100%" >
                        <center><b>Report Video For '.$name_godev.'</b></center>
                        <hr width="100%" >
			<b>App Name : </b>'.$name_app.'<br>
                        <b>Judul Anime : <br></b>'.$messages.'<br>
                        <hr width="100%" >
                        
                        <b>Link SD: </b>'.$link_sd.'<br>
                        <b>Link HD : </b>'.$link_hd.'<br>
                        <b>Link English : </b>'.$link_eng.'<br>
                        <hr width="100%" >
         
                    
                        <center>CopyrightÂ© 2020 <b>KokoholicApp</b></center>
                      </body>
                      </html>
                    ';
    mail($recipient, $subject, $email_content, $header);
}



?>