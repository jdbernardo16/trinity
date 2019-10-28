<div class="ftr-frame">
	<div class="ftr-cntnr inlineBlock-parent">
		<div class="logo-hldr align-t">
			<a href="">
				<% loop $HeaderFooter %>
				<div class="ftr-logo" style="background-image: url('$Logo.URL');"></div>
				<% end_loop %>
			</a>
			<div class="ftr-link terms">
				<a href="terms-and-conditions">Terms & Conditions</a>
			</div>
			<div class="ftr-link">
				<a href="privacy-policy">Privacy Policy</a>
			</div>
		</div
		><div class="quicklinks-hldr align-t">
			<div class="ftr-header">
				<p>QUICKLINKS</p><i class="fas fa-caret-down"></i>
			</div>
			<div class="ftr-link-hldr">
				<% loop $Menu(1).limit(4) %>
				<div class="link">
					<a href="$Link">$Title</a>
				</div>
				<% end_loop %>
			</div>
		</div
		><div class="contact-hldr align-t">
			<% loop $HeaderFooter %>
			<div class="ftr-header">
				<p>CONTACT INFO</p><i class="fas fa-caret-down"></i>
			</div>
			<div class="ftr-link-hldr2">
				<div class="cntct-hldr inlineBlock-parent">
					<div class="icon-hldr align-t" style="background-image: url('$ThemeDir/images/loc.png');"></div
					><div class="cntct-txt">
						<p>$TopAddress</p>
					</div>
				</div>
				<div class="cntct-hldr inlineBlock-parent">
					<div class="icon-hldr align-t" style="background-image: url('$ThemeDir/images/call.png');"></div
					><div class="cntct-txt">
						<a href="tel: $TopNum" target="_blank">$TopNum</a>
					</div>
				</div>
				<div class="cntct-hldr inlineBlock-parent">
					<div class="icon-hldr align-t" style="background-image: url('$ThemeDir/images/mail.png');"></div
					><div class="cntct-txt">
						<a href="mailto: $TopNum" target="_blank">$TopMail</a>
					</div>
				</div>
				<div class="cntct-hldr inlineBlock-parent">
					<div class="icon-hldr align-t" style="background-image: url('$ThemeDir/images/cal.png');"></div
					><div class="cntct-txt">
						<p>$TopSched</p>
					</div>
				</div>
				<% end_loop %>
			</div>
		</div
		><div class="connect-hldr align-t">
			<% loop $HeaderFooter %>
			<div class="ftr-header">
				<p>CONNECT WITH US</p><i class="fas fa-caret-down"></i>
			</div>
			<div class="ftr-link-hldr3">
				<div class="cntct-hldr inlineBlock-parent">
					<div class="icon-hldr align-t" style="background-image: url('$ThemeDir/images/facebook.png');"></div
					><div class="cntct-txt">
						<a href="$fblink" target="_blank">$fbtext</a>
					</div>
				</div>
				<div class="cntct-hldr inlineBlock-parent">
					<div class="icon-hldr align-t" style="background-image: url('$ThemeDir/images/ig.png');"></div
					><div class="cntct-txt">
						<a href="$iglink" target="_blank">$igtext</a>
					</div>
				</div>
				<div class="cntct-hldr inlineBlock-parent">
					<div class="icon-hldr align-t" style="background-image: url('$ThemeDir/images/twitter.png');"></div
					><div class="cntct-txt">
						<a href="$twitterlink" target="_blank">$twittertext</a>
					</div>
				</div>
				<div class="cntct-hldr inlineBlock-parent">
					<div class="icon-hldr align-t" style="background-image: url('$ThemeDir/images/youtube.png');"></div
					><div class="cntct-txt">
						<a href="$youtubelink" target="_blank">$youtubetext</a>
					</div>
				</div>
				<% end_loop %>
			</div>
		</div
		><div class="app-ftr-hldr align-t">
			<% loop $HeaderFooter %>
			<div class="ftr-header">
				<p>TRINITYCARE APP</p>
			</div>
			<div class="download-btn">
				<a href="$playstorelink" target="_blank">
					<img class="playstore" src="$googleicon.URL" alt="">
				</a>
			</div>	
			<div class="download-btn">
				<a href="$appstorelink" target="_blank">
					<img class="playstore" src="$appleicon.URL" alt="">
				</a>
			</div>	
			<% end_loop %>
		</div>
	</div>
	<div class="ftr-bottom">
		<p>2019 © Trinity Health Philippines</p>
	</div>
</div>