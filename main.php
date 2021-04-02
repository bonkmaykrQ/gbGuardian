<?php
error_reporting(E_ALL ^ E_WARNING); 
$currentuserid = basename($_GET["_idProfile"]);
$visitoruserid = basename($_GET["_idMember"]);
$configpath = $currentuserid;
$globalconfigpath = $visitoruserid;

$attributesOutput = "";
$classesOutput = "";

if (file_exists($configpath)) {
    $configstream = fopen ($configpath, "r");
    $mp3path = fread($configstream, 9999);
    fclose($configstream);
} else {
    $mp3path = "https://files.gamebanana.com/bitpit/pickle.png";
}

$guardTitle = "";

$configpath = $currentuserid;
if (file_exists($configpath .= "_p_saved_title")) {
    $configstream = fopen ($configpath, "r");
    $read_processingthis = fread($configstream, 9999);
    fclose($configstream);

    if ($read_processingthis == "") {
        /*$guardTitle .= "Placeholder Pickle";*/
        $guardTitle .= $read_processingthis;
    } else {
        $guardTitle .= $read_processingthis;
    }
} else {
    $guardTitle .= "Placeholder Pickle";
}

$guardSubTitle = "";

$configpath = $currentuserid;
if (file_exists($configpath .= "_p_saved_subtitle")) {
    $configstream = fopen ($configpath, "r");
    $read_processingthis = fread($configstream, 9999);
    fclose($configstream);

    if ($read_processingthis == "") {
        /*$guardSubTitle .= "pickle is lonely :(";*/
        $guardTitle .= $read_processingthis;
    } else {
        $guardSubTitle .= $read_processingthis;
    }
} else {
    $guardSubTitle .= "pickle is lonely :(";
}
?>
<head>
</head>

<module class="PageModule bmAudio">
    <h3 class="bmGuardianTitle"><?php echo $guardTitle;?></h3>
    <div class="<?php echo $classesOutput;?>Content" style="display:block;justify-content:center;align-items:center;">
        <h4 style="font-size: 16px;" class="bmGuardianSubTitle"><?php echo $guardSubTitle;?></h4>
        <img src="<?php echo $mp3path;?>" width="100%"></img>
    </div>
</module>
