<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\user;
use App\Models\country;
use App\Models\country_state;
use App\Models\city;
use App\Models\purches_plan;
use Session;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'verify_token'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'translate_agent_lang'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function translate_agent()
    {
        return $this->belongsTo(TranslateUser::class,'id','user_id')->where('lang_code','en');
    }
    
    public function listing()
    {
        return $this->hasMany(Listing::class,'agent_id','id');
    }
    public function country()
    {
        return $this->belongsTo(country::class,'country_id','id');
    }
    public function country_state()
    {
        return $this->belongsTo(country_state::class,'state_id','id');
    }
    public function city()
    {
        return $this->belongsTo(city::class,'city_id','id');
    }

    // public function translate_agent_lang()
    // {
    //     $lang_code = Session::get('front_lang');
    //     return $this->belongsTo(TranslateUser::class,'id','user_id')->where('lang_code',$lang_code);
    // }
    
    // protected $appends = ['name','designation','address'];

    // public function getNameAttribute()
    // {
    //    return $this->translate_agent_lang->name; 
    // }
    // public function getDesignationAttribute()
    // {
    //    return $this->translate_agent_lang->designation; 
    // }

    // public function getAddressAttribute()
    // {
    //    return $this->translate_agent_lang->address; 
    // }
    
}
