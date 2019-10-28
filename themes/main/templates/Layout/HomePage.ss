<div class="hm_frame1">
	<div class="hm_frame1-vector" style="background-image: url('$ThemeDir/images/hm1vector.png')"></div>
	<div class="hm_frame1-bg" style="background-image: url('$F1BG.URL');">
		<div class="frm-cntnr staggerup_hldr">
			<div id="hm_frame1-desktop" class="inlineBlock-parent">
				<div class="left-side">
					<div class="text-cntnr">
						<div class="text-bg"></div>
						<div class="hm_frame1-title staggerup">
							<h1 class="green">$F1Title</h1>
						</div>
						<div class="hm_frame1-desc staggerup">
							<p>$F1Desc</p>
						</div>
					</div>
				</div
				><div class="right-side">
					
				</div>
			</div>
		</div>
		<div class="float-img-cntnr">
			<% include Honeycomb %>
		</div>
	</div>
</div>
<div id="hm_frame1-mobile" class="text-cntnr">
	<div class="hm_frame1-title staggerup m-margin-b">
		<h1 class="green">$F1Title</h1>
	</div>
	<div class="hm_frame1-desc staggerup">
		<p>$F1Desc</p>
	</div>
</div>
<div class="hm_frame2">
	<div class="hm_frame2-bg" style="background-image: url('$F2BG.URL')">
		<div id="hm_frame2-mobile" class="frm-cntnr staggerup_hldr1">
			<div class="vertical-parent">
				<div class="vertical-align">
					<div class="hm_frame2-text">
						<div class="hm_frame2-title staggerup1">
							<h2 class="green">$F2Title</h2>
						</div>
						<div class="hm_frame2-desc staggerup1">
							<p>$F2Desc</p>
						</div>
						<div class="button-hldr staggerup1">
							<a href="about-us" class="button">
								Know More
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="hm_frame2-desktop" class="frm-cntnr">
		<div class="vertical-parent">
			<div class="vertical-align">
				<div class="hm_frame2-text">
					<div class="hm_frame2-title staggerup1">
						<h2 class="green">$F2Title</h2>
					</div>
					<div class="hm_frame2-desc staggerup1">
						<p>$F2Desc</p>
					</div>
					<div class="button-hldr staggerup1">
						<a href="about-us" class="button">
							Know More
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="hm_frame3">
	<div class="frm-cntnr staggerup_hldr2">
		<div class="hm_frame3-title m-margin-b staggerup2">
			<h2 class="green">$F3Title</h2>
		</div>
		<div class="hm_frame3-desc staggerup2">
			<p>$F3Desc</p>
		</div>

		<div class="hm_frame3-slider-cntnr fadeIn">
			<div class="hm_frame3-slider">
				<% loop $FeaturedProducts %>
				<div class="card-cntnr">
					<div class="card">
						<% if $New %>
						<div class="newtag">
							<p>New</p>
						</div>
						<% end_if %>
						<div class="image-cntnr">
							<% loop ProductImages.limit(1) %>
							<div class="image" style="background-image: url('$Image.URL');"></div>
							<% end_loop %>
						</div>
						<div class="product-name">
							<p>$Name</p>
						</div>
						<div class="product-desc">
							<p>$teaser</p>
						</div>
						<div class="button-hldr">
							<a href="$Link" class="button">
								View Details
							</a>
						</div>
					</div>
				</div
				><% end_loop %>
			</div>
		</div>
		<div class="view-btn-hldr fadeIn">
			<a href="product" class="button">View More</a>
		</div>
	</div>
