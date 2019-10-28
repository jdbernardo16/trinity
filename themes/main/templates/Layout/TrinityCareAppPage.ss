<div class="app_frame1">
	<div class="vector1 staggerflipx_hldr" style="background-image: url('$ThemeDir/images/appvector.png');">
		<div class="benzene4 staggerflipx animated" style="background-image: url('$ThemeDir/images/stet2.png');"></div>
		<div class="benzene3 staggerflipx animated" style="background-image: url('$ThemeDir/images/med.png');"></div>
		<div class="benzene6 staggerflipx animated" style="background-image: url('$ThemeDir/images/leaf2.png');"></div>
		<div class="benzene2 staggerflipx animated" style="background-image: url('$ThemeDir/images/heart.png');"></div>
		<div class="benzene staggerflipx animated" style="background-image: url('$ThemeDir/images/toppiat.png');"></div>
		<div class="benzene5 staggerflipx animated" style="background-image: url('$ThemeDir/images/rightside.png');"></div>
		<div class="app_frame1-content staggerfade_hldr">
			<div class="app_frame1-title m-margin-b staggerfade">
				<h2>$F1Title</h2>
			</div>
			<div class="app_frame1-desc m-margin-b staggerfade">
				<p>$F1Desc</p>
			</div>
			<div class="download-title staggerfade">
				<p>$DownloadText</p>
			</div>
			<div class="inlineBlock-parent staggerfade">
				<div class="img-btn-hldr play">
					<a href="$playstorelink" target="_blank">
						<img src="$googleicon.URL" alt="">
					</a>
				</div
				><div class="img-btn-hldr">
					<a href="$appstorelink" target="_blank">
						<img src="$appleicon.URL" alt="">
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="app_frame2">
	<div class="video-hldr">
		<iframe width="100%" height="100%" src="$VideoLink" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>
</div>
<div class="app_frame3 staggerrotate_hldr">
	<div id="ben1" class="benzene staggerrotate animated" style="background-image: url('$ThemeDIr/images/benzene1.png');"></div>
	<div id="ben2" class="benzene staggerrotate animated" style="background-image: url('$ThemeDIr/images/stethoscope1.png');"></div>
	<div id="ben4" class="benzene staggerrotate animated" style="background-image: url('$ThemeDIr/images/gleaf.png');"></div>
	<div id="ben3" class="benzene staggerrotate animated" style="background-image: url('$ThemeDIr/images/benzene3.png');"></div>
	<div class="phone" style="background-image: url('$ThemeDIr/images/iphone6.png');"></div>

	<div class="frm-cntnr width--70">
		<div class="content-hldr">
			<% loop $AppDetails %>
			<div class="content-slider">
				<div class="content-title s-margin-b">
					<h2 class="green">$Title</h2>
				</div>
				<div class="content-desc">
					<p>$Desc</p>
				</div>
			</div>
			<% end_loop %>
		</div>
	</div>
</div>
<div class="app_frame4">
	<div class="app_frame4-bg" style="background-image: url('$ThemeDir/images/appfoot.png');">
	</div>
	<div class="frm-cntnr width--70">
			<div class="vertical-parent">
				<div class="vertical-align">
					<div class="inlineBlock-parent staggerjack_hldr">
						<% loop Trinities %><div class="trinity_hldr">
							<div class="icon-hldr">
								<div class="icon staggerjack animated" style="background-image: url('$Image.URL');"></div>
							</div>	
							<div class="icon-name">
								<p>$Title</p>
							</div>
							<div class="icon-desc">
								<p>$Desc</p>
							</div>
						</div
						><% end_loop %>
					</div>
				</div>
			</div>
		</div>
</div>