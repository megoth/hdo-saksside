<?php
$is_child = true;
include("../list.php");
if (!isset($_GET["list"])) {
    echo "<div class='page-sketches'><a href='?list'>+</a></div>";
    return;
}
?><div class="page-sketches">
    <ul class="nav">
        <?php walk(".."); ?>
        <li><a href="?">-</a></li>
    </ul>
</div>