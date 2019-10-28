<div class="slctd_prdct">
	<div class="breadcrum-hldr">
		<div class="breadcrums inlineBlock-parent">
			<a href="$Parent.Link">Products</a><i class="ion-chevron-right"></i><p>$Name</p>
		</div>
	</div>
	<div class="frm-cntnr width--80">
		<div class="product-card">
			<div class="inlineBlock-parent">
				<div class="image-hldr align-t">
					<div class="slider-img">
						<% loop $ProductImages %>
						<div class="slider-hldr">
							<div class="image" style="background-image: url('$Image.URL');"></div>
						</div>
						<% end_loop %>
					</div>
					<div class="slider-menu-hldr">
						<% loop $ProductImages %>
						<div class="slider-item">
							<div class="image-menu" style="background-image: url('$Image.URl')"></div>
						</div>
						<% end_loop %>
					</div>
				</div
				><div class="product-details align-t">
					<div class="product-details-hldr staggerfade_hldr">
						<div class="product-name m-margin-b staggerfade">
							<h2>$Name</h2>
						</div>

						<div class="product-desc staggerfade">
							$Desc
						</div>
						<div class="inquire-sec staggerfade">
							<p>Do you want to ask something?</p>
							<div class="button-hldr staggerfade">
								<a href="contact-us" class="button">
									Inquire Us
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="slctd_prdct-frame2">
	<div class="frm-cntnr width--80">
		<div class="frm-title fadeIn">
			<h2>See Other Products</h2>
		</div>
		<div class="slctd_prdct-slider">
		<% loop $Parent %>
		    <% loop $Children %>
		    <% if $isCurrent %>
		    <% else %>
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
				</div>
			</div
			><% end_if %>
		    <% end_loop %>
		<% end_loop %>
		</div>
	</div>
</div>