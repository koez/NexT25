<?php
//bucket name
$bucket = "BucketName";
if(!class_exists('S3'))
require_once('s3.php');

//AWS access info
if (!defined('awsAccessKey')) define('awsAccessKey', 'ACCESS_KEY');
if (!defined('awsSecretKey')) define('awsSecretKey', 'ACCESS_SECRET_KEY');

$s3 = new S3(awsAccessKey, awsSecretKey);
$s3->putBucket($bucket, S3::ACL_PUBLIC_READ);
?>
