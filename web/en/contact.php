<?php

include("../page.inc.php");
include("submenu.inc.php");

WritePageHead("GIAC/XCAS/wxCAS", "Contact", $menuEN, $menuCommon, $submenu, $submenuContact);
?>


<div class="sideBox">
    <h1>Contact</h1>
    <ul>
        <li><a href="#GIAC">GIAC/XCAS</a></li>
        <li><a href="#wxCAS">wxCAS</a></li>
        <li><a href="#site">Web site</a></li>
    </ul>
</div>


<div class="mainPage">

    <h1>Contact.</h1>
    
    <h2 id="GIAC">GIAC/XCAS</h2>
    <p>All about GIAC or XCAS can be posted to Bernard Parisse (<a href="mailto:parisse@fourier.ujf-grenoble.fr">parisse@fourier.ujf-grenoble.fr</a>).
    </p>
    
    <h2 id="wxCAS">wxCAS</h2>
    <p>About wxCAS, thanks to contact Andreas Thillosen (<a href="mailto:thillosen@free.fr">thillose@free.fr</a>) or
    Emilien KIA (<a href="mailto:cursor@free.fr">cursor@free.fr</a>).
    </p>
    
    <h2 id="site">Web site</h2>
    <p>All about web site or SF.net informations could be send to Emilien KIA (<a href="mailto:cursor@free.fr">cursor@free.fr</a>).
    </p>

</div>


<?php
WritePageFoot();
?>