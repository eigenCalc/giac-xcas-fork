<?php

include("../page.inc.php");
include("submenu.inc.php");

WritePageHead("GIAC/XCAS/wxCAS", "Contact", $menuFR, $menuCommon, $submenu, $submenuContact);
?>


<div class="sideBox">
    <h1>Contact</h1>
    <ul>
        <li><a href="#GIAC">GIAC/XCAS</a></li>
        <li><a href="#wxCAS">wxCAS</a></li>
        <li><a href="#site">Le site</a></li>
    </ul>
</div>


<div class="mainPage">

<h1>Contacter les membres de l'équipe.</h1>

<h2 id="GIAC">GIAC/XCAS</h2>
<p>Toute information relative à GIAC ou XCAS peut être retournée à Bernard Parisse (<a href="mailto:parisse@fourier.ujf-grenoble.fr">parisse@fourier.ujf-grenoble.fr</a>).
</p>

<h2 id="wxCAS">wxCAS</h2>
<p>Pour wxCAS, merci de contacter Andreas Thillosen (<a href="mailto:thillosen@free.fr">thillosen@free.fr</a>) ou
Emilien KIA (<a href="mailto:cursor@free.fr">cursor@free.fr</a>).
</p>

<h2 id="site">Le site</h2>
<p>Tout rapport avec le site ou les données disponibles sur sf.net doivent être rapportées à Emilien KIA (<a href="mailto:cursor@free.fr">cursor@free.fr</a>).
</p>

</div>


<?php
WritePageFoot();
?>