<?php

include("../page.inc.php");
include("submenu.inc.php");

WritePageHead("GIAC/XCAS/wxCAS", "Overview", $menuEN, $menuCommon, $submenu, $submenuIndex);
?>


<div class="sideBox">
    <h1>Overview</h1>
    <ul>
        <li><a href="#intro">Intro</a></li>
        <li><a href="#GIAC">GIAC</a></li>
        <li><a href="#XCAS">XCAS</a></li>
        <li><a href="#wxCAS">wxCAS</a></li>
    </ul>
</div>


<div class="mainPage">
    <h1 id="intro">Overview</h1>
    <p>GIAC/XCAS/wxCAS is a free computer algebra system for Windows, Mac OS X and Linux/Unix.
    It is available as a standalone software (using a graphical interface or directly through the console) or as a library in order to use it inside C++ programs.
    </p>
    <h1 id="GIAC">GIAC :</h1>
    <p>GIAC is a free computer algebra C++ library (under the GPL license).
    It is compatible with Maple and MuPAD and the TI89/TI92/Voyage200 pocket calculators.
    It permits to integrate computer algebra inside C/C++ programs.
    </p>
    <h1 id="XCAS">XCAS :</h1>
    <p>XCAS is a free software for Windows, Mac OS X and Linux/Unix.
    Based on the FLTK toolkit, it permits to do computer algebra, dynamic geometry, spreadsheet and programming.
    It is one of the interfaces for Giac.
    </p>
    <h1 id="wxCAS">wxCAS : </h1>
    <p>wxCAS is another free software for Windows/ Linux/Unix and Mac OS X.
    Based on the wxWidgets toolkit, it is designed to be the successor of XCAS, but it is still in early stage of development.
    </p>
</div>


<?php
WritePageFoot();
?>

