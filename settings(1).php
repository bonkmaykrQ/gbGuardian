<?php
error_reporting(E_ALL ^ E_WARNING); 

$currentuserid = basename($_GET["_idMember"]);
$configpath = $currentuserid;

if (file_exists($configpath)) {
    $configstream = fopen ($configpath, "r");
    $mp3path = fread($configstream, 9999);
    fclose($configstream);
} else {
    $mp3path = "";
}

$configpath = $currentuserid;

if (file_exists($configpath .= "_p_saved_title")) {
    $configstream = fopen ($configpath, "r");
    $p_saved_title = fread($configstream, 9999);
    fclose($configstream);
} else {
    $p_saved_title = "";
}

$configpath = $currentuserid;

if (file_exists($configpath .= "_p_saved_subtitle")) {
    $configstream = fopen ($configpath, "r");
    $p_saved_subtitle = fread($configstream, 9999);
    fclose($configstream);
} else {
    $p_saved_subtitle = "";
}
?>

<head>
    <style>
        @font-face {
            font-family:abel;
            src:url(https://files.gamebanana.com/bitpit/abel-regular.ttf);
        }

        p, h1, h2, h3, h4 {
            min-width: 200px;
            max-width: 800px;
            width: 100%;
            
            font-family:abel;
            color:white;
        }

        input[type="text"], button {
            min-width: 200px;
            max-width: 800px;
            width: 100%;
            background: rgba(0,0,70,0.2);
            backdrop-filter: blur(1px);
            color: white;
            border-radius: 10px;
            border: 1px solid rgb(95, 95, 190);
            font-family: abel;
            transition-duration: 0.2s;
        }

        input:hover, button:hover {
            background: rgba(95, 95, 190,0.8);
            backdrop-filter: blur(3px);
            color: white;
            border-radius: 17px;
            border: 1px solid rgb(125, 125, 250);
        }

        input:focus, button:active {
            background:rgba(130,130,200,0.5);
            backdrop-filter:blur(1px);
            color:white;
            border-radius:10px;
            border:3px solid rgb(75, 75, 255);
        }

        input[type="text"] {
            padding:5px 5px 5px 5px;
            height:30px;
        }

        button {
            height:50px;
            font-size:36px;
        }
    </style>
</head>
<body id="body" style="background:url(https://files.gamebanana.com/bitpit/3iqw2l.gif);color:white;background-size:380px;font-family:abel;"> <!--#000046-->
    
<div class="Content bmAudioSettings">
    <h1 style="font-size:32px;text-shadow:0px 1px 0px #009900, 0px 0.5px 0px #009900, 0px 0.25px 0px #009900, 0px 0.75px 0px #009900, 0px 1px 3px black, 0px 1px 3px black;color:#00ff00;">bonkmaykr's Profile Guardians</h1>
    
    <form method="POST" action="https://gbaudioplayer.000webhostapp.com/gbGuardian/bmImageSubmit.php">
    <input type="text" name="UserID" value="<?php echo $currentuserid;?>" height="0px" width="0px" style="pointer-events:none;opacity:0;color:transparent;">
        
        <label for="mp3Input"><h3>File URL</h3></label>
        <input type="text" name="mp3Input" placeholder="pickle.png" width="100%" value="<?php echo $mp3path;?>"><br>
        
        <label for="title"><h3>Title</h3></label>
        <input type="text" name="title" placeholder="Placeholder Pickle" width="100%" value="<?php echo $p_saved_title;?>"><br>
        
        <label for="subtitle"><h3>Subtitle</h3></label>
        <input type="text" name="subtitle" placeholder="pickle is lonely :(" width="100%" value="<?php echo $p_saved_subtitle;?>"><br>
        
        <button type="submit" class="button" value="Submit" style="margin-top:20px;">Submit</button>
    </form>
</div>

</body>