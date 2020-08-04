<?php

include("../../page.inc.php");
include("submenu.inc.php");

WritePageHead("wxCAS", "Introduction", $menuFR, $menuwxCAS, $submenu, $submenuIntro);
?>


<div class="sideBox">
    <h1>Introduction</h1>
    <ul>
        <li><a href="#wxCAS">wxCAS</a></li>
    </ul>
</div>


<div class="mainPage">
    <h1 id="wxCAS">wxCAS :</h1>
    
    wxCAS est la nouvelle interface graphique pour GIAC. Elle est conçue avec la librairie wxWidgets, et est en phase de 
    développement.
    
    <p>
    <img src="<?php echo $globalpath;?>/img/wxCAS.png" style="align:center;" alt="Logo"/>
    </p>

</div>


<?php
WritePageFoot();
?>
