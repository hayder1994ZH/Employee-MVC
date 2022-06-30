<?php

namespace App\Http\Controllers;

use App\Models\FormatJson;
use App\Http\Requests\FormatJson\Create;
use App\Http\Requests\FormatJson\Update;
use App\Repositories\FormatJsonRepository;
use Symfony\Component\HttpFoundation\Response;

class FormatJsonController extends Controller
{
    private $FormatJsonRepo;
    public function __construct(FormatJsonRepository $FormatJsonRepo)
    {
        $this->FormatJsonRepo = $FormatJsonRepo;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($objects = [], $stringObject = '')
    { 
        return view('pages.formatjson', compact('objects', 'stringObject'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Create $request)
    {
        $text = $request->validated();
        $jsonObject = json_decode($text['text']);
        if(!$jsonObject){
            return redirect()->back()->withErrors(['error' => 'Invalid JSON']);
        }
        $objects = $this->FormatJsonRepo->formatjson($jsonObject);
        $stringObject = json_encode($objects);
        return  $this->index($objects, $stringObject);
    }

}
