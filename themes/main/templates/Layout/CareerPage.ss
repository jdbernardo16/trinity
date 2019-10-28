<div class="crr_frame1">
	<div class="frm-cntnr width--80">
		<div class="inlineBlock-parent">
			<div class="menu_hldr align-t">
				<div class="menu_card fadeIn">
					<div class="menu_card-title">
						<p class="green">Job Category</p>
					</div>
					<div class="category-hldr">
						<select name="" id="">
							<option value="">Choose a category</option>
						</select>
					</div>
					<div class="menu_card-title">
						<p class="green">Job Category</p>
					</div>
					<div class="checkbox-hldr inlineBlock-parent">
						<input type="checkbox"><p>Full Time</p>
					</div>
					<div class="checkbox-hldr inlineBlock-parent">
						<input type="checkbox"><p>Part Time</p>
					</div>
					<div class="checkbox-hldr inlineBlock-parent">
						<input type="checkbox"><p>Contact</p>
					</div>
					<div class="checkbox-hldr inlineBlock-parent">
						<input type="checkbox"><p>Freelance</p>
					</div>
					<div class="checkbox-hldr inlineBlock-parent">
						<input type="checkbox"><p>Internship</p>
					</div>
					<div class="button-hldr">
						<button>Search</button>
					</div>
				</div>
			</div
			><div class="career_hldr align-t staggerfade_hldr">
				<% loop $Jobs %>
				<div class="card-hldr staggerfade">
					<div class="inlineBlock-parent">
						<div class="job-title">
							<p class="title s-margin-b">$JobTitle</p>
							<div class="inlineBlock-parent">
								<div class="loc-icon s-margin-r">
									<i class="fas fa-map-marker-alt lightgray"></i>
								</div
								><div class="loc-text">
									<p>$JobLoc</p>
								</div>
							</div>
						</div
						><div class="dates">
							<div class="inlineBlock-parent s-margin-b">
								<p class="title">Post:</p
								><p class="date">$PostDate.format('M/d/Y')</p>
							</div>
							<div class="inlineBlock-parent">
								<p class="title">Close Applicant:</p
								><p class="date">$CloseDate.format('M/d/Y')</p>
							</div>
						</div
						><div class="apply-btn">
							<button data-remodal-target="job-{$ID}">Apply Now</button>
						</div>
					</div>
				</div
				><% end_loop %>
			</div>
		</div>
	</div>
</div>
<% include CareerModal %>

