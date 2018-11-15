<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    //
    protected $table='testimonials';

    protected $fillable=['fullname','description','status','photo_path','sort_order'];

}
