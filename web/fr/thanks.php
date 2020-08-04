<?php

include("../page.inc.php");
include("submenu.inc.php");

WritePageHead("GIAC/XCAS/wxCAS", "Remerciements", $menuFR, $menuCommon, $submenu, $submenuThanks);
?>


<div class="sideBox">
    <h1>Remerciements</h1>
    <ul>
        <li><a href="#thx">Thanks to</a></li>
    </ul>
</div>


<div class="mainPage">

<h1 id="thx">Thanks to :</h1>

<ul>
    <li>Ren&eacute;e De Graeve for her interest, beta testing and documentation writing.</li>
    <li>Jose Manrique Lopez de la Fuente for his interest, Spanish translation of the documentation and on-line help, info about the FLVW library,
    Giac/xcas advertising. Have a look at his <b>SDA project</b>
    <a href="https://savannah.gnu.org/projects/sda/">English</a>, 
    <a href="http://www.asturlinux.org/~jsmanrique/sda/es/">Espanol</a></li>
    <li>Jean-Pierre Branchard (Giac on-line and exomaths), see his <a href="http://perso.wanadoo.fr/jean-pierre.branchard/">home site</a></li>
    <li>Carlos Enriqe Carleos Artime for doing the Debian packages and several fixes in the giac build process.</li>
    <li>Jean-Yves Avenard for the first Mac OS X port</li>
    <li>Dirk Eddelbuettel for including giac in his <a href="http://dirk.eddelbuettel.com/quantian.html">Quantian</a> scientific linux-live CD.</li>
    <li>the GiNaC crew for their interest, particulary R. Kreckel for doing the hard and annoying work of autoconfiguration/automake of giac.</li>
    <li>Joris van der Hoeven for texmacs and integration of the giac interface</li>
    <li>IREM de Grenoble for xcas testings in highschools, especially Mich&egrave;le Gandit and her class (Grenoble), Christianne Serret and her class (Crest), and for the Mac OS X port.</li>
    <li>Emilien Kia and Andreas Thillosen for the wxcas interface and numerous suggestions for giac, including parallel execution and the sourceforge project.</li>
    <li>All testers, especially (by alphabetic order) Frederic Faure, Bruno Patin, Juan Antonio Martinez Rojas, Nicolas Rosillo, ... sorry for those I forgot!</li>
</ul>

</div>


<?php
WritePageFoot();
?>