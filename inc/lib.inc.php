<?php
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

};

function DrawMenu($menu, $vertical = true){
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

};