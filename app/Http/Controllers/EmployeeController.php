<?php

namespace App\Http\Controllers;

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
        $employees = $this->EmployeeRepo->getList($request->take);
        $getSumSalariesGroupByCity = $this->EmployeeRepo->getSumSalariesGroupByCity();
        return view('pages.employee', compact('employees', 'getSumSalariesGroupByCity'));
    }
}
