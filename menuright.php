					<td width="200" height="100%" valign="top">
						<table width="200" height="100%"  border="0" cellspacing="0" cellpadding="0" background="http://<?php echo $site_url; ?>/images/back-text-4.jpg">
						<tr><td height="23" background="http://<?php echo $site_url; ?>/images/text-4.jpg" style="background-repeat:no-repeat;background-position:top;color:#FFFFFF;padding-top:2px;padding-right:0px" align="center"><strong>RECIPE SEARCH ENGINE</strong></td>
						</tr>
						<tr>
							<td style="padding-top:8px;padding-left:8px;line-height:14px;padding-bottom:18px;padding-right:0px"> 
								<form style="margin:0px" action="http://<?php echo $site_url; ?>/search.html">
								<table width="100%"  border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td valign="top" style="padding-top:3px ">By category <br></td>
									<td width="110"><select name="category" style="width:110px;font-size:13px;margin-bottom:4px;margin-top:1px " >
									<option value="">- ALL -</option>
									<?php
								$i = 0;
								$rows = count($cats);
								while($i < $rows){
										echo "<option value=\"$cats[$i]\"";
										if($category == $cats[$i]) echo " SELECTED";
										echo ">".UCWords($cats[$i])."</option>";
										$i++;
								}
									?>
									</select></td>
								</tr>
								<tr>
									<td colspan="2" style="padding-top:6px ">
										By recipe/ingredient name<br>
										<input type="text" name="criteria" style="width:110px;height:21px;font-size:11px;margin-top:1px;margin-right:5px"><input type="image" src="http://<?php echo $site_url; ?>/images/search-1.jpg" border="0" align="absmiddle">
									</td>
								</tr>
								</table>
								</form>								
							</td>
						</tr>
						<tr><td bgcolor="#727272"><img src="http://<?php echo $site_url; ?>/images/spacer.gif" width="1" height="1"></td></tr>
						<tr><td bgcolor="#FFFFFF"><img src="http://<?php echo $site_url; ?>/images/spacer.gif" width="1" height="7"></td></tr>
						
						<tr><td height="23" background="http://<?php echo $site_url; ?>/images/text-4.jpg" style="background-repeat:no-repeat;background-position:top;color:#FFFFFF;padding-top:2px;padding-right:0px" align="center"><strong>DESSERTS</strong></td></tr>
						<tr>
							<td height="10" valign="top" background="http://<?php echo $site_url; ?>/images/1-back-13.jpg" style="background-repeat:no-repeat;background-position:bottom;padding-top:11px;padding-left:10px;line-height:12px;padding-bottom:12px "> 
								Why not finish your meal with a delicious dessert?
								<div style=" padding-top:9px;padding-right:80px;padding-bottom:9px">Whether it's Cheesecake, Ice Cream or even a rich Chocolate Cake, you're bound to find something here! </div>
								<img src="http://<?php echo $site_url; ?>/images/b-5.gif" width="3" height="5" align="absmiddle" style="margin-right:3px"><strong ><a href="http://<?php echo $site_url; ?>/c-desserts.html"  style="color:#262626">Dessert List</a></strong>
							</td>
						</tr>						
						<tr><td bgcolor="#FFFFFF"><img src="http://<?php echo $site_url; ?>/images/spacer.gif" width="1" height="6"></td></tr>
						
						<tr><td height="23" background="http://<?php echo $site_url; ?>/images/text-4.jpg" style="background-repeat:no-repeat;background-position:top;color:#FFFFFF;padding-top:2px" align="center"><strong>RECENT SEARCHES</strong></td></tr>
						<tr>
							<td height="100%" valign="top" style="padding-top:12px;padding-left:10px;line-height:12px;padding-bottom:1px;padding-right:5px;"> 
								<strong>Most recent searches:</strong><br><br>
								<?php
								$temp5 = mysql_query("SELECT * FROM recent ORDER BY -id LIMIT 40");
								$search_string = "";
								while($row = mysql_fetch_array($temp5)) {
								  $newterm = strtolower($row[term]);
								  $newterm = substr($newterm, 0, 20);
								  $search_string .= "<a href=\"s-$newterm.html\">$newterm</a>, ";
								}
								if(strlen($search_string) > 0) $search_string = substr($search_string, 0, strlen($search_string)-2);
								echo $search_string;
								?><br><br>
							</td>
						</tr>		
						<tr><td bgcolor="#727272"><img src="http://<?php echo $site_url; ?>/images/spacer.gif" width="1" height="1"></td></tr>										
						<tr><td bgcolor="#FFFFFF"><img src="http://<?php echo $site_url; ?>/images/spacer.gif" width="1" height="8"></td></tr>						
						</table>