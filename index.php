<?php
echo "Hello!\n\r";
/**
 * @param $str
 * @return mixed - array - statistics result
 */
function string_stat($str)
{
    $res =[];
    $len = strlen($str);
    for ($i=0; $i<$len;$i++){
        if (isset($res[$str[$i]]))
            $res[$str[$i]]++;
        else $res[$str[$i]] =1;
    }
    return $res;
}

parse_str(implode('&', array_slice($argv, 1)), $_GET);
if (isset($_GET['s']) && ($_GET['s'] != '')) {
    print_r(string_stat($_GET['s']));
} else {
    echo "Input please parameter 's' in console. Ex.: \n\r";
    echo 'php -f index.php s="it is string"' . "\n\r";
}
