<?php
// use this instagram access token generator http://instagram.pixelunion.net/
$access_token="1805870488.1677ed0.8db77430402b48c9a755a8c4ea990299";
$photo_count=3;
     
$json_link="https://api.instagram.com/v1/users/self/media/recent/?";
$json_link.="access_token={$access_token}&count={$photo_count}";
$json = file_get_contents($json_link);
print_r($json);
?>