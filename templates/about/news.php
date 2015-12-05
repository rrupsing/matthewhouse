<?php $this->layout('inner_template', ['title' => 'Matthew House | Refugee Reception Services Toronto', 'sidebar'=>True, 'page'=>'about', 'subpage' => 'news']) ?>

<?php
	require("resources/news_manager.php");

	if (!isset($_POST['yearlimit']))
		$year = "2015";
	else
		$year = $_POST['yearlimit'];

	$articles = NewsManager::getNewsForYear($year);
	$years = NewsManager::getYears();
?>

<div id="content">
<div class="maincolbox" style='clear:both;' controller="1">
<div class="maincolcblock ywdblock_stacked">
<div class="wp"><h5><span style="color: rgb(0, 121, 193);">MATTHEW HOUSE NEWS</span></h5></div><div style="margin:0px;padding:0px;height:0px;clear:both;"></div>	
</div>
</div>
<div class="maincolbox" style='clear:both;' controller="1">
<div class="maincolcblock ywdblock_stacked">
<div class="nwp">
<div class="ywdnewsmanager">
<div class="ywdnews">
<form action="page.php?p=about&s=news" method="post">
<select name="yearlimit" onchange="this.form.submit()">
<?php
	foreach ($years as $key => $value)
	{
		if ($key == $year)
		{
			echo "<option value=\"$key\" selected=\"selected\">$key</option>";
			$articles = $value;
		}
		else
			echo "<option value=\"$key\">$key</option>";
	}
?>
</select>
<noscript><input type="submit" value="Submit"></noscript>
</form>
<p></p>

<?php
	foreach ($articles as $key => $value)
	{
		?>
		<div class="ywdnewsmanager">
		<div class="ywdnewsitem">
		<table class="newslist" border="0">
		<tr>
		<td class="newsdate"><?php echo $key;?></td>
		<td class="newsheadline">
			<a href="page.php?p=about&s=news_article&article=<?php echo $key;?>"><?php echo $value;?></a></td>
		</tr>
		</table>
		</div>
		</div>
<?php
	}
?>
</div>
</div>
<div style="margin:0px;padding:0px;height:0px;clear:both;"></div>
<!-- Google Search Result Snippet Ends -->
</div>	
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