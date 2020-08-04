<?php

include("../../page.inc.php");
include("submenu.inc.php");

WritePageHead("XCAS", "Overview", $menuEN, $menuXCAS, $submenu, $submenuIntro);
?>


<div class="sideBox">
    <h1>Overview</h1>
    <ul>
        <li><a href="#xcas">XCAS</a></li>
    </ul>
</div>


<div class="mainPage">

    <h1 id="XCAS">XCAS :</h1>
    <p>Xcas is a free software for Windows, MacOS X and Unix/Linux.
    It permits to do computer algebra, dynamic geometry, spreadsheet and programming.
    Xcas is one of GIAC interface.<br />
    As GIAC implement a compatibility mode with Maple and MuPAD, and TI89/TI92/Voyage 200 too, you can use XCAS as a free compatible software with them.
    </p>

</div>


<?php
WritePageFoot();
?>
