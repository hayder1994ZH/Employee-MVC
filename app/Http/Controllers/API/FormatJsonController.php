<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\FormatJson\Create;
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
            return response()->json(['error' => 'Invalid JSON'], Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        return $this->FormatJsonRepo->formatjson($jsonObject);
    }

}
