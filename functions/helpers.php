<?php
function checkNav($current, $page)
{
    return $page == $current ? 'current' : '';
}

function checkFilter($currentfilter, $filter)
{
    return $filter === $currentfilter ? 'current-filter' : '';
}

function __($key, $res)
{
    if(!empty($res[$key]))
    {
        return $res[$key];
    }

    return $key;
}