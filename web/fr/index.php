<?php

include("../page.inc.php");
include("submenu.inc.php");

WritePageHead("GIAC/XCAS/wxCAS", "Introduction", $menuFR, $menuCommon, $submenu, $submenuIndex);
?>


<div class="sideBox">
    <h1>Introduction</h1>
    <ul>
        <li><a href="#intro">Intro</a></li>
        <li><a href="#GIAC">GIAC</a></li>
        <li><a href="#XCAS">XCAS</a></li>
        <li><a href="#wxCAS">wxCAS</a></li>
    </ul>
</div>


<div class="mainPage">
    <h1 id="intro">Introduction</h1>
    <p>GIAC/XCAS/wxCAS est un systeme de calcul formel libre (donc gratuit) pour Windows, Mac OSX et Linux/Unix.
    Il est disponible sous forme de logiciel (interface graphique ou texte au choix) ou comme une bibliothèque pour programmer en C++.
    </p>

    <h1 id="GIAC">GIAC :</h1>
    <p>GIAC est une bibliothèque C++ de calcul formel libre (licence GPL).
    Elle dispose d'un mode de compatibilité avec les logiciels Maple et MuPAD et et les calculatrices TI89/TI92/Voyage 200.
    Elle permet d'intégrer du calcul formel directement dans des programmes C/C++.
    </p>
    
    <h1 id="XCAS">XCAS :</h1>
    <p>XCAS est un logiciel libre pour Windows, Mac OSX et Linux/Unix basé sur FLTK, qui permet de faire du calcul formel, de la géométrie dynamique, du tableur et de la programmation.
    XCAS est l'une des interfaces de Giac.</p>
    
    <h1 id="wxCAS">wxCAS : </h1>
    <p>wxCAS est un autre logiciel libre pour Windows, Linux/Unix et MacOS basé sur wxWidgets.
    wxCAS est une alternative à XCAS en cours de développement.
    </p>

</div>


<?php
WritePageFoot();
?>

