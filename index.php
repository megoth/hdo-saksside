<?php
function sort_by_date($a, $b) {
    return $a->date < $b->date;
}
if($handle = opendir('.')) {
    $sketches = array();
    while (false !== ($entry = readdir($handle))) {
        $file_path = sprintf("%s/index.php", $entry);
        $config_path = sprintf("%s/config.php", $entry);
        if (file_exists($file_path) && substr($entry, 0, 1) !== ".") {
            $date = time();
            try {
                $date = new DateTime($entry);
                $date = $date->getTimestamp();
            } catch(Exception $e) {}
            array_push($sketches, array(
                "config" => $config_path,
                "date" => $date,
                "path" => $file_path
            ));
        }
    }
    closedir($handle);

    asort($sketches);
    $latest = array_pop($sketches);
    if (isset($latest)) {
        include($latest["config"]);
        include($latest["path"]);
    } else {
        include("../../no_sketches_available.php");
    }
} else {
    die("Couldn't open directories...");
}
?>