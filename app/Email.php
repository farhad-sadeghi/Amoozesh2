<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Email extends Model
{



    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'emails';

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
    protected $fillable = ['name'];



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
     * [insert_email description]
     * @param [type] $request [description]
     */
  static  public function insert_email($request)
    {
      $contact= new Email();
      $contact->name = $request->name;
      $contact->save();
    }
}
