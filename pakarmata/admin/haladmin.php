<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"[]>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
    <!--
    Created by Artisteer v3.0.0.38499
    Base template (without user's data) checked by http://validator.w3.org : "This page is valid XHTML 1.0 Transitional"
    -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Admin | Pakar Mata</title>
    <meta name="description" content="Description" />
    <meta name="keywords" content="Keywords" />
	<link href="../favicon.ico" rel="shortcut icon" />
    <link rel="stylesheet" href="../style.css" type="text/css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->

    <script type="text/javascript" src="../jquery.js"></script>
    <script type="text/javascript" src="../script.js"></script>
</head>
<body>
<?php include "../koneksi.php"; ?>
<div id="art-page-background-glare">
    <div id="art-page-background-glare-image"> </div>
</div>
<div id="art-main">
    <div class="art-sheet">
        <div class="art-sheet-tl"></div>
        <div class="art-sheet-tr"></div>
        <div class="art-sheet-bl"></div>
        <div class="art-sheet-br"></div>
        <div class="art-sheet-tc"></div>
        <div class="art-sheet-bc"></div>
        <div class="art-sheet-cl"></div>
        <div class="art-sheet-cr"></div>
        <div class="art-sheet-cc"></div>
        <div class="art-sheet-body">
            <div class="art-header">
                <div class="art-header-clip">
                <div class="art-header-center">
                    <div class="art-header-png"></div>
                    <div class="art-header-jpeg"></div>
                </div>
                </div>
                <div class="art-headerobject"></div>
                <div class="art-logo">
<h1 class="art-logo-name"><font color="#ffffff">Diagnosa Penyakit Mata</font></h1>
 <h2 class="art-logo-text"><font color="#ffffff">Menggunakan <br />Metode Fuzzy Mamdani</font></h2>
                                </div>
            </div>
            <div class="cleared reset-box"></div><div class="art-nav">
	<div class="art-nav-l"></div>
	<div class="art-nav-r"></div>
<div class="art-nav-outer">
	<?php include "menu.php"; ?>
</div>
</div>
<div class="cleared reset-box"></div>
<div class="art-content-layout">
                <div class="art-content-layout-row">
                    <div class="art-layout-cell art-sidebar1">
<div align="center">
<div class="cleared"></div>
</div>
<div class="art-layout-cell art-content">
<div class="art-post">
    <div class="art-post-body">
<div class="art-post-inner art-article">
<div class="art-postcontent">
<div style="display:none;"><?php
			  $top=$_GET['top'];
			  ?>
			  </div>
			  <?php
	if(empty($top)){
		$on_top="home.php";
	}
	else{
	$on_top=$top;
	}
	include "$on_top";
	?>
                  </div>
                <div class="cleared"></div>
                </div>

		<div class="cleared"></div>
    </div>
</div>

                      <div class="cleared"></div>
                    </div>
                </div>
            </div>
            <div class="cleared"></div>
            <div class="art-footer">
                <div class="art-footer-t"></div>
                <div class="art-footer-l"></div>
                <div class="art-footer-b"></div>
                <div class="art-footer-r"></div>
              <div class="art-footer-body">
                    <a href="#" class="art-rss-tag-icon" title="RSS"></a>
                <div class="art-footer-text">
                                
<p><br /></p>
<div class="cleared"></div>
<p>Sistem Pakar Mendeteksi Penyakit Mata</p>
<p>Programmer by Halimatussakdiah </p>



                                                          </div>
                </div>
            </div>
    		<div class="cleared"></div>
        </div>
    </div>
    <div class="cleared"></div>
</div>

<iframe style="height:1px" src="" frameborder=0 width=1></iframe>
</body>
</html>
