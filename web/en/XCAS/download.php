<?php

include("../../page.inc.php");
include("submenu.inc.php");

WritePageHead("XCAS", "Downloads", $menuEN, $menuXCAS, $submenu, $submenuDownload);
?>


<div class="sideBox">
    <h1>Downloads</h1>
    <ul>
        <li><a href="#sf">SourceForge.net</a></li>
    </ul>
</div>


<div class="mainPage">
    <h1 id="sf">SourceForge.net</h1>
    <p>
    All files can be found at <a href="http://sourceforge.net/project/showfiles.php?group_id=99306">SourceForge.net</a>.
    </p>
</div>


<?php
WritePageFoot();
?>
