<?php

include("../../page.inc.php");
include("submenu.inc.php");

WritePageHead("XCAS", "Téléchargements", $menuFR, $menuXCAS, $submenu, $submenuDownload);
?>


<div class="sideBox">
    <h1>Téléchargements</h1>
    <ul>
        <li><a href="#win">Windows</a></li>
        <li><a href="#mac">MacOS</a></li>
        <li><a href="#linuxPC">Linux PC</a></li>
        <li><a href="#linuxBin">Linux binaires</a></li>
        <li><a href="#wince">Windows CE</a></li>
        <li><a href="#linuxarm">Linux ARM</a></li>
    </ul>
</div>


<div class="mainPage">
<h1>Téléchargement :</h1>

<h2 id="win">Xcas pour Windows</H2>
<p>T&eacute;l&eacute;chargez <a href="ftp://ftp-fourier.ujf-grenoble.fr/xcas/xcasinst.exe">l'installeur</a>,
cliquez sur le fichier t&eacute;l&eacute;charg&eacute; et suivez les instructions.
Pour une installation en r&eacute;seau, installez sur le lecteur r&eacute;seau (en g&eacute;n&eacute;ral <code>J:</code>) puis d&eacute;clarez 
<code>xcasfr.bat</code> dans la base de donn&eacute;es de logiciels.<br/>
Vous pouvez aussi effectuer l'installation de <code>xcas</code> par <a href="http://www-fourier.ujf-grenoble.fr/~parisse/win_fr.html">l'ancienne m&eacute;thode</a>. 
</p>

<h2 id="mac">Xcas pour Mac OS X</h2>
<p><a href="ftp://ftp-fourier.ujf-grenoble.fr/xcas/xcas_image.dmg.gz">Image disque xcas</a>, qui doit se decompresser, ensuite cliquer sur l'image disque puis sur xcas.
Si ce lien ne fonctionne pas, essayez <a href="http://perso.wanadoo.fr/bernard.parisse/stable/xcas_image.dmg.gz">celui-ci</a>.
Le premier portage sur mac OS X a &eacute;t&eacute; r&eacute;alis&eacute; par Jean-Yves Avenard, il peut etre t&eacute;l&eacute;charg&eacute;
<a href="ftp://ftp-fourier.ujf-grenoble.fr/xcas/oldbin/xcas-jya.sit">ici</a> (avec le fichier <a href="ftp://ftp-fourier.ujf-grenoble.fr/xcas/aide_cas">aide</a>
dans le meme r&eacute;pertoire, vous devriez pouvoir lancer xcas depuis le finder).
</p>
<p><b>Notes:</b><br />
Il semble que la derni&egrave;re version de xcas pour Mac ne fonctionne pas avec les versions les plus r&eacute;centes de Mac OS X.
Je devrais avoir bientot une machine r&eacute;cente pour fixer ce probl&egrave;me.
Vous pouvez en attendant utiliser <a href="ftp://ftp-fourier.ujf-grenoble.fr/xcas/oldbin/xcas_image.dmg.gz">l'ancienne version</a>.
</p>
<p>Il existe aussi une version en ligne de commande, cf. les instructions en anglais <a href="http://www-fourier.ujf-grenoble.fr/~parisse/giac.html#osx">ici</a>
</p>

<h2 id="linuxPC">Xcas pour Linux PC (paquetages rpm et deb)</h2>
<ul>
    <li> Paquetage RPM pour une distribution Linux
        <a href="ftp://ftp-fourier.ujf-grenoble.fr/xcas/giac-0.4.0-4-gcc32.i586.rpm">r&eacute;cente</a> (gcc 3.2)
        ou <a href="ftp://ftp-fourier.ujf-grenoble.fr/xcas/giac-0.4.0-4.i586.rpm">plus ancienne</a> (gcc 2.95).<br />
        Vous aurez besoin des paquetages libgsl0 et libpari.so.1 que vous pouvez vous procurer sur le site de rpmfind:
        <a href="http://rpmfind.net/linux/rpm2html/search.php?query=libgsl">GSL</a> et <a href="http://rpmfind.net/linux/rpm2html/search.php?query=libpari.so.1">pari</a>.
        Si vous avez une distribution ancienne sur laquelle libgsl ou libpari ne s'installent pas, r&eacute;cup&eacute;rez <a href="ftp://ftp-fourier.ujf-grenoble.fr/xcas/support/parigsl.tgz">parigsl.tgz</a>
        et installez-le par la commande<br />
        <code>mv -f parigsl.tgz /tmp && cd / && tar xvfz /tmp/parigsl.tgz</code>
    </li>
    <li>Paquetage Debian <a href="ftp://ftp-fourier.ujf-grenoble.fr/xcas/giac_0.4.0_i386.deb">grossier</a> mais avec toutes les fonctionnalit&eacute;s de xcas, 
        ou packages debians <a href="ftp://fisher.ciencias.uniovi.es/debian">propres</a> sans le tableur, maintenus par Carlos Enriqe Carleos Artime
    </li>
