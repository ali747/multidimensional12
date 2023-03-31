<?php
function findmaxsum(array $a)
{
    $sum = 0;
    $s = 0;
    $n = count($a);
    $b = $a;
    sort($b);
    if ($b[$n - 1] < 0) {
        return $b[$n - 1];
    }
    for ($i = 0; $i <= $n; $i++) {
        $s += $a[$i];
        echo $s;
        if ($s < 0) {
            $s = 0;
        }
        $sum = max($sum, $s);
    }
    echo "<br>";
    return $sum;
}
$a = array(-2, 1, -3, 4, -1, 2, 1, -5, 4);
echo "the max sum of the contigious array" . findmaxsum($a);
return 1;
