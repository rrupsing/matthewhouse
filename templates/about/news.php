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
		);

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
		);

	$twenty13 = array(
		"12.14.13" => "MH Director interviewed on Current Events Program Context",
		"12.02.13" => "MH Annual Christmas Party, Sat. Dec. 7th",
		"11.20.13" => "MH Executive Director is guest on CONTEXT with Lorna Dueck",
		"10.21.13" => "Great Run - and still time to support it!",
		"10.09.13" => "Former resident joins MH charity run team - you can too!",
		"09.20.13" => "New members join Matthew House staff team",
		"08.21.13" => "Summer camp a fantastic experience!!",
		"07.22.13" => "International Potluck on 15th Anniversary Date - August 6th",
		"06.15.13" => "15th Anniversary Gala - A Great Success!!",
		"05.25.13" => "Summer Student Job: Refugee Settlement Assistant",
		"05.22.13" => "In memory of Richard Woolger",
		"04.13.13" => "15th anniversary gala has growing roster of honoured guests. Join us June 12, 2013",
		"04.05.13" => "Matthew House celebrates Refugee Rights Day with passion",
		"04.04.13" => "Today is Canadian Refugee Rights Day!",
		"03.30.13" => 'Matthew House featured on CBC Radio "The World This Weekend"',
		"02.08.13" => "Diamond Jubilee Medal presented to Matthew House Executive Director",
		);

	$twenty12 = array(
		"12.13.12" => "Former Matthew House Board Chair, Clarence Webb remembered",
		"11.12.12" => "Website LAUNCH PARTY",
		"10.12.12" => "Ready to run in Charity Challenge this Sunday",
		"09.21.12" => "The 25:35 Campaign",
		"09.20.12" => "Final Charity Challenge Team Gathering",
		"09.19.12" => "Anne Woolger at SCBC",
		);

	if (!isset($_POST['yearlimit']))
		$year = "2015";
	else
		$year = $_POST['yearlimit'];
	$years = array(
		"2015" => $twenty15,
		"2014" => $twenty14,
		"2013" => $twenty13,
		"2012" => $twenty12);
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
	$articles = $twenty15;
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