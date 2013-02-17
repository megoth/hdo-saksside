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
        <div class="page-header">
            <h1>Innføre universelt egenandelstak for tannhelseutgifter</h1>
        </div>
        <div class="case-visualization row-fluid" id="PartyVisualization">
            <div class="against span4">
                <div class="canvas"></div>
                <div class="label label-important">Mot</div>
            </div>
            <div class="either span4">
                <div class="canvas"></div>
                <div class="label">Både for og mot</div>
            </div>
            <div class="for span4">
                <div class="canvas"></div>
                <div class="label label-success">For</div>
            </div>
        </div>
        <div class="block-content">
            <p>Tannlegebehandling dekkes ikke av folketrygden, med unntak av noen definerte sykdommer. Denne saken omhandler avstemninger for å innføre en universell makssum for tannhelseutgifter og utvide områdene hvor det gis refusjon.</p>
        </div>
        <div class="block-meta">
            <strong>Publisert:</strong> 2. desember 2012 17:00
            <strong>Oppdatert:</strong> 2. desember 2012 17:00
        </div>
        <h3>Regjeringspartiene</h3>
        <div class="case-party row-fluid">
            <div class="images span1">
                <img alt="Arbeiderpartiet" src="<?php echo $asset_url;?>images/parties/ap.png">
                <img src="<?php echo $asset_url;?>images/icons/vote_mot.png">
                <img src="<?php echo $asset_url;?>images/icons/promise_uklart.png">
            </div>
            <div class="content span11">
                <header>
                    <h2>Arbeiderpartiet</h2>
                </header>
                <section class="grid-item" id="ap-votes">
                    <h4>Stemmer</h4>
                    <p>Har stemt <strong class="label label-important">mot</strong>.</p>
                    <ul>
                        <li>I <strong>tre saker</strong> går de i mot saken.</li>
                        <li>De har <strong>ingen stemmer</strong> som støtter saken.</li>
                    </ul>
                    <div class="basis">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Sak</th>
                                    <th>Stemt</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Legge forslag om gradvis innføre en takordning for tannhelseutgifter ved protokollen</td>
                                    <td>
                                        <span class="label label-success">For</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Gradvis innnføre en takordning for tannhelseutgifter</td>
                                    <td>
                                        <span class="label label-success">Mot</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Etablere en takordning for utgifter relatert til sykdom i munnhulen</td>
                                    <td>
                                        <span class="label label-success">Mot</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
                <section class="grid-item" id="ap-hdo">
                    <h4>Holder de ord?</h4>
                    <p>Har <strong class="label label-warning">stort sett</strong> holdt løftene sine.</p>
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
                </section>
            </div>
        </div>
        <div class="case-party row-fluid">
            <div class="images span1">
                <img alt="Senterpartiet" src="<?php echo $asset_url;?>images/parties/sp.png">
                <img src="<?php echo $asset_url;?>images/icons/vote_mot.png">
                <img src="<?php echo $asset_url;?>images/icons/promise_holdt.png">
            </div>
            <div class="content span11">
                <header>
                    <h2>Senterpartiet</h2>
                </header>
                <section class="grid-item" id="sp-votes">
                    <h4>Stemmer</h4>
                    <p>Har stemt <strong class="label label-important">mot</strong>.</p>
                    <ul>
                        <li>I <strong>tre saker</strong> går de i mot saken.</li>
                        <li>De har <strong>ingen stemmer</strong> som støtter saken.</li>
                    </ul>
                    <div class="basis">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Sak</th>
                                    <th>Stemt</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Legge forslag om gradvis innføre en takordning for tannhelseutgifter ved protokollen</td>
                                    <td>
                                        <span class="label label-success">For</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Gradvis innnføre en takordning for tannhelseutgifter</td>
                                    <td>
                                        <span class="label label-success">Mot</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Etablere en takordning for utgifter relatert til sykdom i munnhulen</td>
                                    <td>
                                        <span class="label label-success">Mot</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
                <section class="grid-item" id="sp-hdo">
                    <h4>Holder de ord?</h4>
                    <p>Har <strong class="label label-success">holdt ord</strong> i jf. løftene sine.</p>
                    <ul>
                        <li>I <strong>tre saker holdt de ord</strong>.</li>
                        <li>Det er <strong>ingen saker hvor de gikk direkte i mot noen av sine løfter</strong>.</li>
                        <li>Det er <strong>ingen saker hvor de stemte tvetydig</strong>.</li>
                    </ul>
                    <div class="basis">
                        <p>I <strong>partiprogrammet</strong> har partiet lovet følgende:</p>
                        <ul>
                            <li>Once in every lifetime, comes a love like this. Oh I need you, you need me, oh my darling can't you see. Young Ones. Darling we're the Young Ones. Young Ones. Shouldn't be afraid. To live, love, there's a song to be sung. Cause we may not be the Young Ones very long.</li>
                        </ul>
                        <p>I <strong>regjeringserklæringen</strong> har partiet lovet følgende:</p>
                        <ul>
                            <li>Regjeringen vil sikre tilgjengeligheten til tannhelsetjenester og følge opp stortingsmeldingen om framtidas tannhelsetjenester, St meld. nr. 35 (2006-2007).</li>
                            <li>Vi har som mål at det offentlige gradvis skal ta et større ansvar på tannhelsefeltet, og utrede ulike modeller med sikte på at det etableres et tak på hvor mye den enkelte selv skal dekke av utgifter til nødvendig tannbehandling.</li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>
        <h3>Opposisjonspartier</h3>
        <div class="case-party row-fluid">
            <div class="images span1">
                <img alt="Høyre" src="<?php echo $asset_url;?>images/parties/h.png">
                <img src="<?php echo $asset_url;?>images/icons/vote_uklart.png">
                <img src="<?php echo $asset_url;?>images/icons/promise_holdt.png">
            </div>
            <div class="content span11">
                <header>
                    <h2>Høyre</h2>
                </header>
                <section class="grid-item" id="h-votes">
                    <h4>Stemmer</h4>
                    <p>Har stemt <strong class="label">både for og mot</strong>.</p>
                    <ul>
                        <li>I <strong>to saker</strong> går de i mot saken.</li>
                        <li>I <strong>én sak</strong> som støtter saken.</li>
                    </ul>
                    <div class="basis">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Sak</th>
                                    <th>Stemt</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Legge forslag om gradvis innføre en takordning for tannhelseutgifter ved protokollen</td>
                                    <td>
                                        <span class="label label-success">For</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Gradvis innnføre en takordning for tannhelseutgifter</td>
                                    <td>
                                        <span class="label label-success">Mot</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Etablere en takordning for utgifter relatert til sykdom i munnhulen</td>
                                    <td>
                                        <span class="label label-important">Mot</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
                <section class="grid-item" id="sp-hdo">
                    <h4>Holder de ord?</h4>
                    <p>Har <strong class="label label-success">holdt ord</strong> i jf. løftene sine.</p>
                    <ul>
                        <li>I <strong>tre saker holdt de ord</strong>.</li>
                        <li>Det er <strong>ingen saker hvor de gikk direkte i mot noen av sine løfter</strong>.</li>
                        <li>Det er <strong>ingen saker hvor de stemte tvetydig</strong>.</li>
                    </ul>
                    <div class="basis">
                        <p>I <strong>partiprogrammet</strong> har partiet lovet følgende:</p>
                        <ul>
                            <li>People let me tell you 'bout my best friend, he's a warm-hearted person who’ll love me till the end. People let me tell you 'bout my best friend, he's a one boy cuddly toy, my up, my down, my pride and joy. People let me tell you 'bout him he's so much fun whether we’re talkin' man to man or whether we’re talking son to son. Cause he’s my best friend. Yes he's my best friend.</li>
                            <li>Life is like a hurricane here in Duckburg. Race cars, lasers, aeroplanes - it's a duck blur. You might solve a mystery or rewrite history - Duck Tales, Oo-oo! Tales of derring-do, bad and good luck tales, oo-oo! D-d-d-danger, watch behind you - there's a stranger out to find you! What to do? Just grab onto some Duck Tales, oo-oo! Not pony tails or cotton tails but Duck Tales, oo-oo! When it seems they're headed for the final curtain Bold deduction never fails, that's for certain The worst of messes become successes!.</li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <div class="push"></div>
