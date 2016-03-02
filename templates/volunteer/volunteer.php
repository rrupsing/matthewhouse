<?php $this->layout('inner_template', ['title' => 'Matthew House | Refugee Reception Services Toronto', 'page'=>'volunteer', 'subpage' => 'volunteer']) ?>

<div id="content">
<div class="maincolbox" style='clear:both;' controller="1">
<div class="maincolcblock ywdblock_stacked">
<!--
<iframe src="http://www.matthewhouse.ca/wordpress/volunteers-we-need-you/" style="width: 90%; height: 600px"
scrolling="no" marginwidth="0" marginheight="0" frameborder="0" vspace="0" hspace="0">
</iframe>
-->

<?php
	
	include('../wordpress/wp-load.php'); 
	$page = get_page_by_title('Volunteers');
	echo $page->post_content;
?>

</div>
<div class="maincolbox" style='clear:both;' controller="1">
<div class="maincolcblock ywdblock_coords">
<div class="wp" style='top:205px;left:841px;position:absolute;' id='ywdautoformat0'><p><a target="_blank" href="http://www.canadahelps.org/CharityProfilePage.aspx?charityID=s80711"><img width="143" height="44" alt="" src="site/ywd_trialsite_1564/assets/images/screen_shot_2012-08-02_at_5.45.09_pm.png" /></a>&nbsp;</p></div><div style="margin:0px;padding:0px;height:0px;clear:both;"></div>	
</div>
</div>
</div>
</td>
<td valign="top" class="rightcolsub">
<div id="contentrightcol">
</div>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
<td id="shadowvert" style="background-repeat:repeat-y;"></td>
</tr>