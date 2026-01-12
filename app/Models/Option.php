<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Option extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'options';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $fillable = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // protected $hidden = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    // protected $casts = [];
    
    public static function getValue($option_name){
        $data = new Option();
        $data = Option::where('option_name',$option_name)->first();
        if($data){
            return $data->option_value;
        }else{
            return null;
        }
    }    
    
    public static function setValue($option_name, $value){
        $data = new Option();
        $data = Option::where('option_name',$option_name)->first();
        if($data){
            $data->option_value = $value;
            $data->save();
        }else{
            $data = Option::create([
                'option_name' => $option_name,
                'option_value' => $value,
            ]);
            
        }
        return true;
    }
}
