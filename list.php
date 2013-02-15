<?php
function walk($base_url, $path, $accept_index) {
    if($handle = opendir($path)) {
        $directories = array();
        $sketches = array();
        while (false !== ($entry = readdir($handle))) {
            $full_path = sprintf("%s/%s", $path, $entry);
            if (is_dir($full_path) && substr($entry, 0, 1) !== ".") {
                array_unshift($directories, $full_path);
            } elseif($accept_index && $entry === "index.php") {
                $desc = "no description given...";
                $index = substr($path, 2);
                $config = sprintf("%s/config.php", $path);
                if (file_exists($config)) {
                    require($config);
                    $desc = $description;
                    $index = $base_url;
                }
                $a = array(
                    "desc" => $desc,
                    "path" => $index
                );
                array_push($sketches, $a);
            }
            $index++;
        }
        $has_sketches = count($sketches) > 0;
        if ($has_sketches) {
            foreach($sketches as $sketch) {
                echo sprintf('<li><a href="%s?list" title="%s">%s</a>', $sketch["path"], $sketch["desc"], $sketch["path"]);
                foreach($directories as $directory) {
                    walk($base_dir, $directory, true);
                }
                echo "</li>";
            }
        } else {
            foreach($directories as $directory) {
                walk($base_dir, $directory, true);
            }
        }
        closedir($handle);
    }
}
if (!isset($_GET["list"])) {
return;
}
if (isset($already_printed)) {
return;
}
?><div class="page-sketches">
    <ul class="nav">
        <?php walk($base_url, ".", false); ?>
    </ul>
</div>