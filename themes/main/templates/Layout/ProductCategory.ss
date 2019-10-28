<div class="prdct_frame1">
	<div class="breadcrum-hldr">
		<div class="breadcrums inlineBlock-parent">
			<p>Products</p><i class="ion-chevron-right"></i>
		</div>
	</div>
	<div class="frm-cntnr width--80">
		<div class="inlineBlock-parent">
			<div class="menu_hldr align-t">
				<div class="menu">
					<div class="menu_title">
						<p>Categories</p>
					</div>
					<% loop $Menu(2) %>
					<div class="menu_link $linkingMode">
						<a href="$Link">$Title</a>
					</div>
					<% end_loop %>
				</div>
			</div
			><div class="prdct_cntnr align-t">
				<% if $Children %>
				
				<div class="inlineBlock-parent">
					<% loop $Children %><div class="card fadeIn">
						<% if $New %>
						<div class="newtag">
							<p>New</p>
						</div>
						<% end_if %>
						<div class="image-cntnr">
							<% loop $ProductImages.limit(1) %>
							<div class="image" style="background-image: url('$Image.URL');"></div>
							<% end_loop %>
						</div>
						<div class="product-name">
							<p>$Name.limitcharacters(20)</p>
						</div>
						<div class="product-desc">
							<p>$Teaser.limitcharacters(25)</p>
						</div>
						<div class="button-hldr">
							<a href="$Link" class="button">
								View Details
							</a>
						</div>
					</div
					><% end_loop %>
				</div>
				<% else %>
				<div class="no-product align-c l-margin-t">
					<p>No Product Available</p>
				</div>
				<% end_if %>
			</div>
		</div>
	</div>
</div>