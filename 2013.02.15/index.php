<?php include("config.php"); ?><!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <meta http-equiv="Content-Type" charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Holder de ord saksside - Sketch @ icanhasweb.net</title>
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo $base_url;?>stylesheets/style.css" />
    <link rel="stylesheet" type="text/css" media="all and (min-width: 30em)" href="<?php echo $base_url;?>stylesheets/style.medium.css" />
    <link rel="stylesheet" type="text/css" media="all and (min-width: 51em)" href="<?php echo $base_url;?>stylesheets/style.large.css" />
    <!--[if lte IE 8]>
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url;?>stylesheets/style.medium.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url;?>stylesheets/style.large.css" />
    <![endif]-->
</head>
<body>
<div class="wrapper">
    <div class="hdo-navbar navbar navbar-static-top">
        <div class="navbar-inner">
            <div class="ribbon-fix">
                <div class="ribbon visible-desktop">Under utvikling</div>
            </div>
            <div class="container">
                <div class="clearfix">
                    <a class="logo" href="/">
                        <img alt="Holder de ord" src="<?php echo $base_url;?>assets/logo.png">
                    </a>
                    <form class="form-search navbar-search" method="GET" action="/search/all">
                        <div class="input-append">
                            <input class="span2 search-query" name="query" id="appendedInputButton" type="text" autocomplete="off" autofocus="">
                            <button class="btn" type="submit">Søk</button>
                        </div>
                    </form>
                </div>
                <ul class="nav">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#partier">
                            Partier
                            <b class="caret"></b>
                        </a>
                    </li>
                    <li class="">
                        <a href="/promises">
                            Løfter
                        </a>
                    </li>
                    <li class="dropdown ">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#about-us">
                            Om oss
                            <b class="caret"></b>
                        </a>
                    </li>
                    <li class="dropdown ">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#support">
                            Støtt oss
                            <b class="caret"></b>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div> <!-- hdo-navbar -->
    <div id="hdo-content" class="container">
        <div class="case-vizualization" id="PartyVisualization">
            <div class="canvas"></div>
            <div class="axis">
                <span class="against">Mot</span>
                <span class="either">Både for og mot</span>
                <span class="for">For</span>
            </div>
        </div>
    </div>
    <div class="push"></div>
</div>
<footer>
  <div class="container">Fot</div>
</footer>
<script src="<?php echo $base_url;?>javascript/lib/d3.v3.min.js" type="text/javascript"></script>
<script src="<?php echo $base_url;?>javascript/lib/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="<?php echo $base_url;?>javascript/lib/underscore-1.4.3.min.js" type="text/javascript"></script>
<script src="<?php echo $base_url;?>javascript/parties.js" type="text/javascript"></script>
<script src="<?php echo $base_url;?>javascript/jquery.case.js" type="text/javascript"></script>
<script src="<?php echo $base_url;?>javascript/jquery.parties.js" type="text/javascript"></script>
<script type="text/javascript">
(function (global, $) {
    var baseUrl = "<?php echo $asset_url;?>",
        limitAgainst = 33,
        limitFor = 66,
        rPartOfWidth = 12;
    d3.json("<?php echo $base_url;?>data/parties.json", function (data) {
        $("#PartyVisualization").find(".canvas").parties(data, baseUrl, limitAgainst, limitFor, rPartOfWidth);
    });
    $("section.case-party").case();
}( window || document, jQuery ));
</script>
<?php include("list.php"); ?>
</body>
</html>