<html>
<head>
    <title><?=$this->e($title)?></title>
</head>
<body>

<?php $this->insert('header', ['page'=>$this->e($page)]) ?>


<!-- overriding styles -->
<style type="text/css">
.contenttable, .contenttablesub {
	background-image:url(site/ywd_trialsite_1564/assets/images/white-square-background.jpg);
	background-position:top center;
	background-repeat:repeat;
}
.contentmaincol, .contentmaincolsub, .rightcol, .rightcolsub, .leftcol, .breadcrumbs, #contentfooter {
	background-color:transparent;
}
#contentfooter {
	background-color:#0079C1;
}
body {
	background-image:url(site/ywd_trialsite_1564/assets/images/ice_age__2X.jpg);
	background-position:top left;
	background-repeat:repeat;
	background-attachment:fixed;
}
</style>

<!-- content -->
<table id="outercontenttable" width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td>
			<div id="cse" style="width:100%;display:none;"></div>
			<table align="left" class="contenttablesub" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<?php 
						if ($this->e($sidebar))
						{
							echo '<td class="leftcol">';
							$this->insert($this->e($page) . '::side_menu', ['subpage' => $this->e($subpage)]);
							echo '</td>';
						}
					?>
					<td class="contentmaincolsub">
						<div id="page">
						    <?=$this->section('content')?>
						</div>

<?php $this->insert('footer') ?>

</body>
</html>