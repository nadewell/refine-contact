<?php

global $wpdb;
$job_table = $wpdb->prefix . "job";

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$experience = $_POST['experience'];
$file = "CV-".time()."-".$_FILES['file']['name'];
$description = $_POST['description'];
$job_type = $_POST['job_type'];
$timestamp = current_time( 'timestamp' );
$job_status = 0;

// print_r($_POST);
// var_dump($_FILES['file']);

$_FILES["file1"]["name"] = "CV-".time()."-".$_FILES["file"]["name"];
$_FILES["file1"]["type"] = $_FILES["file"]["type"];
$_FILES["file1"]["tmp_name"] = $_FILES["file"]["tmp_name"];
$_FILES["file1"]["error"] = $_FILES["file"]["error"];
$_FILES["file1"]["size"] = $_FILES["file"]["size"];

$upload = wp_upload_bits($_FILES["file1"]["name"], null, file_get_contents($_FILES["file1"]["tmp_name"]));
$insert = $wpdb->insert( $job_table, array(
    'id'           	=> '', 
    'name'      	=> $name,
    'email'     	=> $email,
    'phone'         => $phone,
    'experience'    => $experience,
    'CV'            => $file,
	'job_type'      => $job_type,
	'status'      => $job_status,
	'timestamp'		=> $timestamp
    ),
    array( '%d', '%s', '%s', '%s', '%s', '%s', '%s', '%s' ) 
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
*/