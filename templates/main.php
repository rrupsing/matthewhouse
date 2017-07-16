<?php $this->layout('template', ['title' => 'Matthew House | Refugee Reception Services Toronto']) ?>

<?php 
include('../wordpress/wp-load.php'); 

// Get the last 10 posts
// Returns posts as arrays instead of get_posts' objects
$recent_posts = wp_get_recent_posts(array(
	'numberposts' => 3
));

?>



										<table id="outercontenttable" width="100%" border="0" cellspacing="0" cellpadding="0">
											<tr>
												<td>
													<div id="cse" style="width:100%;display:none;"></div>
													<div id="contentheaderhome">
														<div style="margin: 0px; padding: 0px; height: 0px; clear: both;"></div>
														<table align="left" class="contenttable" border="0" cellspacing="0" cellpadding="0">
															<tr>
																<td class="leftcol">
																	<div id="contentleftcol">
																		<div class="leftcolbox" style='clear:both;' controller="1">
																			<div class="leftcolcblock ywdblock_stacked">
																				<div class="nwp">
																					<div id="video-placeholder"></div>
																					<script src="https://www.youtube.com/iframe_api"></script>
																					<script>
																						var player;

																						function onYouTubeIframeAPIReady() {
																						    player = new YT.Player('video-placeholder', {
																						        width: 300,
																						        height: 200,
																						        videoId: 'tE_Vh4DOXG4',
																						        playerVars: {
																						            color: 'black'
																						        },
																						        events: {
																						            onReady: initialize
																						        }
																						    });
																						}				
																						function initialize() {

																						}																	
																					</script>
																					<!--
																					<object width="300" height="200" type="application/x-shockwave-flash"
																					data="http://www.youtube.com/v/tE_Vh4DOXG4?&showinfo=0&rel=0">
																					<param name="movie" value="http://www.youtube.com/v/tE_Vh4DOXG4"></param>
																					<param name="allowscriptaccess" value="always"></param>
																					<param name="allowFullScreen" value="true"></param>
																					</object>
																					-->
																					<!--
																					<div id="ywdcblock125862" class="ywdyoutubevideobox" style="width:300px;height:200px;">
																						<div id="ywdcblock125862_video" style="display:none;">
																							<iframe id="ywdcblock125862_videoframe" width="300" height="200" src="http://www.youtube.com/v/tE_Vh4DOXG4?rel=0&html5=1&amp;" frameborder="0" allowfullscreen></iframe>
																						</div>
																						<div id="ywdcblock125862_still" style="position:relative;left:0px;top:0px;">
																							<div class="ywdyoutubevideostill" style="position:relative;top:0px;left: 0px;">
																								<img src="site/ywd_trialsite_1564/assets/images/Landing-page_video-photo.jpg" alt="Video still frame" style="width:300px;height:200px;" onclick="document.getElementById('ywdcblock125862_still').style.display='none';document.getElementById('ywdcblock125862_video').style.display='block';document.getElementById('ywdcblock125862_videoframe').src='http://www.youtube.com/embed/tE_Vh4DOXG4?rel=0&amp;&amp;autoplay=1';">
																							</div>
																							<div class="ywdyoutubevideostill" style="position:absolute;top:32px; left:82px;width:136px;">
																								<img src="site/master/admin/applications/youtube/youtube_play_circle_large.png" alt="Play button" onclick="document.getElementById('ywdcblock125862_still').style.display='none';document.getElementById('ywdcblock125862_video').style.display='block';document.getElementById('ywdcblock125862_videoframe').src='http://www.youtube.com/v/tE_Vh4DOXG4?rel=0&amp;&amp;autoplay=1';">
																							</div>
																						</div>
																					</div>
																					-->
																					<div style="margin:0px;padding:0px;height:0px;clear:both;"></div>
																					<!-- Google Search Result Snippet Ends -->
																				</div>	
																			</div>
																		</div>
																		<div class="leftcolbox" style='clear:both;' controller="1">
																			<div class="leftcolcblock ywdblock_stacked">
																				<div class="wp"><h3>&nbsp;</h3>
																					<h3>&nbsp;</h3>
																					<h3>WHO WELCOMES THE<br />
																						THOUSANDS OF HOMELESS REFUGEES<br />
																						<span style="color: rgb(255, 255, 255); ">THAT ARRIVE IN CANADA?</span></h3>
																						<p>&nbsp;</p>
																						<h4><span style="color: rgb(255, 255, 255); ">Matthew House is a community of 3 homes in central<br />
																							Toronto that welcomes and assists newly arrived<br />
																							refugee claimants offering HOPE at the end of their<br />
																							long journey on the refugee highway.</span></h4>
																							<p>&nbsp;</p>
																							<p><img alt="" height="0" src="site/ywd_trialsite_1564/assets/images/spacer.jpg" width="0" /></p></div><div style="margin:0px;padding:0px;height:0px;clear:both;"></div>	
																						</div>
																					</div>
																					<div class="leftcolbox" style='clear:both; margin-bottom: 20px;' controller="1">
																						<div class="leftcolcblock ywdblock_stacked">
																							<div class="wp"><h3><span style="color: rgb(0, 121, 193);">NEWS</span></h3></div><div style="margin:0px;padding:0px;height:0px;clear:both;"></div>	
																						</div>
																					</div>
																						<div class="leftcolcblock ywdblock_stacked">
																							<div class="nwp">
																								<div class="ywdnewsmanager">
																									<div class="ywdnews">
																										<?php
																											foreach ($recent_posts as $post)
																											{
																										?>
																												<div class="ywdnewsmanager">
																													<div class="ywdnewsitem">
																														<div style="padding-bottom:0.5em;">
																															<?php echo date_format(date_create(substr($post['post_date'], 0, 10)), 'M-d');?>
																															<a href="<?php echo post_permalink( $post['ID'] );?>" target="_blank">
																																<?php echo $post['post_title'];?>
																															</a>
																														</div>
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
<div class="leftcolbox" style='clear:both;' controller="1">
	<div class="leftcolcblock ywdblock_stacked">
		<div class="wp" style='z-index:4;' id='ywdautoformat0'><h5><span style="color: rgb(0, 95, 140);">FACTS ON&nbsp;REFUGEES</span></h5>

																		<h6 style="margin-top: 0"><span style="color: rgb(0, 153, 153);">Canada</span></h6>
																		<p><span style="color: rgb(0, 153, 153);">Refugees come to Canada in three different ways. Traditionally about 7,000 refugees per year are sponsored by the government. This year the Syrian influx is a special exception and could result in an additional 25,000 or more arrivals. Another 3,000 per year are sponsored by private groups, such as churches.&nbsp;Historically the largest group, which recently numbered more than 15,000 per year, come to Canada as refugee claimants. This is the group whom Matthew House serves</span></p>
																		<p><span style="color: rgb(0, 153, 153);">There is no system in place to welcome or assist refugee claimants. They are simply numbered among the homeless, often without resources. Many are forced to look for help in inappropriate city shelters not equipped to meet their needs. Government policies are becoming harsher and there is no structure in place to directly look after their well-being. Despite having reached a safe country, they are at risk of being victimized and traumatized again. Matthew House serves this group of vulnerable refugee claimants.</span></p>
																		<p><span style="color: rgb(0, 153, 153);">Learn more at the&nbsp;</span><a href="http://ccrweb.ca/"><span style="color: rgb(0, 95, 140);">Canadian Council for Refugees</span></a>&nbsp;<span style="color: rgb(0, 153, 153);">website.</span></p>


			<h6><span style="color: rgb(0, 153, 153);">World</span></h6>
			<p><span style="color: rgb(0, 153, 153);">The United Nations High Commission for Refugees puts the current number of refugees and forcibly displaced people around the world at&nbsp;51.2 million. No one becomes a refugee by choice&mdash;they are forced to flee to save their lives or preserve their freedom. They begin a long journey of danger and uncertainty on the refugee highway, seeking safety and security.</span></p>
			<p><span style="color: rgb(0, 153, 153);">Learn more about the following International Organizations:</span><br />
				<a href="http://www.unhcr.org/"><span style="color: rgb(0, 102, 153);">United Nations High Commissioner for Refugees</span></a><br />
				<a href="http://www.ohchr.org/EN/Pages/WelcomePage.aspx"><span style="color: rgb(0, 102, 153);">United Nations High Commissioner for Human Rights</span></a><br />
				<a href="http://www.iom.int/jahia/Jahia/lang/en/pid/1"><span style="color: rgb(0, 102, 153);">International Organization for Migration</span></a></p>
				</div><div style="margin:0px;padding:0px;height:0px;clear:both;"></div>	
			</div>
		</div>
		<div class="leftcolbox" style='clear:both;' controller="1">
			<div class="leftcolcblock ywdblock_stacked">
				<div class="wp"></div><div style="margin:0px;padding:0px;height:0px;clear:both;"></div>	
			</div>
		</div>
	</div>
</td>
<td class="contentmaincol">
	<div id="content">
		<div class="maincolbox" style='clear:both;' controller="1">
			<div class="maincolcblock ywdblock_stacked">
				<div class="wp"></div><div style="margin:0px;padding:0px;height:0px;clear:both;"></div>	
			</div>
		</div>
		<div class="maincolbox" style='clear:both;' controller="1">
			<div class="maincolcblock ywdblock_coords">
				<div class="wp" style='top:240px;right:54px;position:absolute;' id='ywdautoformat0'><h1>20,000+</h1>
					<h2><span style="color: rgb(255, 255, 255);">REFUGEES SOUGHT ASYLUM<br />
						IN CANADA LAST YEAR.</span></h2>
						<h2><span style="color: rgb(255, 227, 51);">YOU CAN MAKE A DIFFERENCE.</span></h2>
						<p><img alt="" height="12" src="site/ywd_trialsite_1564/assets/images/dotted-line-2.png" width="190" /></p>
						<p><a href="page.php?p=about&s=story"><img alt="" height="91" src="site/ywd_trialsite_1564/assets/images/our-story-button.png" width="91" /></a>&nbsp; &nbsp; &nbsp;<a href="page.php?p=about&s=newsletter" target="_self"><img alt="" height="91" src="site/ywd_trialsite_1564/assets/images/newsletter-signup.png" width="91" /></a></p>
						<p><a href="page.php?p=volunteer&s=volunteer" target="_self"><img alt="" height="91" src="site/ywd_trialsite_1564/assets/images/Volunteer.png" width="91" /></a>&nbsp; &nbsp; &nbsp; <a href="page.php?p=donate&s=donate"><img align="bottom" alt="donations" height="91" src="site/ywd_trialsite_1564/assets/images/donations-button.png" width="91" /></a></p>
						<p><img alt="" height="12" src="site/ywd_trialsite_1564/assets/images/dotted-line-2.png" width="190" /></p>
						<p><img alt="" height="58" src="site/ywd_trialsite_1564/assets/images/connect-w-us-white.png" width="110" /><a href="https://www.facebook.com/mhouseto/"><img alt="" src="site/ywd_trialsite_1564/assets/images/fb-icon.png" /></a>&nbsp; &nbsp;<a href="https://twitter.com/mhouseto"><img alt="" src="site/ywd_trialsite_1564/assets/images/twitter-icon.png" /></a></p>
						<p><a href="https://www.facebook.com/mhouseto/" target="_blank"><img alt="" height="83" src="site/ywd_trialsite_1564/assets/images/fb-icon.png" style="display: none !important;" width="62" /></a><a href="https://twitter.com/mhouseto" target="_blank"><img alt="" height="81" src="site/ywd_trialsite_1564/assets/images/twitter-icon.png" style="display: none !important;" width="53" /></a></p></div><div style="margin:0px;padding:0px;height:0px;clear:both;"></div>	
					</div>
				</div>
				<div class="maincolbox" style='clear:both;' controller="1">
					<div class="maincolcblock ywdblock_coords">
						<div class="wp" style='top:775px;left:409px;position:absolute;' id='ywdautoformat0'></div><div style="margin:0px;padding:0px;height:0px;clear:both;"></div>	
					</div>
				</div>
				<div class="maincolbox" style='clear:both;' controller="1">
					<div class="maincolcblock ywdblock_stacked">
						<!--
						<div class="nwp">
							<script type="text/javascript" src="http://s3.amazonaws.com/downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">require(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us7.list-manage.com","uuid":"e4fd4c130035d860e9c4076e1","lid":"f791e9255d"}) })</script>
							<div style="margin:0px;padding:0px;height:0px;clear:both;"></div>
						</div>	
						-->
					</div>
				</div>
				<div class="maincolbox" style='clear:both;' controller="1">
					<div class="maincolcblock ywdblock_coords">
						<div class="wp" style='top:800px;left:459px;position:absolute;' id='ywdautoformat0'>
							<p>
							<!--
							<a target="_blank" href="https://www.canadahelps.org/en/charities/matthew-house-refugee-reception-services-toronto/events/matthew-house-presents/">
								<img width="500px" alt="" src="site/ywd_trialsite_1564/assets/images/MatthewHousePresentsLogo.png"/></a>
							-->
							<!--
							<a target="_blank" href="http://www.matthewhouse.ca/matthewhouse/resources/files/2016wintercatalogue_giftofhope.pdf">
								<img alt="" src="site/ywd_trialsite_1564/assets/images/giftofhope_banner-1.jpg" style="width: 513px; height: 190px;" />
							</a>
						-->
							<!--
							<script id="ch_cdn_embed" type="text/javascript" data-page-id="29049" data-cfasync="false" src="https://www.canadahelps.org/services/wa/js/apps/donatenow/embed.min.js"></script>
							-->
							<a target="_blank" href="http://www.matthewhousepresents.com/">
								<img alt="" src="site/ywd_trialsite_1564/assets/images/MatthewHousePresents.png" style="height: 215px;" />
							</a>
							<p>
								Get your tickets <a href="http://www.matthewhousepresents.com/">here</a>.
							</p>

							</p>
						</div>
					<div style="margin:0px;padding:0px;height:0px;clear:both;">
				</div>	
					</div>
				</div>
			</div>
		</td>
		<td valign="top" class="rightcol">
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
