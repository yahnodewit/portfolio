<?php

if(!isset($_GET['filter']))
{
    echo "all";
}
else
{
    $getparam = $_GET['filter'];
    $newArray = array_filter($hompage, function($project){
        return ($project['tag'] !== $getparam)? true : false;
        //return $project;
    });

    var_dump($newArray);

}


