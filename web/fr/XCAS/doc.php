<?php

include("../../page.inc.php");
include("submenu.inc.php");

WritePageHead("XCAS", "Documentation", $menuFR, $menuCommon, $submenu, $submenuDoc);
?>


<div class="sideBox">
    <h1>Documentation</h1>
    <ul>
        <li><a href="#tuto">Tutoriel</a></li>
        <li><a href="#present">Présentation</a></li>
        <li><a href="#formal">Calcul formel</a></li>
        <li><a href="#prog">Programmation</a></li>
        <li><a href="#geom">Géométrie</a></li>
        <li><a href="#simu">Simulation</a></li>
    </ul>
</div>


<div class="mainPage">

    <h1>Documentation francaise de xcas</h1>
    
    <h2 id="tuto">Tutoriel</h2>
    <p>
    <a href="http://www-fourier.ujf-grenoble.fr/~parisse/tutoriel/index.html">En ligne</a> ou au format
    <a href="http://www-fourier.ujf-grenoble.fr/~parisse/tutoriel.pdf">PDF</a>,
    <a href="http://www-fourier.ujf-grenoble.fr/~parisse/tutoriel.tgz">archive HTML </a>
    </p>
    
    <h2 id="present">Présentation des possibilit&eacute;s de xcas avec des exercices corrig&eacute;s</h2>
    <p>
    Par Ren&eacute;e De Graeve.
    <a href="http://www-fourier.ujf-grenoble.fr/~parisse/inpg1/index.html">En ligne</a>
    </p>
    
    <h2 id="formal">Calcul formel</h2>
    <p>Par Ren&eacute;e De Graeve.
    <a href="http://www-fourier.ujf-grenoble.fr/~parisse/casflan/casflan.html">En ligne</a> ou au format
    <a href="http://www-fourier.ujf-grenoble.fr/~parisse/casflan.pdf">PDF </a>,
    <a href="http://www-fourier.ujf-grenoble.fr/~parisse/casflan.tgz">archive HTML </a>,
    <a href="http://www-fourier.ujf-grenoble.fr/~parisse/casflan.tex">LaTeX </a>.
    </p>
    
    <h2 id="prog">Programmation</h2>
    <p>Par Ren&eacute;e De Graeve.
    <a href="http://www-fourier.ujf-grenoble.fr/~parisse/casrouge/casrouge.html">En ligne</a> ou au format
    <a href="http://www-fourier.ujf-grenoble.fr/~parisse/casrouge.pdf">PDF </a>,
    <a href="http://www-fourier.ujf-grenoble.fr/~parisse/casrouge.tgz">archive HTML </a>,
    <a href="http://www-fourier.ujf-grenoble.fr/~parisse/casrouge.tex">LaTeX </a>.
    </p>
    
    <h2 id="geom">Géométrie</h2>
    <p>Par Ren&eacute;e De Graeve.
    <a href="http://www-fourier.ujf-grenoble.fr/~parisse/casgeo/casgeo.html">En ligne</a> ou au format
    <a href="http://www-fourier.ujf-grenoble.fr/~parisse/casgeo.pdf">PDF </a>,
    <a href="http://www-fourier.ujf-grenoble.fr/~parisse/casgeo.tgz">archive HTML </a>,
    <a href="http://www-fourier.ujf-grenoble.fr/~parisse/casgeo.tex">LaTeX </a>.
    </p>
    
    <h2 id="simu">Simulation</h2>
    <p>Par Ren&eacute;e De Graeve.
    <a href="http://www-fourier.ujf-grenoble.fr/~parisse/cassim/cassim.html">En ligne</a> ou au format
    <a href="http://www-fourier.ujf-grenoble.fr/~parisse/cassim.pdf">PDF </a>,
    <a href="http://www-fourier.ujf-grenoble.fr/~parisse/cassim.tgz">archive HTML </a>,
    <a href="http://www-fourier.ujf-grenoble.fr/~parisse/cassim.tex">LaTeX </a>.
    </p>

</div>


<?php
WritePageFoot();
?>
