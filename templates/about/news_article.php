<?php $this->layout('inner_template', ['title' => 'Matthew House | Refugee Reception Services Toronto', 'sidebar'=>True, 'page'=>'about', 'subpage' => 'news']) ?>

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

<!-- put news article here -->

<?php 
	$article = $_GET['article'];
	$this->insert("about/articles/$article");
?>

<table border="0" cellpadding="0" cellspacing="0">
<tr>
<td>
<a href="page.php?p=about&s=news" class="gobacklink"><img src="site/ywd_prototype/library/css/goback.gif" border="0"></a>
</td>
</tr>
</table>
</div>
</div>
<div style="margin:0px;padding:0px;height:0px;clear:both;"></div>


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