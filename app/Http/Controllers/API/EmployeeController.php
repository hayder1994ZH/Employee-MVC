<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Index\Pagination;
use App\Repositories\EmployeeRepository;

class EmployeeController extends Controller
{
    private $EmployeeRepo;
    public function __construct(EmployeeRepository $EmployeeRepo)
    {
        $this->EmployeeRepo = $EmployeeRepo;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Pagination $request)
    {
        $request->validated();
        return $this->EmployeeRepo->getList($request->take);
    }
    
    /**
     * Display a listing of the employee salary group by city.
     *
     * @return \Illuminate\Http\Response
     */
    public function getSumSalariesGroupByCity()
    {
        return $getSumSalariesGroupByCity = $this->EmployeeRepo->getSumSalariesGroupByCity();
    }
}
