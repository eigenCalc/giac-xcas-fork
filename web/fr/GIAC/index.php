<?php

include("../../page.inc.php");
include("submenu.inc.php");

WritePageHead("GIAC", "Introduction", $menuFR, $menuGIAC, $submenu, $submenuIntro);
?>


<div class="sideBox">
    <h1>Introduction</h1>
    <ul>
        <li><a href="#present">Présentation</a></li>
    </ul>
</div>


<div class="mainPage">

<h1 id="present">Présentation</h1>
<h1>GIAC :</h1>
<p>GIAC est une bibliothèque C++ de calcul formel libre (licence GPL).
Elle dispose d'un mode de compatibilité avec les logiciels Maple et MuPAD et et les calculatrices TI89/TI92/Voyage 200.
Elle permet d'intégrer du calcul formel directement dans des programmes C/C++.
</p>


</div>


<?php
WritePageFoot();
?>
