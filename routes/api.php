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
            'AdVuOUyT1YUhzL4w517UjiOeLte18lQyoW6SHSrCi2OZs9bi4JCjHKwklmNiutTnIsM4bylY-I4zFycZ',
            //Client ID
            'EAjAQIYaZ7anf7lBuH_MVqYfsY4Uq3IjdjiiU_AU2XpYyHj78AHSVTsqduRuDFo1Wse8RYdafLghHMM8'
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

Route::post('create-payment-commercial', function(Request $request){
    $apiContext  = new PayPal\Rest\ApiContext(
        new OAuthTokenCredential(
            'AdVuOUyT1YUhzL4w517UjiOeLte18lQyoW6SHSrCi2OZs9bi4JCjHKwklmNiutTnIsM4bylY-I4zFycZ',
            //Client ID
            'EAjAQIYaZ7anf7lBuH_MVqYfsY4Uq3IjdjiiU_AU2XpYyHj78AHSVTsqduRuDFo1Wse8RYdafLghHMM8'
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


Route::post('execute-payment-commercial', function(Request $request){

    $apiContext  = new PayPal\Rest\ApiContext(
        new OAuthTokenCredential(
            'AdVuOUyT1YUhzL4w517UjiOeLte18lQyoW6SHSrCi2OZs9bi4JCjHKwklmNiutTnIsM4bylY-I4zFycZ',
            //Client ID
            'EAjAQIYaZ7anf7lBuH_MVqYfsY4Uq3IjdjiiU_AU2XpYyHj78AHSVTsqduRuDFo1Wse8RYdafLghHMM8'
            //Secret
        )
    );
    $events = $request->events;
    $events = explode(",", $events);
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
            $vendor->vendor_name = $cred->vendor_name;
            $vendor->product_specification = $cred->product_specification;
            $vendor->start = $event->start;
            $vendor->end = $event->end;
            $vendor->save();
            
            $attendee = new AttendeesModel;
            $attendee->event_id = $events[$counter];
            $attendee->user_id = $user;
            $attendee->company_name = $cred->company_name;
            $attendee->booths ='Commercial';
            $attendee->day = 'Commercial';
            $attendee->price = 'Commercial';
            $attendee->save();

        }

    }catch (Exeception $ex) {
        echo $ex;
        exit(1);
    }
    
    // return $result;
    return $events;

});


Route::post('execute-payment', function(Request $request){

    $apiContext  = new PayPal\Rest\ApiContext(
        new OAuthTokenCredential(
            'AdVuOUyT1YUhzL4w517UjiOeLte18lQyoW6SHSrCi2OZs9bi4JCjHKwklmNiutTnIsM4bylY-I4zFycZ',
            //Client ID
            'EAjAQIYaZ7anf7lBuH_MVqYfsY4Uq3IjdjiiU_AU2XpYyHj78AHSVTsqduRuDFo1Wse8RYdafLghHMM8'
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
            $vendor->vendor_name = $cred->vendor_name;
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
