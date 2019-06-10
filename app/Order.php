<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

    public $table = 'orders';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'service',
        'created_at',
        'updated_at',
        'deleted_at',
        'description',
    ];

    const SERVICE_SELECT = [
        'basicweb'       => 'Basic web design',
        'proweb'         => 'Pro web design',
        'custweb'        => 'Custom web design',
        'basicecommerce' => 'Basic E-commerce application design',
        'proecommerce'   => 'pro E-commerce application design',
        'custecommerce'  => 'Custom E-commerce application design',
        'desktop'        => 'Desktop application',
        'mobile'         => 'Mobile application',
    ];
}
