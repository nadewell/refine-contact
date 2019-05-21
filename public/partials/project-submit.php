<?php

global $wpdb;
$project_table = $wpdb->prefix . "project";

$project_type = $_POST['project_type'];
$project_scope = $_POST['project_scope'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$company = $_POST['company'];
$message = $_POST['message'];
$timestamp = current_time( 'timestamp' );
// echo $timestamp;
$insert = $wpdb->insert( $project_table, array(
    'id'                => '', 
    'project_type'      => $project_type,
    'project_scope'     => $project_scope,
    'name'              => $name,
    'email'             => $email,
    'phone'             => $phone,
    'company'           => $company,
    'message'           => $message,
    'timestamp'		    => $timestamp
    ),
    array( '%d', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s' ) 
);
if($insert){
    $flag['data'] = "data submitted";
}else{
    $flag['data'] = "data not submitted";
}
echo $flag['data'];
/*
$email_content = '';
$email_content .= 'Name: '.$name.'<br>';
$email_content .= 'Email: '.$email.'<br>';
$email_content .= 'Phone: '.$phone.'<br>';
$email_content .= 'Company: '.$company.'<br>';
$email_content .= 'Prject Type: '.$project_type.'<br>';
$email_content .= 'Project Scope: '.$project_scope.'<br>';
$email_content .= 'Message: '.$message.'<br>';


$email=$_POST['email_data'];
$email_to= 'bharatk.cirklestudio@gmail.com'; // to email
$email_from= 'nishant.cirklestudio@gmail.com'; // from email
$subject= 'Project Inquiry'; // subject
$additional_header=$email['additional_header']; //additional header
$content_html= true; //content type
// $message=$_POST['email_format']; //email format
$message=stripslashes($email_content); //message


if($content_html== true){
	$content_type="Content-Type: text/html\n";
}else{
    $content_type="Content-Type: text/plain\n";
}
$email_to=explode(",",$email_to);
if(!empty($email_to)){
	foreach ($email_to as $email) {
		$headers[]="From:".$email_from."\n";
		$headers[]=$additional_header."\n";
		$headers[]=$content_type."\n";
		if(wp_mail($email, $subject, $message, $headers)){
      		$mailsend="mailsend";
		}else{
		     $mailsend="error"; 
		}
	}
}else{
	echo "error";
}

if($mailsend=="mailsend"){ 
	echo "mailsend";
}else{
	echo "error";
}

if($flag['data'] == 'success'){
    echo "data is entered";
}else{
    echo "data is not entered";
}
*/