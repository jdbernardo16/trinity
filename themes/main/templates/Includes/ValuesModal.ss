<% loop $Values %>
<div id="values_modal" class="remodal" data-remodal-id="values-{$ID}">
	 <div data-remodal-action="close" class="modal-close">
	 	<i class="fas fa-times"></i>
	 </div>
 	<div class="modal-body">
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
			</div>
		</div>
	</div>
</div>
<% end_loop %>
