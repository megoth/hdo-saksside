<?php
function sort_by_date($a, $b) {
    return $a["date"] > $b["date"];
}
function walk($path) {
    if($handle = opendir($path)) {
        $sketches = array();
        while (false !== ($entry = readdir($handle))) {
            $full_path = sprintf("%s/%s", $path, $entry);
            $file_path = sprintf("%s/index.php", $full_path);
            if(file_exists($file_path) && substr($entry, 0, 1) !== ".") {
                $desc = "no description given...";
                $config = sprintf("%s/config.php", $path);
                if (file_exists($config_path)) {
                    require_once($config_path);
                    $desc = $description;
                }
                $date = time();
                try {
                    $date = new DateTime($entry);
                    $date = $date->getTimestamp();
                } catch(Exception $e) {}
                array_push($sketches, array(
                    "date" => $date,
                    "path" => substr($full_path, strlen($path) + 1),
                    "desc" => $desc
                ));
            }
            $index++;
        }
        uksort($sketches, "sort_by_date");
        foreach($sketches as $sketch) {
            echo sprintf('<li><a href="%s?list" title="%s">%s</a>', $sketch["path"], $sketch["desc"], $sketch["path"]);
            foreach($directories as $directory) {
                walk($base_dir, $directory, true);
            }
            echo "</li>";
        }
        closedir($handle);
    }
}
if (!isset($_GET["list"])) {
    echo "<div class='page-sketches'><a href='?list'>+</a></div>";
    return;
}
if (isset($is_child)) {
    return;
}
?><div class="page-sketches">
    <ul class="nav">
        <?php walk("."); ?>
        <li><a href="?">-</a></li>
    </ul>
</div>