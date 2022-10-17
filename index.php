<?php
$r='/\b\w+(?=:)\b/';
$s="I like fruit: apples, oranges and pears. I like vegetables: cucumbers, tomatoes, eggplants. I like berries: strawberry, bluberry and cranberry.";
if (preg_match_all($r, $s, $arr))
print_r($arr);
