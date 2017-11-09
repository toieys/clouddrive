<?php
$access_token = 'sLMXlrDttGMx1K0ZgP20MWul9SAgPzpwhk8oY9P9GTpX6q7gMvFUXUQCsz7AzidJ8T+dmutz7IR7jQOOg2ZljxQnV4BNHE3Mn8KsaZJBZQh4fynMAzvhutPyUI72OclzuxAREYnw3CpQMq+Dy5ckBQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

?>