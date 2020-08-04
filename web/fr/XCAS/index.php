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
<p>Xcas est un logiciel libre pour Windows, Mac OSX et Linux/Unix qui permet de faire du calcul formel, de la g�om�trie dynamique, du tableur et de la programmation.
Xcas est l'une des interfaces de Giac.<br />
Giac disposant d'un mode de compatibilit� avec les logiciels Maple et MuPAD et les calculatrices TI89/TI92/Voyage 200, on peut donc utiliser XCAS comme un logiciel gratuit compatible avec maple ou MuPAD ou comme une calculatrice.
</p>

<h2 id="fonctions">Fonctionnalit�s de XCAS :</h2>
<ul>
    <li>Calcul formel: calcul en pr�cision arbitraire (entiers et flottants), arithm�tique des entiers et des polynomes (PGCD, B�zout, factorisation, ...), simplification (fractions rationnelles, fonctions trigonom�triques,...), r�solution d'�quations, d�rivation, int�gration (fraction rationnelle, m�thodes heuristiques, algorithme de Risch pour les fonctions transcendantes), d�composition en �l�ments simples de fractions rationnelles, limites, d�veloppement de Taylor et asymptotiques, alg�bre lin�aire (vecteurs, matrices, r�duction de Gauss, vecteurs et valeurs propres exactes et approch�es)...</li>
    <li>G�om�trie (2-d et 3-d): points, segments, droites, plans, triangles, quadrilat�res, polygones, cercles, coniques, sph�res, cones, cubes, prismes, courbes param�tr�es et polaires, surfaces, intersections, tangentes, param�tres, angles, affixes, ... G�om�trie interactive dans le plan. Toutes les instructions de trac� sont programmables. Les calculs peuvent etre faits de mani�re exacte en utilisant le syst�me de calcul formel, ce qui permet de faire des preuves (de g�om�trie analytique).</li>
    <li>Tableur: r�f�rences absolues et relatives, calcul exact ou approch� (les cellules peuvent etre des entiers en pr�cision arbitraire, des noms de variables, des expressions, ...), acc�s complet aux fonctions de programmation, interface pour les statistiques 1-d et 2-d (moyenne, �cart type, histogramme, covariance, corr�lation, ...)</li>
    <li>Tortue logo</li>
    <li>Programmation: fonctions, variables locales, tests, boucles. Syntaxe au choix (style C, Maple, MuPAD ou TI89). Possibilit� dans des cas favorables de lire et d'ex�cuter des programmes Maple, MuPAD ou TI89. Editeur int�gr� pour de petits programmes. D�bogueur interactif.</li>
    <li>Aide en ligne : documentation enti�ment en francais, index des fonctions, syntaxe, exemples, recherche par mot clef, compl�tion.</li>
    <li>Editeur d'�quation : affichage 2-d des expressions, possibilit� de travailler sur des sous-expressions.</li>
    <li>Unit� physiques : op�rations usuelles et conversion.<Li>
</ul>

</div>


<?php
WritePageFoot();
?>
