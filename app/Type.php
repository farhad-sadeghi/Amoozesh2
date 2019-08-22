<?php

namespace App;
use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Type extends Model
{



     use Cachable;



    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'types';

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
    protected $fillable = ['picture', 'name', 'price', 'property1', 'property2', 'property3','sale_id'];

    public function sale()
    {
        return $this->belongsTo('App\Sale');
    }


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

    public function setPictureAttribute($value)
    {

        $this->attributes['picture'] = substr($value,7);

    }
    /**
     * [types_paginate description]
     * @param [type] $id [description]
     */
  static  public function types_paginate($id)
    {
        $carts = \Cart::getContent();
        $sale1=Sale::findOrFail($id);
        $type = $sale1->types()->paginate(2);
        return view('main.sale',compact('type','sale1','carts'));
    }

      /**
       * [show_detail description]
       * @param [type] $id [description]
       */
    static  public function show_detail($id)
      {
        $carts = \Cart::getContent();
        $type=Type::findOrFail($id);
        return view('main.detail',compact('type','carts'));
      }

      /**
       * [show_search description]
       * @param [type] $request [description]
       */
      static public function show_search($request)
      {
        $carts = \Cart::getContent();
        $type =Type::where('name','LIKE',"%{$request->search}%")->paginate(6);

        if (count($type) != 0)
        {
            return view('main.search',compact('type','carts'));

        }
        else{

            return back()->with('error','موردی یافت نشد');
        }
      }






}
