<?php
if($handle = opendir('.')) {
    $latest;
    while (false !== ($entry = readdir($handle))) {
        if (is_dir($entry) && substr($entry, 0, 1) !== ".") {
            $latest = $entry . "/index.php";
        }
    }
    closedir($handle);
    if (is_file($latest)) {
        include($latest);
    } else {
        include("../../no_sketches_available.php");
    }
} else {
    die("Couldn't open directories...");
}
?>