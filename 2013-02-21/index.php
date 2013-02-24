<?php include("config.php"); ?><!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <meta http-equiv="Content-Type" charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Holder de ord saksside - Sketch @ icanhasweb.net</title>
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo $base_url;?>stylesheets/style.css" />
    <link rel="stylesheet" type="text/css" media="all and (min-width: 30em)" href="<?php echo $base_url;?>stylesheets/style.medium.css" />
    <link rel="stylesheet" type="text/css" media="all and (min-width: 48em)" href="<?php echo $base_url;?>stylesheets/style.large.css" />
    <link rel="stylesheet" type="text/css" media="all and (max-width: 48em)" href="<?php echo $base_url;?>stylesheets/style.large.not.css" />
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
        <div class="page-header">
            <h1>Innføre universelt egenandelstak for tannhelseutgifter</h1>
        </div>
        <div class="block-content">
            <p>Tannlegebehandling dekkes ikke av folketrygden, med unntak av noen definerte sykdommer. Denne saken omhandler avstemninger for å innføre en universell makssum for tannhelseutgifter og utvide områdene hvor det gis refusjon.</p>
        </div>
        <div class="block-meta">
            <strong>Publisert:</strong> 2. desember 2012 17:00
            <strong>Oppdatert:</strong> 2. desember 2012 17:00
        </div>
        <h2>Stemmegivning</h2>
        <div class="case-visualization row-fluid" id="PartyVisualization">
            <div class="against span4 offset1">
                <div class="axis">
                    <img class="icon" src="<?php echo $asset_url;?>images/icons/case_against.png" />
                    <span class="text">Mot</span>
                </div>
                <div class="canvas">
                    <div class="frp party">
                        <img class="icon" src="<?php echo $asset_url;?>images/parties/frp.png" />
                        <span class="text">Fremskrittspartiet</span>
                    </div>
                </div>
            </div>
            <div class="either span4">
                <div class="axis">
                    <img class="icon" src="<?php echo $asset_url;?>images/icons/case_undecided.png" />
                    <span class="text">Både for og mot</span>
                </div>
                <div class="canvas">
                    <div class="h party">
                        <img class="icon" src="<?php echo $asset_url;?>images/parties/h.png" />
                        <span class="text">Høyre</span>
                    </div>
                </div>
            </div>
            <div class="for span3">
                <div class="axis">
                    <img class="icon" src="<?php echo $asset_url;?>images/icons/case_for.png" />
                    <span class="text">For</span>
                </div>
                <div class="canvas">
                    <div class="ap party">
                        <img class="icon" src="<?php echo $asset_url;?>images/parties/ap.png" />
                        <span class="text">Arbeiderpartiet</span>
                    </div>
                    <div class="frp party">
                        <img class="icon" src="<?php echo $asset_url;?>images/parties/krf.png" />
                        <span class="text">Kristelig Folkeparti</span>
                    </div>
                    <div class="sp party">
                        <img class="icon" src="<?php echo $asset_url;?>images/parties/sp.png" />
                        <span class="text">Senterpartiet</span>
                    </div>
                    <div class="sv party">
                        <img class="icon" src="<?php echo $asset_url;?>images/parties/sv.png" />
                        <span class="text">Sosialistisk Venstreparti</span>
                    </div>
                    <div class="v party">
                        <img class="icon" src="<?php echo $asset_url;?>images/parties/v.png" />
                        <span class="text">Venstre</span>
                    </div>
                </div>
            </div>
        </div>
        <h3>Regjeringspartiene</h3>
        <div class="case-party ap">
            <header class="row-fluid">
                <div class="images span1">
                    <img alt="Arbeiderpartiet" src="<?php echo $asset_url;?>images/parties/ap.png">
                </div>
                <div class="content span11">
                    <h2>Arbeiderpartiet</h2>
                    <p>Arbeiderpartiet har stemt <strong>mot</strong> å innføre universelt egenandelstak for tannhelseutgifter. Det er <strong>uklart om de holder ord</strong>, da de har stemt både i henhold og mot deres løfter.
                </div>
            </header>
            <section class="row-fluid votes" id="ap-votes">
                <div class="images span1">
                    <img src="<?php echo $asset_url;?>images/icons/case_against.png">
                </div>
                <div class="content span11">
                    <h4>Avstemminger</h4>
                    <ul class="unstyled">
                        <li><span class="label">For</span> å legge forslag om gradvis innføre en takordning for tannhelseutgifter ved protokollen</li>
                        <li><span class="label">Mot</span> å gradvis innnføre en takordning for tannhelseutgifter</li>
                        <li><span class="label">Mot</span> å etablere en takordning for utgifter relatert til sykdom i munnhulen</li>
                    </ul>
                </div>
            </section>
            <section class="row-fluid" id="ap-hdo">
                <div class="images span1">
                    <img src="<?php echo $asset_url;?>images/icons/promise_unclear.png">
                </div>
                <div class="content span11">
                    <h4>Holder de ord?</h4>
                    <p>Har <strong>stort sett</strong> holdt løftene sine.</p>
                    <ul>
                        <li>I <strong>to saker holdt de ord</strong>.</li>
                        <li>Det er <strong>ingen saker hvor de gikk direkte i mot noen av sine løfter</strong>.</li>
                        <li>Det er <strong>én sak hvor de stemte tvetydig</strong>.</li>
                    </ul>
                    <div class="basis">
                        <p>I <strong>partiprogrammet</strong> har partiet lovet følgende:</p>
                        <ul>
                            <li>Ap vil at det i perioden 2009-2013 settes tak for hvor mye den enkelte selv skal dekke av utgifter til nødvendig tannbehandling, slik at alle får råd til å ivareta sin tannhelse på en god måte.</li>
                            <li>Ap vil at det offentlige gradvis tar et større ansvar på tannhelsefeltet.</li>
                        </ul>
                        <p>I <strong>regjeringserklæringen</strong> har partiet lovet følgende:</p>
                        <ul>
                            <li>Regjeringen vil sikre tilgjengeligheten til tannhelsetjenester og følge opp stortingsmeldingen om framtidas tannhelsetjenester, St meld. nr. 35 (2006-2007).</li>
                            <li>Vi har som mål at det offentlige gradvis skal ta et større ansvar på tannhelsefeltet, og utrede ulike modeller med sikte på at det etableres et tak på hvor mye den enkelte selv skal dekke av utgifter til nødvendig tannbehandling.</li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div class="push"></div>
</div>
<footer>
  <div class="container">Fot</div>
</footer>
<?php include("list.php"); ?>
</body>
</html>