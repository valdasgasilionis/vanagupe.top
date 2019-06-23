<?php

namespace App\Http\Controllers;

use Aws\S3\S3Client;  
use Aws\Exception\AwsException;
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
}
