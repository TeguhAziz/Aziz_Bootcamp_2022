<?php
namespace App\Models;

use Crocodic\LaravelModel\Core\Model;

class CartsModel extends Model
{
    
	public $id;
	public $customer_id;
	public $products_id;
	public $created_at;
	public $updated_at;

}