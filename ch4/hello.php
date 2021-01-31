<?php
echo substr('Hello World', 0, 5); //Hello
//echo PHP_EOL;
echo '<br>';
echo substr('Hello World', 2); //llo World
echo '<br>';
echo substr('Hello World', -5, 2); //Wo
echo '<br>';
echo substr('ideeën', -3); //ën
echo '<br>';
echo mb_substr('ideeën', -3); //eën
?>