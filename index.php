<?php
              
if(isset($_POST))
{
$postData=$_POST;

$postDataString = implode(" ",$postData);

$postDataString = $postDataString . "\n\r";


var_dump($postDataString);



$fp = fopen('data1.txt', 'a');

fwrite($fp, $postDataString);

fclose($fp);

}
?>