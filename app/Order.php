<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [ 'id',
                            'id_user',
                            'forename',
                            'name',
                            'email',
                            'tel_number',
                            'payments_methods',
                            'products',
                            'amount',
                            'status',
                            'updated_at',
                            'created_at'
                            ];
}