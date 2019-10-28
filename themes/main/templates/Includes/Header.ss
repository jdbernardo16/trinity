<div class="hdr-frame">
	<% loop $HeaderFooter %>
	<div class="hdr-top">
		<div class="top-cntnr inlineBlock-parent">
			<div class="inlineBlock-parent top-hldr">
				<div class="icon-hldr">
					<div class="icon" style="background-image: url('$ThemeDir/images/phone.svg')"></div>
				</div
				><div class="top-link-hldr">
					<a href="tel: $TopNum" target="_blank">$TopNum</a>
				</div>
			</div
			><div class="inlineBlock-parent top-hldr">
				<div class="icon-hldr">
					<div class="icon" style="background-image: url('$ThemeDir/images/mail.svg')"></div>
				</div
				><div class="top-link-hldr">
					<a href="mailto: $TopMail" target="_blank">$TopMail</a>
				</div>
			</div
			><div class="inlineBlock-parent top-hldr">
				<div class="icon-hldr">
					<div class="icon" style="background-image: url('$ThemeDir/images/calendar.svg')"></div>
				</div
				><div class="top-link-hldr">
					<a>$TopSched</a>
				</div>
			</div>
		</div>
	</div>
	<% end_loop %>
	<div class="header">
		<div class="vertical-parent">
			<div class="vertical-align">
				<div class="inlineBlock-parent hdr-cntnr">
					<%-- <div class="m-menu">
						<div class="vertical-parent">
							<div class="vertical-align">
								<div id="nav-icon1">
								  <span></span>
								  <span></span>
								  <span></span>
								</div>
							</div>
						</div>
					</div
					> --%><div class="header__logo-cntnr">
						<a href="$AbsoluteBaseURL">
							<% loop $HeaderFooter %>
							 <div class="header__logo" style="background-image: url('$Logo.URL');"></div>
							<% end_loop %>
						</a>
					</div
					><div class="header__menu-cntnr">
						<div class="header__menu-hldr">
							<div class="inlineBlock-parent">
								<% loop $Menu(1) %>
								   <div class="link-hldr $Linkingmode">
										<a href="$Link">$Title</a>
									</div>
								<% end_loop %>
							</div>	
						</div
						><div class="bar-hldr">
							<div class="vertical-parent">
								<div class="vertical-align">
									<i class="fas fa-bars"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="mobile-menu">
			<div class="mobile-menu-hldr">
				<div class="exit-btn">
					<i class="fas fa-times"></i>
				</div>
				<div class="mobile-logo">
					<% loop HeaderFooter %>
						<div class="logo" style="background-image: url('$Logo.URL');"></div>
					<% end_loop %>
				</div>
				<div class="m-link-hldr">
					<% loop $Menu(1) %>
					<div class="link-cntnr $Linkingmode">
						<a href="$Link">$Title</a>
					</div>
					<% end_loop %>
				</div>
				<% loop HeaderFooter %>
				<div class="mobile-menu-ftr">
					<div class="inlineBlock-parent ftr-hldr">
						<div class="icon-hldr">
							<div class="icon" style="background-image: url('$ThemeDir/images/phone.svg')"></div>
						</div
						><div class="top-link-hldr">
							<a href="tel: $TopNum" target="_blank">$TopNum</a>
						</div>
					</div
					><div class="inlineBlock-parent ftr-hldr">
						<div class="icon-hldr">
							<div class="icon" style="background-image: url('$ThemeDir/images/mail.svg')"></div>
						</div
						><div class="top-link-hldr">
							<a href="mailto: $TopMail" target="_blank">$TopMail</a>
						</div>
					</div
					><div class="inlineBlock-parent ftr-hldr">
						<div class="icon-hldr">
							<div class="icon" style="background-image: url('$ThemeDir/images/calendar.svg')"></div>
						</div
						><div class="top-link-hldr">
							<a>$TopSched</a>
						</div>
					</div>
				</div>
				<% end_loop %>
			</div>
		</div>
	</div>
</div>
