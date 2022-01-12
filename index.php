<?php
$html = "";
//Creating Variable

//Getting Json File From URL?__a=1
if(isset($_GET['url'])) {
    $json = file_get_contents($_GET['url']."?__a=1");
    //Getting the file content
    $json = json_decode($json);
    //Converting the JSON into Php object

    //Let's get the images into $html and image array to $arr... 
    $arr = $json->graphql->shortcode_media->display_resources;

    //we want array[index].src 
    //Let's do using for loop and store into $html variable

    for($i=0;$i<count($arr);$i++ ) {
        $html .= '<img src="'.$arr[$i]->src.'" > <br><br> <a href="'.$arr[$i]->src.'" download >Download</a><hr>';
    }
    //we got this Let's Use Some CSs

    //Source Code in Description
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram Photo Downloader</title>
</head>
<body>
    <h1>Instax - Instagram Downloader</h1>
    <form action="" method="get">
    <input type="text" name="url" id="">
    <button type="submit">GRAB</button>
    </form>

    <div class="image">
    <?php echo $html ; //Showing all Stored Images ?>
    </div>
    <style>
        *{
            padding : 8px;
            margin : 4px ;
            color : rgb(241, 85, 64);
        }
        a {
            text-decoration : none ;
            background : aqua ;
            display : inline-block;
            
        }
        body {
            text-align : center ;
            background: rgb(203, 238, 255);
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
        input ,button{
            background : none ;
            font-size: 35px ;
            border : 0;
            background: blanchedalmond;
            border-radius : 8px;
            outline:none ;

        }
        form {
        }
    </style>
</body>
</html>
