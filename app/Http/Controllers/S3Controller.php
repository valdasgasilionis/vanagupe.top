<?php

namespace App\Http\Controllers;

use Aws\S3\S3Client;  
use Aws\Exception\AwsException;
use Aws\Common\Exception\MultipartUploadException;
use Aws\S3\MultipartUploader;
use Illuminate\Http\Request;

class S3Controller extends Controller
{
    public function list() {
        $s3Client = new S3Client([
            'profile' => 'default',
            'region' => 'eu-west-1',
            'version' => '2006-03-01'
        ]);
        
        //Listing all S3 Bucket
        $buckets = $s3Client->listBuckets();
        foreach ($buckets['Buckets'] as $bucket) {
            echo $bucket['Name']."</br>";
        }
    }
    public function store() {
        
        $bucket = 'dokumentai.vanagupe.top';
        $keyname = 'uploaded.html';
        
        $s3 = new S3Client([
         'version' => 'latest',
         'region' => 'eu-west-1'
        ]);
        try {
         // Upload data.
         $result = $s3->putObject([
         'Bucket' => $bucket,
         'Key' => $keyname,
         'Body' => 'laba diena, čia mano lietuviškai uploadinta!',
         'ACL' => 'public-read'
         ]);
         // Print the URL to the object.
         echo $result['ObjectURL'] . PHP_EOL;
        } catch (S3Exception $e) {
            echo $e->getMessage() . PHP_EOL;
        }        
    }
    public function multipart() {
        $bucket = 'dokumentai.vanagupe.top';
        $keyname = 'image.jpg';

        $s3 = new S3Client([
            'version' => 'latest',
            'region' => 'eu-west-1'
           ]);
        // Prepare the upload parameters.
        $uploader = new MultipartUploader($s3, 'Palanga.jpg', [
        'bucket' => $bucket,
        'key' => $keyname
        ]);
        // Perform the upload.
        try {
        $result = $uploader->upload();
        echo "Upload complete: {$result['ObjectURL']}" . PHP_EOL;
        } catch (MultipartUploadException $e) {
        echo $e->getMessage() . PHP_EOL;
        }

    }
}
