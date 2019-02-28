<?php
/**
 * Created by PhpStorm.
 * User: thienhmp
 * Date: 28/02/2019
 * Time: 09:21
 */

namespace App\Services;


interface CustomerService
{
    public function getAll();
    public function findById($id);
    public function create($request);
    public function update($request, $id);
    public function destroy($id);

}