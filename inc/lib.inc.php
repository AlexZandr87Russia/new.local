<?php
function Myerror($no, $msg, $file, $line) {
    $dt = date("d-m-Y H:i:s");
    $str = "[$dt] - $msg in $file:$line\n";
switch ($no) {
    case E_USER_ERROR:
    case E_USER_WARNING:
    case E_USER_NOTICE:
        echo $msg;
   // default: echo $msg;
}
    error_log("$str\n", 3, "error.log");
}

function mbsize(){
$size = ini_get("post_max_size");
$letter = strtoupper($size[strlen($size)-1]);
$size = (int)$size;
switch (strtoupper($letter)){
    case "G": $size *= 1024;
    case "M": $size *= 1024;
    case "K": $size *= 1024;
    default: $size = (int)$size;
    echo $size;
}
}


function drawTable($cols, $rows, $color)
{
    static $cnt = 0;
    $cnt++;
    echo "<table border='1' >\n";
    for ($i = 1; $i <= $cols; $i++) {
        echo "\t<tr>\n";
        for ($j = 1; $j <= $rows; $j++) {
            if ($j == 1 or $i == 1)
                echo "\t<th align='center' style='background-color: $color;'>" . $j * $i . "</th>\n";
            else echo "\t<td>" . $i * $j . "</td>\n";
        }
        echo "\t</tr>\n";
    }
    echo "</table>\n";
    echo "<br>$cnt копия таблицы.<br>";

}
function DrawMenu($menu, $vertical = true){
    if (!is_array($menu))
        return false;
    $style="";
    if (!$vertical)
        $style =" style = 'display: inline; margin-right: 15px;'";
    echo  "<ul>\n";
    foreach ($menu as $item) {
        echo "\t<li$style>\n";
        echo "\t\t<a href='{$item['href']}'>{$item['link']}</a>\n";
        echo "\t</li>\n";

    }
    echo  "</ul>\n";
    return true;
}