<?php

include("../../page.inc.php");
include("submenu.inc.php");

WritePageHead("GIAC", "Introduction", $menuFR, $menuGIAC, $submenu, $submenuIntro);
?>


<div class="sideBox">
    <h1>Introduction</h1>
    <ul>
        <li><a href="#present">Pr�sentation</a></li>
    </ul>
</div>


<div class="mainPage">

<h1 id="present">Pr�sentation</h1>
<h1>GIAC :</h1>
<p>GIAC est une biblioth�que C++ de calcul formel libre (licence GPL).
Elle dispose d'un mode de compatibilit� avec les logiciels Maple et MuPAD et et les calculatrices TI89/TI92/Voyage 200.
Elle permet d'int�grer du calcul formel directement dans des programmes C/C++.
</p>


</div>


<?php
WritePageFoot();
?>
