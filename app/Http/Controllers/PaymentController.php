<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;

/** All Paypal Details class **/
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;
use Redirect;
use Session;
use URL;


use App\AttendeesModel;
use App\UsersModel;
use App\EventsModel;
use App\EventBoothsModel;
use App\VendorListByEventsModel;
use App\VendorListAlltimeModel;

class PaymentController extends Controller
{
    private $_api_context;
    public $eventsni;
    public $boothsni;
    public $paymentIDni;
    public $userni;
    public $payerID;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        /** PayPal api context **/
        $paypal_conf = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential(
            $paypal_conf['client_id'],
            $paypal_conf['secret'])
        );
        $this->_api_context->setConfig($paypal_conf['settings']);

    }
    public function index()
    {
        return view('paywithpaypal');
    }
    public function payWithpaypalcom(Request $request)
    {
        
        $this->eventsni = $request->events;
        $this->boothsni = $request->booth;
        $this->userni = $request->get('user_id');

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
            ->setDescription('Your transaction description');

        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(URL::to('statusvend')) /** Specify return URL **/
            ->setCancelUrl(URL::to('statusvend'));

        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));
        /** dd($payment->create($this->_api_context));exit; **/

        try {

            $payment->create($this->_api_context);

        } catch (\PayPal\Exception\PPConnectionException $ex) {

            if (\Config::get('app.debug')) {

                \Session::put('error', 'Connection timeout');
                return Redirect::to('/');

            } else {

                \Session::put('error', 'Some error occur, sorry for inconvenient');
                return Redirect::to('/');

            }

        }

        foreach ($payment->getLinks() as $link) {

            if ($link->getRel() == 'approval_url') {

                $redirect_url = $link->getHref();
                break;

            }

        }

        /** add payment ID to session **/
        Session::put('paypal_payment_id', $payment->getId());

        if (isset($redirect_url)) {
            
            $events = $this->eventsni;
            $user = $this->userni;
            $cred = UsersModel::where('user_id', $user)->first();
            for($counter = 0; $counter < count($events); $counter++){
                $event = EventsModel::where('event_id', $events[$counter])->first();
                
                $vendor = new VendorListByEventsModel;
                $vendor->event_id = $events[$counter];
                $vendor->event_name = $event['event_name'];
                $vendor->company_name = $cred['company_name'];
                $vendor->vendor_name = $cred['vendor_name'];
                $vendor->product_specification = $cred['product_specification'];
                $vendor->start = $event['start'];
                $vendor->end = $event['end'];
                $vendor->save();
                
                $attendee = new AttendeesModel;
                $attendee->event_id = $events[$counter];
                $attendee->user_id = $user;
                $attendee->company_name = $cred['company_name'];
                $attendee->booths ='Commercial';
                $attendee->day = 'Commercial';
                $attendee->price = 'Commercial';
                $attendee->save();

            }

            return Redirect::away($redirect_url);
        }

        \Session::put('error', 'Unknown error occurred');
        return Redirect::to('/');

    }
    public function payWithpaypal(Request $request)
    {

        $this->eventsni = $request->events;
        $this->boothsni = $request->booth;
        $this->userni = $request->get('user_id');
      

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
            ->setDescription('Your transaction description');

        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(URL::to('statusvend')) /** Specify return URL **/
            ->setCancelUrl(URL::to('statusvend'));

        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));
        /** dd($payment->create($this->_api_context));exit; **/

        try {

            $payment->create($this->_api_context);

        } catch (\PayPal\Exception\PPConnectionException $ex) {

            if (\Config::get('app.debug')) {

                \Session::put('error', 'Connection timeout');
                return Redirect::to('/');

            } else {

                \Session::put('error', 'Some error occur, sorry for inconvenient');
                return Redirect::to('/');

            }

        }

        foreach ($payment->getLinks() as $link) {

            if ($link->getRel() == 'approval_url') {

                $redirect_url = $link->getHref();
                break;

            }

        }

        /** add payment ID to session **/
        Session::put('paypal_payment_id', $payment->getId());

        if (isset($redirect_url)) {

            /** redirect to paypal **/
            $events = $this->eventsni;
            // $events = explode(",", $events);
            $booths = $this->boothsni;
            // $booths = explode(",", $booths);
            $user = $this->userni;
            for($counter = 0; $counter < count($events); $counter++){
                $event = EventsModel::where('event_id', $events[$counter])->first();
                $cred = UsersModel::where('user_id', $user)->first();
                $vendor = new VendorListByEventsModel;
                $vendor->event_id = $events[$counter];
                $vendor->event_name = $event['event_name'];
                $vendor->company_name = $cred['company_name'];
                $vendor->vendor_name = $cred['vendor_name'];
                $vendor->product_specification = $cred['product_specification'];
                $vendor->start = $event['start'];
                $vendor->end = $event['end'];
                $vendor->save();
                for($inner = 0; $inner < count($booths); $inner++){
                    $boothes = EventBoothsModel::where('eb_id', $booths[$inner])->first();
                    if($events[$counter] == $boothes->event_id){
                        $attendee = new AttendeesModel;
                        $attendee->event_id = $events[$counter];
                        $attendee->user_id = $user;
                        $attendee->company_name = $cred['company_name'];
                        $attendee->booths = $boothes['booth_space'];
                        $attendee->day = $boothes['day'];
                        $attendee->price = $boothes['booth_price'];
                        $attendee->save();
                    }
                }
            }
            return Redirect::away($redirect_url);

        }

        \Session::put('error', 'Unknown error occurred');
        return Redirect::to('/');

    }

    public function getPaymentStatus()
    {
        
        /** Get the payment ID before session clear **/
        $payment_id = Session::get('paypal_payment_id');

        /** clear the session payment ID **/
        Session::forget('paypal_payment_id');
        if (empty(Input::get('PayerID')) || empty(Input::get('token'))) {

            \Session::put('error', 'Payment failed');
            return Redirect::to('/');

        }

        $payment = Payment::get($payment_id, $this->_api_context);
        $execution = new PaymentExecution();
        $execution->setPayerId(Input::get('PayerID'));

        /**Execute the payment **/
        $result = $payment->execute($execution, $this->_api_context);

        

        // $paymentId = Input::get('paymentID');
        // $payment = Payment::get($paymentId, $apiContext);

        if ($result->getState() == 'approved') {
            
            \Session::put('success', 'Payment success');
            return Redirect::to('/form');
        }
        \Session::put('error', 'Payment failed');
        return Redirect::to('/');

    }

    public function puttodb()
    {


    }

}
