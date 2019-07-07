<?php

use Aws\Ses\SesClient;
use Aws\Exception\AwsException;
use Illuminate\Http\Request;
use App\rental;
use App\User;
use App\Form;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
     $rentals = rental::all();
   /*  return $rentals; */
    return view('welcome', compact('rentals'));
});
Route::get('/gallery', function() {
    return view('gallery');
});
Route::get('/privacy', function() {
    return view('privacy');
});

Route::post('/edit', function(Request $request) {
    $rental = rental::where('id', $request->id)->get();
    $rental[0]->price = $request->price;
    $rental[0]->save();
    return back();
});
Route::post('/reserved', function(Request $request) {
    $rentalitem = rental::where('id', $request->id)->get();
    
    if ($rentalitem[0]->reserved == 0) {
        $rentalitem[0]->reserved = 1;
        $rentalitem[0]->save();
    } else {
        $rentalitem[0]->reserved = 0;
        $rentalitem[0]->save();
    }  
    
    return back();
});
Route::post('/form', function(Request $request) {
  /*  return $request; */
    $form = new Form;
    $form->email = $request->email;
    $form->name = $request->name;
    $form->phone = $request->phone;
    $form->message = $request->message;

    $form->save();

    $SesClient = new SesClient([
        'profile' => 'default',
        'version' => '2010-12-01',
        'region'  => 'eu-west-1'
    ]);
    
// Replace sender@example.com with your "From" address.
// This address must be verified with Amazon SES.
$sender_email = 'info@vanagupe.top';

// Replace these sample addresses with the addresses of your recipients. If
// your account is still in the sandbox, these addresses must be verified.
$recipient_emails = ['gabute@yahoo.com','valdasgasilionis@yahoo.com'];

// Specify a configuration set. If you do not want to use a configuration
// set, comment the following variable, and the
// 'ConfigurationSetName' => $configuration_set argument below.
$subject = 'Request from vanagupe.top';
$plaintext_body = 'This email was sent with Amazon SES using the AWS SDK for PHP.' ;
$html_body =  $request->email.
              $request->phone.
              $request->name.
              $request->message;
$char_set = 'UTF-8';
try {
    $result = $SesClient->sendEmail([
        'Destination' => [
            'ToAddresses' => $recipient_emails,
        ],
        'ReplyToAddresses' => [$sender_email],
        'Source' => $sender_email,
        'Message' => [
          'Body' => [
              'Html' => [
                  'Charset' => $char_set,
                  'Data' => $html_body,
              ],
              'Text' => [
                  'Charset' => $char_set,
                  'Data' => $plaintext_body,
              ],
          ],
          'Subject' => [
              'Charset' => $char_set,
              'Data' => $subject,
          ],
        ],
        // If you aren't using a configuration set, comment or delete the
        // following line
        /* 'ConfigurationSetName' => $configuration_set, */
    ]);
    $messageId = $result['MessageId'];
    echo("Email sent! Message ID: $messageId"."\n"."<a href='/'>Vanagupe</a>");
} catch (AwsException $e) {
    // output error message if fails
    echo $e->getMessage();
    echo("The email was not sent. Error message: ".$e->getAwsErrorMessage()."\n");
    echo "\n";
}
    return back();
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


