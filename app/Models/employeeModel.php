<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class employeeModel extends Model
{
    protected $table = 'employee';
 
    protected $allowedFields = ['first_name','last_name','residence','employee_id','email', 'telephone'];
}
?>