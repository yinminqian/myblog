<?php


function suc($data = null)
{
    return ['success' => true, 'data' => $data];
}

function err($data = null)
{
    return ['success' => false, 'data' => $data];
}