<?php


//$globalpath = "http://localhost/xcas";
$globalpath = "http://xcas.sourceforge.net";

$menuFR = array("<a href=\"$globalpath/fr/\">Commun</a>",
                "<a href=\"$globalpath/fr/GIAC/\">GIAC</a>",
                "<a href=\"$globalpath/fr/XCAS/\">XCAS</a>",
                "<a href=\"$globalpath/fr/wxCAS/\">wxCAS</a>");

$menuEN = array("<a href=\"$globalpath/en/\">Common</a>",
                "<a href=\"$globalpath/en/GIAC/\">GIAC</a>",
                "<a href=\"$globalpath/en/XCAS/\">XCAS</a>",
                "<a href=\"$globalpath/en/wxCAS/\">wxCAS</a>");

$menuCommon  = 0;
$menuGIAC    = 1;
$menuXCAS    = 2;
$menuwxCAS   = 3;


function WritePageHead($title, $subtitle, $menu, $menuID, $submenu, $submenuID)
{
    global $globalpath;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

<head>
    <meta http-equiv="content-type" content="application/xhtml+xml; charset=ISO-8859-15" />
    <meta name="author" content="Emilien KIA" />
    <meta name="generator" content="SciTE - Scintilla Text Editor" />
    <link rel="stylesheet" type="text/css" href="<?php echo $globalpath;?>/style/gris.css" title="Gris" />
    <link rel="stylesheet" type="text/css" href="<?php echo $globalpath;?>/style/bleu.css" title="Bleu" />
    
    <title><?php echo $title;?></title>
</head>

<body>

    <!-- ###### Header ###### -->

    <div class="header">
        <img class="logo" src="<?php echo $globalpath;?>/img/xcas.png" alt="Logo XCAS" />
        <div class="title">
            <?php echo $title;?>
        </div>
        <div class="subtitle">
            <?php echo $subtitle;?>
        </div>
      
      <div class="menu">
      <ul>
<?php
        for($n=0; $n<sizeof($menu);$n++)
        {
            if($n==$menuID)
                echo "<li class=\"hilight\"> $menu[$n] </li>\n";
            else
                echo "<li> $menu[$n] </li>\n";
        }
?>
      </ul>
      </div>

      <div class="submenu">
      <ul>
<?php
        for($n=0; $n<sizeof($submenu);$n++)
        {
            if($n==$submenuID)
                echo "<li class=\"hilight\"> $submenu[$n] </li>\n";
            else
                echo "<li> $submenu[$n] </li>\n";
        }
?>
      </ul>
      </div>

    </div>

<?php
}










function WritePageFoot($text="")
{
?>
    <div style="vertical-align: bottom;">

    <div class="sideBox">
        <h2>Conformité W3C</h2>
        <p>Ce site tente d'être conforme aux normes du <a href="http://w3.org">W3C</a>.</p>
        <ul>
            <li><a href="http://validator.w3.org/check?uri=referer"><img src="http://www.w3.org/Icons/valid-xhtml11" alt="Valid XHTML 1.1!" height="31" width="88" /></a></li>
            <li><a href="http://jigsaw.w3.org/css-validator/"><img src="http://jigsaw.w3.org/css-validator/images/vcss" alt="Valid CSS!" /></a></li>
        </ul>
        <h2>SourceForge.net</h2>
        <p>Projet hébergé par <a href="http://sourceforge.net/projects/xcas/"><img src="http://sourceforge.net/sflogo.php?group_id=99306&amp;type=2" width="125" height="37" alt="SourceForge.net Logo" /></a>
        </p>

    </div>
    
    </div>


    <div class="mainPage">
<?php
    if($text!="")
        echo "      <p>$text</p>\n";
?>
        <p>
        Icones basé sur le thème <a href="http://kde-look.org/content/show.php?content=17362">Gartoon</a>.
        </p>
    </div>
      
    
  </body>
</html>
<?php
}

?>