</ul>

<h2 id="linuxBin">Xcas pour Linux PC (binaires)</h2>
<p>Versions avec interface graphique pour <b>Linux</b> PC,
    <ul>
        <li>installable par <a href="ftp://ftp-fourier.ujf-grenoble.fr/xcas/xcas_root.tgz">l'administrateur syst&egrave;me</a><br />
            <code>cd / ; tar xvfz ~/xcas_root.tgz ; ldconfig </code><br />
            Si ce lien ne fonctionne pas, une autre version (mise &agrave; jour de temps en temps) se trouve
            <a href="http://perso.wanadoo.fr/bernard.parisse/stable/xcas_root.tgz">ici</a>.<br />
            Cette archive contient une version modifi&eacute;e de gnuplot, pour l'utiliser, modifiez votre <code>PATH</code> pour avoir
            <code>/usr/local/bin</code> avant <code>/usr/bin</code> ou effacez <code>/usr/bin/gnuplot</code>.
            Le programme se lance alors en tapant <code>xcas & </code>
        </li>
        <li>installable dans le <a href="ftp://ftp-fourier.ujf-grenoble.fr/xcas/xcas_user.tgz">r&eacute;pertoire courant</a> par la commande<br />
            <code>tar xvfz xcas_user.tgz</code><br />
            Modifiez le shell-script <code>~/xcas/xcas</code> pour que les chemins correspondent &agrave; votre installation.
            Le programme se lance en tapant <code>cd ~/xcas ; ./xcas & </code>.
        </li>
    </ul>
Les deux archives ci-dessus contiennent une version texte <code>giac</code>, utilisable directement ou dans une session
<a href="http://mupacs.sourceforge.net">emacs en mode mupad</a> (lire les instructions de mupacs, utiliser <code>giac --emacs</code>
comme programme &agrave; lancer au lieu de <code>mupad -E/-R ...</code>) ou dans une session
<a href="http://www.texmacs.org">texmacs</a>, dont voici deux copies d'&eacute;cran
<a href="http://www-fourier.ujf-grenoble.fr/~parisse/screen1.ps">trac&eacute; d'un graphe en 3-d</a> et
<a href="http://www-fourier.ujf-grenoble.fr/~parisse/screen2.ps">un exemple d'int&eacute;grale</a>. Enfin, <code>giac</code> peut aussi etre appel&eacute; depuis un document LaTeX, cf. cet
<a href="http://alexandre.boisseau.free.fr/calcul.tex">exemple</a> d'Alexandre Boisseau.
</p>

<h2 id="wince">Xcas pour Windows CE</h2>
<p>Binaire (batch-mode) pour <a href="ftp://ftp-fourier.ujf-grenoble.fr/xcas/xcasce.zip">windows CE (ARM-PE)</a>,
utilisant <a href="http://win-ce.voxware.com:28575/Development%20Tools/gnuwince.html">gnuwince</a>.
Copier cas.exe dans le Folder My Documents. Cr&eacute;er un fichier <code>Cas</code> avec Pocket Word au format txt, lancer cas.exe, les r&eacute;sultats se trouvent dans le fichier <code>Out</code>.
Vous pouvez aussi installer <a href="http://www.phatsoft.net/">Phatsoft qdCAS</a>, une petite interface r&eacute;alis&eacute;ee par Luca Martinetti.
</p>

<H2 id="linuxarm">Xcas pour Linux ARM</h2>
<p><a href="ftp://ftp-fourier.ujf-grenoble.fr/xcas/xcas_ipaq.tgz">Xcas ARM</a>
par exemple pour un iPaq avec Linux install&eacute;, &agrave; utiliser avec 
<a href="ftp://ftp-fourier.ujf-grenoble.fr/xcas/support/gnuplot_ipaq.tgz">gnuplot ARM</a>.
Il existe aussi une version en ligne de commande de <a href="ftp://ftp-fourier.ujf-grenoble.fr/xcas/giac_arm.gz">giac ARM</a>.
</p>

</div>


<?php
WritePageFoot();
?>
