<?php
function superhero(array $arr)
{
    $res=array();
    foreach($arr as $str)
    {
        $num=array();
        for($i=1; $i<=strlen($str); $i++)
        {
            $num[]=$i;
        }
        //print_r($num);
        $res[$str]=$num;
        

    }
    return $res;
}

// Example usage:
$superheroes = ["spider-man", "super-man", "iron-man"];
//print_r($superheroes);
$res=superhero($superheroes);
print_r($res);
?>