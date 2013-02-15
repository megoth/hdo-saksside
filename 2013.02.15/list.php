<?php
include("../list.php");
if (!isset($_GET["list"])) {
return;
}
?><div class="page-sketches">
    <ul class="nav">
        <?php walk($base_url, "..", false); ?>
    </ul>
</div>