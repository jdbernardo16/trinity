<div class="abt_frame1">
	<div id="inside" class="abt_frame1-bg" style="background-image: url('$ThemeDir/images/vectorsub.png');">
		
	</div>
	<div id="outside" class="abt_frame1-bg" style="background-image: url('$F1BG.URL');">
			<div id="abt_frame1-desktop" class="frm-cntnr width--80">
				<div class="text-cntnr staggerup_hldr">
					<div class="text-bg"></div>
					<div class="abt_frame1-title staggerup">
						<h2 class="green">$F1Title</h2>
					</div>
					<div class="abt_frame1-desc staggerup">
						<p>$F1Desc</p>
					</div>
					<div class="btn-hldr staggerup">
						<a class="button" data-remodal-target="vid">
							Watch Video
						</a>
					</div>
				</div>
			</div>
	</div>

</div>

<div id="abt_frame1-mobile" class="frm-cntnr width--90">
	<div class="text-cntnr">
		<div class="text-bg"></div>
		<div class="abt_frame1-title m-margin-b staggerup">
			<h2 class="green">$F1Title</h2>
		</div>
		<div class="abt_frame1-desc l-margin-b staggerup">
			<p>$F1Desc</p>
		</div>
		<div class="btn-hldr staggerup">
			<a class="button" data-remodal-target="vid">
				Watch Video
			</a>
		</div>
	</div>
</div>

<div class="abt_frame2">
	<div class="icon-cntnr staggerscale_hldr">
		<div class="leaf-logo staggerscale" style="background-image: url('$ThemeDir/images/gleaf.png');"></div>
		<div class="stethoscope-logo staggerscale" style="background-image: url('$ThemeDir/images/stethoscope1.png');"></div>
		<div class="piatos-logo staggerscale" style="background-image: url('$ThemeDir/images/Group.png');"></div>
		<div class="right-logo staggerscale" style="background-image: url('$ThemeDir/images/right.png');"></div>
	</div>
	<div class="frm-cntnr width--80">
		<div class="inlineBlock-parent">
			<div class="left-side">
				<div class="vertical-parent">
					<div class="vertical-align">
						<div class="abt_frame2-title fadeIn">
							<h2 class="green">$F2Title</h2>
						</div>
					</div>
				</div>
			</div
			><div class="right-side">
				<div class="slider-hldr">
					<div class="abt_frame2-slider staggerfade_hldr">
						<% loop $Values %>
						<div class="values-hldr">
							<div class="value">
								<div class="image-hldr staggerfade">
									<div class="image" style="background-image: url('$Image.URL');"></div>
								</div>
								<div class="values-title">
									<p class="green">$Title</p>
								</div>
								<div class="values-desc">
									<p>
										$Desc
									</p>
								</div>
								<div class="continue-btn">
									<a data-remodal-target="values-{$ID}">Continue Reading</a>
								</div>
							</div>
						</div>
						<% end_loop %>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="abt_frame3">
	<div class="abt_frame3-bg" style="background-image: url('$F3BG.URL');"></div>
		<div class="card-hldr">
			<div class="card-slider staggerup_hldrl">
				<div class="card">
					<div class="card-title m-margin-b staggerupl">
						<h2 class="green">$VTitle</h2>
					</div>
					<div class="card-desc staggerupl">
						$VDesc
					</div>
				</div>
				<div class="card">
					<div class="card-title m-margin-b">
						<h2 class="green">$MTitle</h2>
					</div>
					<div class="card-desc">
						$MDesc
					</div>
				</div>
			</div>
		</div>
</div>

<% include VideoModal %>
<% include ValuesModal %>