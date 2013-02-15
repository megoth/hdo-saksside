<?php
if($handle = opendir('.')) {
    $latest;
    $config;
    while (false !== ($entry = readdir($handle))) {
        if (is_dir($entry) && substr($entry, 0, 1) !== ".") {
            $latest = $entry . "/index.php";
            $config = $entry . "/config.php";
            break;
        }
    }
    closedir($handle);
    if (is_file($latest)) {
        include($config);
        include($latest);
    } else {
        include("../../no_sketches_available.php");
    }
} else {
    die("Couldn't open directories...");
}
?>