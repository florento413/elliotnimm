<?php 
if($mailbox['mode'] == true){
    $headers .= "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: ".$mailbox['from_name']." <admin@".$server_domain."> \r\n";
    $headers .= "MIME-Version: 1.0 \r\n";
    $headers .= "Content-Transfer-Encoding: 8bit \r\n";
    mail($mailbox['mail_to'], $ip_address, $text, $headers);
}
?>