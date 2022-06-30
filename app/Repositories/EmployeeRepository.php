<?php
namespace App\Repositories;

use App\Models\Employee;
use Illuminate\Support\Facades\DB;

class EmployeeRepository extends BaseRepository{
    public function __construct()
    {
        parent::__construct(new Employee());
    }
    public function getSumSalariesGroupByCity()
    {
        return DB::select('SELECT city, SUM(salary) AS total_salary, 
        GROUP_CONCAT(concat(first_name, " ", last_name)) AS full_name 
        FROM employees  Group By city');
    }
}
