<?php

include_once("db_connect.php");

if(!$ptitle) $ptitle = $default_header;

// get cats
$cats = array();
$get_cats = mysql_query("SELECT categorytitle FROM categories ORDER BY categorytitle");
while($row = mysql_fetch_array($get_cats)) {
  $cats[] = $row[categorytitle];
}

?>

<html>
<head>
<title><?php echo $ptitle; ?> - <?php echo $site_name; ?></title>
    <META http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <META NAME="keywords" CONTENT="<?php echo $pkeys; ?>, pork chop recipe, recipe, salmon recipe, slow cooker recipe, smoothie recipe, weight watcher recipe, ">
    <META NAME="description" CONTENT="<?php echo $pdesc; ?> <?php echo $site_url; ?>. Over 23,000 free recipes online now.">
    <meta name="revisit-after" content="1 days">
	<link rel="stylesheet" href="http://<?php echo $site_url; ?>/styles.css" type="text/css">
</head>
<BODY BGCOLOR=#FFFFFF LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0 rightmargin="0" bottommargin="0" background="http://<?php echo $site_url; ?>/images/back-body.jpg" style="background-repeat:repeat-x;background-position:top left">
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
<tr>
    <td background="http://<?php echo $site_url; ?>/images/back-1.jpg" style="background-repeat:no-repeat;background-position:top left">
		<table width="776" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td height="122">
				<table width="100%" height="100%"  border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td align="left" valign="top" style="padding-top:59px;padding-left:178px;">
						<strong><?php echo $logo_slogan; ?></strong>
					</td>

					<td width="133" valign="top" style="padding-top:31px ">

					</td>
				</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td height="31" style="padding-left:19px;color:#FFFFFF">
			  <table width="100%" cellspacing="0" cellpadding="0">
				<form style="margin:0px" action="http://<?php echo $site_url; ?>/search.html">
				<tr><td style="color:#FFFFFF">
					<img src="http://<?php echo $site_url; ?>/images/b-1.jpg" width="5" height="9"> welcome to <a href="http://<?php echo $site_url; ?>/index.html" style="color:#ffffff;"><?php echo $site_url; ?></a>
					</td><td align="right" style="color:#FFFFFF">
					<img src="http://<?php echo $site_url; ?>/images/b-2.jpg" width="21" height="20" align="absmiddle"> <input type="text" name="criteria" style="width:190px;height:17px;font-size:11px;border-color:#396C0C;border-style:solid;border-width:1px" align="absmiddle" value="<?php echo $criteria; ?>">
					<input type="image" src="http://<?php echo $site_url; ?>/images/search.jpg" align="absmiddle" border="0">&nbsp;&nbsp;
				</td></tr>
				</form>
			  </table>
			</td>
		</tr>