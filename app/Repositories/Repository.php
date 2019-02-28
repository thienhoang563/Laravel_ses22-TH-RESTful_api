<?php
/**
 * Created by PhpStorm.
 * User: thienhmp
 * Date: 28/02/2019
 * Time: 08:48
 */

namespace App\Repositories;


interface Repository
{
    public function getAll();
    public function findById($id);
    public function create($data);
    public function update($data, $object);
    public function destroy($object);

}