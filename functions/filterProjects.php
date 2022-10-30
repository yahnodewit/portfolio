<?php

if(!isset($_GET['filter']))
{
    $newArray = $projects;
    return $newArray;
}
else
{   
    if($_GET['filter'] === "all"){
        $newArray = $projects;
        return $newArray;
    }

    elseif($_GET['filter'] !== "all"){
        $newArray = array_filter($projects, function($project){
            return $project["tag"] === $_GET['filter'];
        });
    }

}