</div>
<footer>
  <div class="container">Fot</div>
</footer>
<script src="<?php echo $base_url;?>javascript/lib/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="<?php echo $base_url;?>javascript/lib/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="<?php echo $base_url;?>javascript/parties.js" type="text/javascript"></script>
<script src="<?php echo $base_url;?>javascript/jquery.case.js" type="text/javascript"></script>
<script src="<?php echo $base_url;?>javascript/jquery.parties.js" type="text/javascript"></script>
<script type="text/javascript">
(function (global, $) {
    var baseUrl = "<?php echo $asset_url;?>",
        limitAgainst = 33,
        limitFor = 66,
        imgSize = 25;
    $("#PartyVisualization").parties([
         {
             "party": "AP",
             "color": "#da383f",
             "image": "images/parties/ap.png",
             "value": 70
         },
         {
             "party": "H",
             "color": "#0f658d",
             "image": "images/parties/h.png",
             "value": 40
         },
         {
             "party": "FrP",
             "color": "#393d87",
             "image": "images/parties/frp.png",
             "value": 30
         },
         {
             "party": "KrF",
             "color": "#efae52",
             "image": "images/parties/krf.png",
             "value": 80
         },
         {
             "party": "SP",
             "color": "#008767",
             "image": "images/parties/sp.png",
             "value": 80
         },
         {
             "party": "SV",
             "color": "#bb234a",
             "image": "images/parties/sv.png",
             "value": 80
         },
         {
             "party": "V",
             "color": "#81b45f",
             "image": "images/parties/v.png",
             "value": 80
         }
    ], baseUrl, limitAgainst, limitFor, imgSize);
    $(".case-party").case();
}( window || document, jQuery ));
</script>
<?php include("list.php"); ?>
</body>
</html>