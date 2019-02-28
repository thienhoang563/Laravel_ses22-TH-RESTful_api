<?php
/**
 * Created by PhpStorm.
 * User: thienhmp
 * Date: 28/02/2019
 * Time: 08:47
 */

namespace App\Repositories\Impl;


use App\Customer;
use App\Repositories\CustomerRepository;
use App\Repositories\Eloquent\EloquentRepository;

class CustomerRepositoryImpl extends EloquentRepository implements CustomerRepository
{
    public function getModel()
    {
        $model = Customer::class;
        return $model;
    }

}