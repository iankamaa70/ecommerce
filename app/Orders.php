<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $fillable=[
        'billingfirstname',
        'billinglastname',
        'billingaddress1',
        'billingaddress2',
        'country',
        'billingtown',
        'billingstate',
        'billingpostcode',
        'billingemail',
        'billingmobile',

        'shippingfirstname',
        'shippinglastname',
        'company',
        'shippingaddress1',
        'shippingaddress2',
        'shippingtown',
        'shippingstate',
        'shippingpostcode',
        'shippingemail',
        'shippingmobile',
        'receipt_url',
    ];
}
