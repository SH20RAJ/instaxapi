<?php
if(isset($_GET['video'])) {
   $json = file_get_contents($_GET['video']."?__a=1");
    //Getting the file content
    $json = json_decode($json);
    //Converting the JSON into Php object

    //Let's get the images into $html and image array to $arr... 
    $arr = $json->graphql->shortcode_media->video_url;
    echo $arr;
    header("Location: ".$arr."");
}
?>
