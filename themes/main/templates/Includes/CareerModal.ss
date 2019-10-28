<% loop Jobs %>
<div id="modal__careers" class="remodal" data-remodal-id="job-{$ID}">
	 <div data-remodal-action="close" class="modal-close">
	 	<i class="fas fa-times"></i>
	 </div>
 	<div class="modal-body">
 		<div class="job-container inlineBlock-parent" data-id="{$ID}">
 			<div class="career-detail-cntnr align-t">
 				<div class="career-details">
 					<div class="modal-title">
 						<h2>$JobTitle</h2>
 					</div>
 					<div class="career-desc-title">
 						<strong>Job Description:</strong>
 					</div>
 					<div class="career-desc">
 						$Desc
 					</div>
 				</div>
 			</div
 			><div class="career-form-cntnr align-t">
 				<div class="career-form">
 					<div class="modal-title">
 						<h2>Apply for a job</h2>
 					</div>
 					<div class="career-form-hldr">
 						<form id="applyForm{$ID}" enctype="multipart/form-data" method="POST">
 							<input type="hidden" name="jobtitle" value="$JobTitle" required>
 							<div class="input-hldr">
 								<input type="text" name="name" placeholder="Full Name" required>
 							</div>
 							<div class="input-hldr">
 								<input type="text" name="email" placeholder="E-mail Address" required>
 							</div>
 							<div class="input-hldr">
 								<input type="text" name="mobile" placeholder="Contact Number" onkeydown="return ( event.ctrlKey || event.altKey 
				                    || (47<event.keyCode && event.keyCode<58 && event.shiftKey==false) 
				                    || (95<event.keyCode && event.keyCode<106)
				                    || (event.keyCode==8) || (event.keyCode==9) 
				                    || (event.keyCode>34 && event.keyCode<40) 
				                    || (event.keyCode==46) )" required>
 							</div>
 							<div class="input-hldr">
 								<select name="education" id="" required>
 									<option value="">Highest Educational Attainment</option>
 									<option value="Elementary">Elementary</option>
 									<option value="High School">High School</option>
 									<option value="Bachelors">Bachelors</option>
 									<option value="Masters">Masters</option>
 									<option value="Doctoral">Doctoral</option>
 								</select>
 							</div>
 							<div class="upload-hldr">
								<div class="modal__careers-form-row modal__careers-form" data-id="{$ID}">
					 				<div class="modal__careers__upload">
										<label id="file-selected{$ID}" for="fileupload{$ID}" class="custom-file-upload inlineBlock-parent"><p class="ptext">Attached Resume</p><p class="lbtn">Choose File</p></label>
									</div>
									<input type="file" id="fileupload{$ID}" class="fileuploadBtn" name="file" required hidden>
									<input type="hidden" id="file-image{$ID}" name="resume" value="" required/>
					 			</div>
 							</div>
 							<div class="input-hldr">
 								<textarea name="messagedetails" id="" cols="30" rows="10" name="message" placeholder="Message" required></textarea>
 							</div>
 							<div class="send-btn">
 								<button id="applyBtn{$ID}">SUBMIT</button>
 								<input type="hidden" name="postFlag" value="1">
 							</div>
 						</form>
 					</div>
 				</div>
 			</div>
 		</div>
	</div>
</div>
<% end_loop %>
