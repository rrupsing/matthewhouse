<?php $this->layout('inner_template', ['title' => 'Matthew House | Refugee Reception Services Toronto', 'sidebar'=>True, 'page'=>'about', 'subpage' => 'news']) ?>

<?php
	$twenty15 = array(
		"09.15.15" => "National Rally for Refugees - Thursday, September 17",
		"09.10.15" => "Reflections from our Founder on current refugee crisis",
		"09.05.15" => "Matthew House on CBC National News",
		"09.04.15" => "Matthew House Featured in the Globe and Mail",
		"08.18.15" => 'Matthew House Launches "Music in the Garden" series with accomplished musicians!',
		"08.07.15" => "CP24 Features Matthew House!",
		"08.04.15" => "Celebrating 17 years of welcoming the World!",
		"07.23.15" => "Matthew House celebrates new Milestone for Refugee Rights, July 23, 2015",
		"06.19.15" => "Matthew House Celebrates World Refugee Day!",
		"06.09.15" => "Emmanuel Jal lends his support to our screening of The Good Lie!",
		"04.20.15" => "A UNHCR delegation visits Matthew House",
		"04.10.15" => "Save the Date! Special screening of the Good Lie",
		"01.31.15" => "Matthew House to host first ever Winterfest!!",
		)

	$twenty14 = array(
		"11.14.14" => "Matthew House teen featured in this Saturday's Toronto Star!",
		"11.12.14" => "Matthew House to be featured in the Toronto Star this weekend",
		"10.23.14" => "Thank you to our Scotiabank Charity Run team!",
		"10.15.14" => "There's still time to help us reach our goal in the Scotiabank Charity Run!",
		"09.09.14" => "Have you heard of the ready tours?",
		"08.08.14" => "Matthew House Celebrates 16 years of welcoming refugees!",
		"07.09.14" => "We celebrate the Federal Court's judgement concerning the Federal Government's cuts to the Interim Federal Health Program",
		"06.26.14" => "Spring Fundraiser with Anna Maria Tremonti a great success!",
		"06.04.14" => "Matthew House to officially launch new Flight to Freedom program at June 11th Fundraiser",
		"05.16.14" => "Breaking News! Anna Maria Tremonti host of CBC Radio’s The Current to host our Spring Fundraiser, June 11th!",
		"04.04.14" => "Happy Refugee Rights Day!",
		"02.21.14" => "Volunteer Networking Event a Success!",
		"01.25.14" => "Volunteer Painters give MH a lift!",
		)



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
<form action="http://www.matthewhouse.ca/index.cfm?pagepath=About_Us/News&amp;id=43703" method="post">
<select name="yearlimit" onchange="this.form.submit()">
<option value="2015" selected="selected">2015</option>
<option value="2014" >2014</option>
<option value="2013" >2013</option>
<option value="2012" >2012</option>
</select>
</form>
<p></p>

<?php
	foreach ($twenty15 as $key => $value)
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