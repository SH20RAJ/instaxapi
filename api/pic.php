<?php
echo "Hlw world ";

if(isset($_GET['video'])) {
    echo $url = "https://www.instagram.com/reel/".$_GET['video']."/?__a=1";
    echo "<br> ...";
    $json = file_get_contents($url);
     //Getting the file content
     echo $json = json_decode($json);
     //Converting the JSON into Php object
     //Let's get the images into $html and image array to $arr... 
      echo $arr = $json->graphql->shortcode_media->video_url;
      print("<br>".$arr);
     header("Location: ".$arr."");
 }
?>
