<?php

use Illuminate\Support\Facades\Input;

// require_once('vendor/autoload.php');
use PayPal\Auth;
use PayPal\Api\Item;
use PayPal\Api\Payer;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Payment;
use PayPal\Api\ItemList;
use PayPal\Api\WebProfile;
use PayPal\Api\InputFields;
use PayPal\Api\Transaction;
use Illuminate\Http\Request;
use PayPal\Api\RedirectUrls;
use PayPal\Api\PaymentExecution;
use PayPal\Auth\OAuthTokenCredential;



//Model;
use App\AttendeesModel;
use App\UsersModel;
use App\EventsModel;
use App\EventBoothsModel;
use App\VendorListByEventsModel;
use App\VendorListAlltimeModel;

use App\URL;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('create-payment', function(Request $request){
    $apiContext  = new PayPal\Rest\ApiContext(
        new OAuthTokenCredential(
            'AR4x98VtTJ_AmZFPAV7HmW9U34N9a8-S_LTgSfOxQdjuM8EXr2YsoA49zrrmEfwPJkcO9KxtK8LiOaDC',
            //Client ID
            'EEK-qk41Gz4w0c24fr2yJtH49BJh1Y6UlWPe1Xhx0BHVJmPDGEXp-w21yvdRTkKAN4vzJsC1nLNeahsS'
            //Secret
        )
    );

    $payer = new Payer();
    $payer->setPaymentMethod('paypal');
    
    $item_1 = new Item();
    $item_1->setName('Item 1') /** item name **/
            ->setCurrency('USD')
            ->setQuantity(1)
            ->setPrice($request->get('amount')); /** unit price **/

    $item_list = new ItemList();
    $item_list->setItems(array($item_1));

    $amount = new Amount();
    $amount->setCurrency('USD')
        ->setTotal($request->get('amount'));

    $transaction = new Transaction();
    $transaction->setAmount($amount)
        ->setItemList($item_list)
        ->setDescription('Your transaction description')
        ->setInvoiceNumber(uniqid());

    $redirect_urls = new RedirectUrls();
    $redirect_urls->setReturnUrl(url('/form')) /** Specify return URL **/
        ->setCancelUrl(url('/form'));

    $payment = new Payment();
    $payment->setIntent('Sale')
        ->setPayer($payer)
        ->setRedirectUrls($redirect_urls)
        ->setTransactions(array($transaction));
    try {
        $payment->create($apiContext);
    } catch (Exception $ex){
        echo $ex;
        exit(1);
    }
    
    return $payment;

});

Route::post('execute-payment', function(Request $request){

    $apiContext  = new PayPal\Rest\ApiContext(
        new OAuthTokenCredential(
            'AR4x98VtTJ_AmZFPAV7HmW9U34N9a8-S_LTgSfOxQdjuM8EXr2YsoA49zrrmEfwPJkcO9KxtK8LiOaDC',
            //Client ID
            'EEK-qk41Gz4w0c24fr2yJtH49BJh1Y6UlWPe1Xhx0BHVJmPDGEXp-w21yvdRTkKAN4vzJsC1nLNeahsS'
            //Secret
        )
    );
    $events = $request->events;
    $events = explode(",", $events);
    $booths = $request->booths;
    $booths = explode(",", $booths);
    $user = $request->get('user');

    $paymentId = $request->paymentID;
    $payment = Payment::get($paymentId, $apiContext);

    $execution = new PaymentExecution();
    $execution->setPayerId($request->payerID);

    // $event = EventsModel::where('event_id', $events[0])->first();

    try {
        $result = $payment->execute($execution, $apiContext);
        for($counter = 0; $counter < count($events); $counter++){
            $event = EventsModel::where('event_id', $events[$counter])->first();
            $cred = UsersModel::where('user_id', $user)->first();
            $vendor = new VendorListByEventsModel;
            $vendor->event_id = $events[$counter];
            $vendor->event_name = $event->event_name;
            $vendor->company_name = $cred->company_name;
            $vendor->product_specification = $cred->product_specification;
            $vendor->start = $event->start;
            $vendor->end = $event->end;
            $vendor->save();
            for($inner = 0; $inner < count($booths); $inner++){
                $boothes = EventBoothsModel::where('eb_id', $booths[$inner])->first();
                if($events[$counter] == $boothes->event_id){
                    $attendee = new AttendeesModel;
                    $attendee->event_id = $events[$counter];
                    $attendee->user_id = $user;
                    $attendee->company_name = $cred->company_name;
                    $attendee->booths = $boothes->booth_space;
                    $attendee->day = $boothes->day;
                    $attendee->price = $boothes->booth_price;
                    $attendee->save();
                }
            }

        }
    } catch (Exeception $ex) {
        echo $ex;
        exit(1);
    }
    
    return $result;

});
