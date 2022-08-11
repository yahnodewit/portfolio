<?php
include('./classes/DataBase.php');
include('./classes/Projects.php');

if(isset($_GET['page'])) $page = $_GET['page'];
if(!isset($_GET['page'])) $page = 'home';

switch($page){
    case 'project':
    {
        //$titleBlog = $_GET['blog'];
        include('./pages/project.php');
    }break;

    default:
    {
        $projects = Projects::get();
        include('./pages/home.php');
    }
}