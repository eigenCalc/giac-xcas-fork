<?php

include("../../page.inc.php");
include("submenu.inc.php");

WritePageHead("XCAS", "Introduction", $menuFR, $menuXCAS, $submenu, $submenuIntro);
?>


<div class="sideBox">
    <h1>Introduction</h1>
    <ul>
        <li><a href="#xcas">XCAS</a></li>
        <li><a href="#fonctions">Fonctions</a></li>
    </ul>
</div>


<div class="mainPage">

<h1 id="xcas">XCAS :</h1>
<p>Xcas est un logiciel libre pour Windows, Mac OSX et Linux/Unix qui permet de faire du calcul formel, de la géométrie dynamique, du tableur et de la programmation.
Xcas est l'une des interfaces de Giac.<br />
Giac disposant d'un mode de compatibilité avec les logiciels Maple et MuPAD et les calculatrices TI89/TI92/Voyage 200, on peut donc utiliser XCAS comme un logiciel gratuit compatible avec maple ou MuPAD ou comme une calculatrice.
</p>

<h2 id="fonctions">Fonctionnalités de XCAS :</h2>
<ul>
    <li>Calcul formel: calcul en précision arbitraire (entiers et flottants), arithmétique des entiers et des polynomes (PGCD, Bézout, factorisation, ...), simplification (fractions rationnelles, fonctions trigonométriques,...), résolution d'équations, dérivation, intégration (fraction rationnelle, méthodes heuristiques, algorithme de Risch pour les fonctions transcendantes), décomposition en éléments simples de fractions rationnelles, limites, développement de Taylor et asymptotiques, algèbre linéaire (vecteurs, matrices, réduction de Gauss, vecteurs et valeurs propres exactes et approchées)...</li>
    <li>Géométrie (2-d et 3-d): points, segments, droites, plans, triangles, quadrilatères, polygones, cercles, coniques, sphères, cones, cubes, prismes, courbes paramétrées et polaires, surfaces, intersections, tangentes, paramètres, angles, affixes, ... Géométrie interactive dans le plan. Toutes les instructions de tracé sont programmables. Les calculs peuvent etre faits de manière exacte en utilisant le système de calcul formel, ce qui permet de faire des preuves (de géométrie analytique).</li>
    <li>Tableur: références absolues et relatives, calcul exact ou approché (les cellules peuvent etre des entiers en précision arbitraire, des noms de variables, des expressions, ...), accès complet aux fonctions de programmation, interface pour les statistiques 1-d et 2-d (moyenne, écart type, histogramme, covariance, corrélation, ...)</li>
    <li>Tortue logo</li>
    <li>Programmation: fonctions, variables locales, tests, boucles. Syntaxe au choix (style C, Maple, MuPAD ou TI89). Possibilité dans des cas favorables de lire et d'exécuter des programmes Maple, MuPAD ou TI89. Editeur intégré pour de petits programmes. Débogueur interactif.</li>
    <li>Aide en ligne : documentation entièment en francais, index des fonctions, syntaxe, exemples, recherche par mot clef, complétion.</li>
    <li>Editeur d'équation : affichage 2-d des expressions, possibilité de travailler sur des sous-expressions.</li>
    <li>Unité physiques : opérations usuelles et conversion.<Li>
</ul>

</div>


<?php
WritePageFoot();
?>