</div>
<div class="hm_frame4">
	<div class="hm_frame4-vector" style="background-image: url('$ThemeDir/images/vec1.png');">
		<div class="vertical-parent">
			<div class="vertical-align">
				<div class="hm_frame4-bg" style="background-image: url('$F4BG.URL');">
					<div class="hm_frame4-image fadeIn" style="background-image: url('$F4IMG.URL');"></div>
					<div class="frm-cntnr width--80">
						<div class="vertical-parent">
							<div class="vertical-align">
								<div class="hm_frame4-text staggerup_hldr3">
									<div class="hm_frame4-title m-margin-b staggerup3">
										<h2 class="green">$F4Title</h2>
									</div>
									<div class="hm_frame4-desc l-margin-b staggerup3">
										<p>$F4Desc</p>
									</div>
									<div class="hm_frame4-btn staggerup3">
										<a href="careers" class="button">
											Open Job Opportunity
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="hm_frame5">
	<div class="hm_frame5-img" style="background-image: url('$F5BG.URL');">
		<div id="hm_frame5-desktop" class="frm-cntnr">
			<div class="frm-cntnr width--80">
				<div class="vertical-parent">
					<div class="vertical-align">
						<div class="hm_frame5-cntnr staggerup_hldr4">
							<div class="hm_frame5-title s-margin-b staggerup4">
								<h2 class="green">$F5Title</h2>
							</div>
							<div class="hm_frame5-desc s-margin-b staggerup4">
								<p>$F5Desc</p>
							</div>
							<form action="" id="contactForm" method="post">
								<div class="input-hldr">
									<input type="text" name="fullname" placeholder="Full Name" required>
								</div>
								<div class="input-hldr">
									<input type="text" name="email" placeholder="E-mail Address" required>
								</div>
								<div class="input-hldr">
									<input type="text" name="contact" placeholder="Contact Number" onkeydown="return ( event.ctrlKey || event.altKey 
				                    || (47<event.keyCode && event.keyCode<58 && event.shiftKey==false) 
				                    || (95<event.keyCode && event.keyCode<106)
				                    || (event.keyCode==8) || (event.keyCode==9) 
				                    || (event.keyCode>34 && event.keyCode<40) 
				                    || (event.keyCode==46) )" required>
								</div>
								<div class="input-hldr">
									<textarea type="text" name="messagedetails" placeholder="Message" required></textarea>
								</div>
								<div class="button-hldr">
									<button>Send Us</button>
									<input type="hidden" name="postFlag" value="1">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="hm_frame5-mobile">
	<div class="frm-cntnr width--80">
		<div class="vertical-parent">
			<div class="vertical-align">
				<div class="hm_frame5-cntnr">
					<div class="hm_frame5-title m-margin-b staggerup4">
						<h2 class="green">$F5Title</h2>
					</div>
					<div class="hm_frame5-desc m-margin-b staggerup4">
						<p>$F5Desc</p>
					</div>
					<form action="" id="contactForm" method="post">
						<div class="input-hldr">
							<input type="text" name="fullname" placeholder="Full Name" required>
						</div>
						<div class="input-hldr">
							<input type="text" name="email" placeholder="E-mail Address" required>
						</div>
						<div class="input-hldr">
							<input type="text" name="contact" placeholder="Contact Number" onkeydown="return ( event.ctrlKey || event.altKey 
		                    || (47<event.keyCode && event.keyCode<58 && event.shiftKey==false) 
		                    || (95<event.keyCode && event.keyCode<106)
		                    || (event.keyCode==8) || (event.keyCode==9) 
		                    || (event.keyCode>34 && event.keyCode<40) 
		                    || (event.keyCode==46) )" required>
						</div>
						<div class="input-hldr">
							<textarea type="text" name="messagedetails" placeholder="Message" required></textarea>
						</div>
						<div class="button-hldr">
							<button>Send Us</button>
							<input type="hidden" name="postFlag" value="1">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="hm_frame6">
	<div class="hm_frame6-vector flex" style="background-image: url('$ThemeDir/images/hm6vector.png');">
		<div class="phone-cntnr">
			<div id="gold" class="hm_phone" style="background-image: url('$ThemeDir/images/Gold_Left.png');"></div>
			<div id="white" class="hm_phone" style="background-image: url('$ThemeDir/images/White_Left.png');"></div>
			<div id="black" class="hm_phone" style="background-image: url('$ThemeDir/images/Space_Grey_Left.png');"></div>
		</div>
		<div id="f6content" class="frm-cntnr width--70">
			<div class="vertical-parent">
				<div class="vertical-align">
					<div class="hm_frame6-hldr">
						<div class="hm_frame6-title m-margin-b">
							<h2 class="white">$F6Title</h2>
						</div>
						<div class="hm_frame6-desc l-margin-b">
							<p class="white">
								$F6Desc
							</p>
						</div>
						<div class="btn-hldr l-margin-b">
							<a href="trinitycare-app" class="button">
								View More
							</a>
						</div>

						<div class="link-hldr">
							<div class="link-title">
								<p class="white">
									Download the app here:
								</p>
							</div>
							<div class="inlineBlock-parent">
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
			</div>
		</div>
	</div>
	
</div>