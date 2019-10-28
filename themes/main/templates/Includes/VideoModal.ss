<div id="vidmodal" class="remodal" data-remodal-id="vid">
	<div data-remodal-action="close" class="modal-close">
	 	<i class="fas fa-times"></i>
	</div>
 	<div class="modal-body">
		<% if videolink %>
 			<iframe width="100%;" height="600" src="$videolink" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>	
 		<% end_if %>	
	</div>
</div>