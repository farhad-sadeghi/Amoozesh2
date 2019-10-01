<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Spatie\Activitylog\Traits\LogsActivity;

class Address extends Model
{



    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'addresses';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'family', 'state', 'city', 'addres', 'phone', 'post_code', 'email', 'text', 'product', 'number', 'price', 'status'];


    protected $hidden = [
       'transactionId',
    ];



    /**
     * Change activity log event description
     *
     * @param string $eventName
     *
     * @return string
     */
    public function getDescriptionForEvent($eventName)
    {
        return __CLASS__ . " model has been {$eventName}";
    }

    /**
       * [show_cart description]
       */
  static public function show_cart()
      {
        $c = \Cart::getSubTotal();
        $carts = \Cart::getContent();
        return view('main.cart',compact('carts','c'));
      }

      /**
       * [insert_cart description]
       * @param [type] $id [description]
       * @param [type] $request [description]
       */
    static  public function insert_cart($id, $request)
      {
        if ($request->number == 0) {
          return back()->with('error','تعداد نامعتبر');
        }
         $type=Type::findOrFail($id);
         \Cart::add($type->id, $type->name, $type->price,$request->number , array('picture' => $type->picture));
      }

      /**
       * [show_address description]
       */
    static  public function show_address()
      {
          $carts = \Cart::getContent();
          $c = \Cart::getSubTotal();
          if ($c == 0) {
            return back();
          }
        return view('main.address',compact('carts','c'));
      }

      /**
       * [insert_address description]
       * @param [type] $transactionId [description]
       */
      static public function insert_address($transactionId)
      {
          $request = request();
                  $carts = \Cart::getContent();
                  foreach ($carts as $cart) {
                    $address = new Address;
                    $fields = collect(Schema::getColumnListing('addresses'));
                    foreach ($fields as $field) {
                        if (isset($request->$field)) {
                            $address->$field = $request->$field;
                        }
                    }
                          $address->status = 0;
                          $address->product = $cart->name;
                          $address->price = $cart->price;
                          $address->number = $cart->quantity;
                          $address->transactionId=Hash::make($transactionId) ;
                          $address->save();
                  }
      }

      /**
       * [address_active description]
       * @param [type] $transaction_id [description]
       */
      static public function address_active($transaction_id)
      {
          $add=Address::where('status','==', 0)->get();
          foreach ($add as $value) {
            if ( Hash::check($transaction_id, $value->transactionId)) {
              $value->status=1;
              $value->save();
              \Cart::clear();
          }
        }
      }


        /**
         * [delete_address description]
         * @param [type] $request [description]
         */
      static  public function delete_address($request)
        {
            $carts = \Cart::getContent();
            $c = \Cart::getSubTotal();
            if ($c == 0) {
              return back();
            }
          $add=Address::where('status','==', 0)->get();
          foreach ($add as $value) {
            if ( Hash::check($request->Authority, $value->transactionId)) {
              if ($request->Status == 'NOK') {
                  $value->delete();
                  \Cart::clear();
            }
          }
        }


             return view('main.thankyou',compact('carts','c'));
        }


}
