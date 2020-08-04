<?php

include("../../page.inc.php");
include("submenu.inc.php");

WritePageHead("GIAC", "Overview", $menuEN, $menuGIAC, $submenu, $submenuIntro);
?>


<div class="sideBox">
    <h1>Overview</h1>
    <ul>
        <li><a href="#GIAC">GIAC</a></li>
    </ul>
</div>


<div class="mainPage">

    <h1 id="GIAC">GIAC :</h1>
    <p>GIAC is a free computer algebra C++ library (under the GPL license).
    It is compatible with Maple and MuPAD and the TI89/TI92/Voyage200 pocket calculators.
    It permits to integrate computer algebra inside C/C++ programs.
    </p>

</div>


<?php
WritePageFoot();
?>
