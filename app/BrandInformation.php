<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BrandInformation extends Model
{

    protected $table ='brand_informations';
    protected $fillable = [
        'user_id','brand_name','brand_url','first_name','last_name','address_line1','address_line2','country','state_or_province'
    ];

    public $timestamps = false;
}
