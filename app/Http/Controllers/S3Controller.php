<?php

namespace App\Http\Controllers;

use Aws\S3\S3Client;  
use Aws\Exception\AwsException;
use Aws\Common\Exception\MultipartUploadException;
use Aws\S3\MultipartUploader;
use Aws\CommandInterface;
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
    public function lowlevelmultipart() {
        $bucket = 'dokumentai.vanagupe.top';
        $keyname = 'archive.zip';
$filename = 'Photos.zip';
$s3 = new S3Client([
    'version' => 'latest',
    'region' => 'eu-west-1'
   ]);
$result = $s3->createMultipartUpload([
 'Bucket' => $bucket,
 'Key' => $keyname,
 'StorageClass' => 'REDUCED_REDUNDANCY',
 'ACL' => 'public-read',
 /* 'Metadata' => [
 'param1' => 'value 1',
 'param2' => 'value 2',
 'param3' => 'value 3'
 ] */
]);
$uploadId = $result['UploadId'];
// Upload the file in parts.
try {
 $file = fopen($filename, 'r');
 $partNumber = 1;
 while (!feof($file)) {
 $result = $s3->uploadPart([
 'Bucket' => $bucket,
 'Key' => $keyname,
 'UploadId' => $uploadId,
 'PartNumber' => $partNumber,
 'Body' => fread($file, 5 * 1024 * 1024),
 ]);
 $parts['Parts'][$partNumber] = [
 'PartNumber' => $partNumber,
 'ETag' => $result['ETag'],
 ]; 
 echo "Uploading part {$partNumber} of {$filename}.</br>" . PHP_EOL;
 $partNumber++;
 }
 fclose($file);
} catch (S3Exception $e) {
 $result = $s3->abortMultipartUpload([
 'Bucket' => $bucket,
 'Key' => $keyname,
 'UploadId' => $uploadId
 ]);
 echo "Upload of {$filename} failed." . PHP_EOL;
}
// Complete the multipart upload.
$result = $s3->completeMultipartUpload([
 'Bucket' => $bucket,
 'Key' => $keyname,
 'UploadId' => $uploadId,
 'MultipartUpload' => $parts,
]);
$url = $result['Location'];
echo "Uploaded {$filename} to {$url}." . PHP_EOL;
    }
    public function copy(){
        $sourceBucket = 'dokumentai.vanagupe.top';
            $sourceKeyname = 'index.html';
            $targetBucket = 'backups.vanagupe.top';
            $s3 = new S3Client([
            'version' => 'latest',
            'region' => 'eu-west-1'
            ]);
            // Copy an object.
            $s3->copyObject([
            'Bucket' => $targetBucket,
            'Key' => "{$sourceKeyname}-copy",
            'CopySource' => "{$sourceBucket}/{$sourceKeyname}",
            ]);
            // Perform a batch of CopyObject operations.
            $batch = array();
            for ($i = 1; $i <= 3; $i++) {
            $batch[] = $s3->getCommand('CopyObject', [
            'Bucket' => $targetBucket,
            'Key' => "{targetKeyname}-{$i}",
            'CopySource' => "{$sourceBucket}/{$sourceKeyname}",
            ]);
            }
            /* try {
            $results = CommandPool::batch($s3, $batch);
            foreach($results as $result) {
            if ($result instanceof ResultInterface) {
            echo "pavyko ~";
            }
            if ($result instanceof AwsException) {
            // AwsException handling here
            echo "nepavyko...:(";
            }
            }
            } catch (\Exception $e) {
            // General error handling here
            } */
    }
    public function listkeys() {
        $bucket = 'dokumentai.vanagupe.top';
        // Instantiate the client.
        $s3 = new S3Client([
        'version' => 'latest',
        'region' => 'eu-west-1'
        ]);
        // Use the high-level iterators (returns ALL of your objects).
        try {
            $results = $s3->getPaginator('ListObjects', [
            'Bucket' => $bucket
            ]);
            foreach ($results as $result) {
                echo "</br>";
            foreach ($result['Contents'] as $object) {
            echo $object['Key'] . PHP_EOL;
            echo "</br>";
            }
            }
        } catch (S3Exception $e) {
            echo $e->getMessage() . PHP_EOL;
        }
    }
    public function encrypt() {
        $bucket = 'dokumentai.vanagupe.top';
        $keyname = 'logo_encrypted.png';
        // $filepath should be an absolute path to a file on disk.
        $filepath = 'logo.png';
        $s3 = new S3Client([
        'version' => 'latest',
        'region' => 'eu-west-1'
        ]);
        // Upload a file with server-side encryption.
        $result = $s3->putObject([
        'Bucket' => $bucket,
        'Key' => $keyname,
        'SourceFile' => $filepath,
        'ServerSideEncryption' => 'AES256',
       ]);       
    }
    public function header() {
        $bucket = 'dokumentai.vanagupe.top';
        $keyname = 'logo_encrypted.png';
        $s3 = new S3Client([
            'version' => 'latest',
            'region' => 'eu-west-1'
            ]);
        // Check which server-side encryption algorithm is used.
        $result = $s3->headObject([
            'Bucket' => $bucket,
            'Key' => $keyname,
        ]);
        echo $result['ServerSideEncryption'];
    }
}
