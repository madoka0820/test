<?php
function TriArea($bottom1, $height1)
{
    $Tri = $bottom1 * $height1 / 2;
    return $Tri;
}

function RecArea($bottom2, $height2)
{
    $Rec = $bottom2 * $height2;
    return $Rec;
}

function TraArea($upbase, $btmbase, $height3)
{
    $Tra = ($upbase + $btmbase) * $height3 / 2;
    return $Tra;
}

echo (TriArea(881, 729)) . "<br />" . (RecArea(221, 531)) . "<br / >" . (TraArea(19, 256, 764));