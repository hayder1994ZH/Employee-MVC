<?php
namespace App\Repositories;

class FormatJsonRepository{
    //Repository for FormatJson
    public function formatjson($object){
        $newObject = [];
        $count = 0;
        $json = [];
        foreach($object as $index){
            foreach($index as $key => $value){
                if(!array_key_exists($value, $newObject)){
                    $newObject[$value] = $count;
                    $json[][$value] = [$key];
                    $count++;
                }else{
                    $json[$newObject[$value]][$value][] = $key;
                }
            }
        }
        return $json;
    }
}
