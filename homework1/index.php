<?php
echo "ha-ha. It is new branch!!!\n\r";
/**
 * @param $str
 * @return mixed - array - statistics result
 */
function string_stat($str)
{
    $result = [];
    $len = strlen($str);
    for ($i = 0; $i < $len; $i++) {
        if (isset($result[$str[$i]]))
            $result[$str[$i]]++;// md5 better
        else $result[$str[$i]] = 1;
    }
    return $result;
}

parse_str(implode('&', array_slice($argv, 1)), $_GET);
if (isset($_GET['s']) && ($_GET['s'] != '')) {
    print_r(string_stat($_GET['s']));
} else {
    echo "Input please not empty parameter 's' in command line . Ex.: \n\r";
    echo 'php -f index.php s="it is string"' . "\n\r";
}
