<?php

include("../../page.inc.php");
include("submenu.inc.php");

WritePageHead("wxCAS", "Overview", $menuEN, $menuwxCAS, $submenu, $submenuIntro);
?>


<div class="sideBox">
    <h1>Overview</h1>
    <ul>
        <li><a href="#wxCAS">wxCAS</a></li>
    </ul>
</div>


<div class="mainPage">
    <h1 id="wxCAS">wxCAS :</h1>
    <p>
    wxCAS is the new graphic interface for GIAC. It is created using the wxWidgets framekit, and is still in alpha-stage.
    </p>
    <p>
    <img src="<?php echo $pathtoroot;?>/img/wxCAS.png" style="align:center;" alt="Logo"/>
    </p>

</div>


<?php
WritePageFoot();
?>
