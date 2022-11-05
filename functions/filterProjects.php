<?php

if(!isset($_GET['filter']) &&  $page == 'home')
{
    $newArray = $projects;
    return $newArray;
}

elseif (isset($_GET['filter']) &&  $page == 'home')
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

elseif (!isset($_GET['id']) &&  $page == 'project')
{
    $specificProject = "no id";
    return $specificProject;
}

elseif (isset($_GET['id']) &&  $page == 'project')
{
    $specificProject = array_filter($projects, function($project){
        return $project["id"] === $_GET['id'];
    });
}




