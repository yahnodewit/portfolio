<?php

if(!isset($_GET['id']) &&  in_array($page, ['home', 'filter']))
{
    $newArray = $projects;
    return $newArray;
}

elseif (isset($_GET['id']) &&  in_array($page, ['home', 'filter']))
{   
  
    if(empty($_GET['id']) || $_GET['id'] == 'all'){
        $newArray = $projects;
        return $newArray;
    }

    elseif($_GET['id'] !== "all"){

        $newArray = array_filter($projects, function($project){
            return $project["tag"] === $_GET['id'];
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




