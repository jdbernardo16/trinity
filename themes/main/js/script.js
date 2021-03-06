$(document).ready(function() {
	app.init();
});

var app = {

	init: function() {
		var setup = this.setup;

		switch(pageID) {
			case 'HomePage':
				setup.homepage();
				break;
			case 'AboutPage':
				setup.aboutpage();
				break;
			case 'ProductCategory':
				setup.productcategory();
				break;
			case 'Product':
				setup.product();
				break;
			case 'CareerPage':
				setup.careerpage();
				break;
			case 'ContactPage':
				setup.contactpage();
				break;
			case 'TrinityCareAppPage':
				setup.trinitycareapppage();
				break;
		}

		setup.menu();
	},

	setup: {

		menu: function() {
			$(window).on("scroll", function() {
			    if($(window).scrollTop() > 100 ) {
			          $('.header__logo').addClass('logo-scroll');
			    }
			    else {
			          $('.header__logo').removeClass('logo-scroll');
			    }
			});

			$(".ftr-frame .quicklinks-hldr .ftr-header p").on("click", function() {
				$(".ftr-link-hldr").slideToggle();
				$(".quicklinks-hldr .fa-caret-down").toggleClass('rotate');
     	    });

     	    $(".ftr-frame .connect-hldr .ftr-header p").on("click", function() {
				$(".ftr-link-hldr3").slideToggle();
				$(".connect-hldr .fa-caret-down").toggleClass('rotate');
     	    });

     	     $(".ftr-frame .contact-hldr .ftr-header p").on("click", function() {
				$(".ftr-link-hldr2").slideToggle();
				$(".contact-hldr .fa-caret-down").toggleClass('rotate');
     	    });

			$(".bar-hldr").on("click", function() {
				$(".mobile-menu").css("transform","translateX(0%)");
				$(".mobile-menu").css("opacity","1");
     	    });

     	    $(".mobile-menu .exit-btn").on("click", function() {
				$(".mobile-menu").css("transform","translateX(-120%)");
				$(".mobile-menu").css("opacity","0");
     	    });

		},

		homepage: function() {

			app.form.init($('#contactForm'), $('#contactBtn'), 'form/contact/send', false);

			initSlider();

			function initSlider() {
				$('.hm_frame3-slider').slick({
				 	dots: false,
				 	arrows: true,
				  	infinite: true,
				  	autoplay: false,
					speed: 1000,
					autoplaySpeed: 10000,
				  	slidesToShow: 4,
		            slidesPerRow: 1,
		            slidesToScroll: 1,
		            responsive: [
		            {
		              breakpoint: 1100,
		              settings: {
		                slidesToShow: 3,
		                slidesPerRow: 1,
		                slidesToScroll: 1
		              }
		            },
		            {
		              breakpoint: 700,
		              settings: {
		                slidesToShow: 1,
		                slidesPerRow: 1,
		                slidesToScroll: 1
		              }
		            }

	            ]
				});
			}
			$('.slick-prev').html('<i class="fas fa-chevron-left"></i>');
     	 	$('.slick-next').html('<i class="fas fa-chevron-right"></i>');


			
		},

		aboutpage: function() {


				$('.abt_frame2-slider').slick({
				 	dots: false,
				 	arrows: true,
				  	infinite: true,
				  	autoplay: false,
					speed: 1000,
					autoplaySpeed: 10000,
				  	slidesToShow: 2,
		            slidesPerRow: 1,
		            slidesToScroll: 1,
		            responsive: [
		            {
		              breakpoint: 1024,
		              settings: {
		                slidesToShow: 1,
		                slidesPerRow: 1,
		                slidesToScroll: 1
		              }
		            }

	            ]
				})
			$('.slick-prev').html('<i class="fas fa-chevron-left"></i>');
     	 	$('.slick-next').html('<i class="fas fa-chevron-right"></i>');



     	 	$('.card-slider').slick({
			 	dots: true,
			 	arrows: false,
			  	infinite: true,
			  	autoplay: false,
			  	slidesToShow: 1,
	            slidesPerRow: 1,
	            slidesToScroll: 1,
			}).slickAnimation();

			

			$(".remodal-close").on("click", function() {
		        $(".remodal iframe").attr("src", $(".remodal iframe").attr("src"));
			});

		    $(".remodal-wrapper").on("click", function() {
		        $(".remodal iframe").attr("src", $(".remodal iframe").attr("src"));
			});
			

		},

		productcategory: function() {

		},
		product: function() {

			$('.slider-img').slick({
			 	dots: false,
			 	arrows: false,
			  	infinite: true,
			  	autoplay: false,
			  	speed: 1000,
			  	slidesToShow: 1,
	            slidesPerRow: 1,
	            slidesToScroll: 1,
	            asNavFor: '.slider-menu-hldr'
			});

			$('.slider-menu-hldr').slick({
			 	dots: false,
			 	arrows: false,
			  	infinite: true,
			  	autoplay: false,
			  	speed: 1000,
			  	slidesToShow: 3,
	            slidesPerRow: 1,
	            slidesToScroll: 1,
	            focusOnSelect: true,
	            asNavFor: '.slider-img'
			});
			
			initSlider();

			function initSlider() {
				$('.slctd_prdct-slider').slick({
				 	dots: false,
				 	arrows: true,
				  	infinite: true,
				  	autoplay: false,
					speed: 1000,
					autoplaySpeed: 10000,
				  	slidesToShow: 4,
		            slidesPerRow: 1,
		            slidesToScroll: 1,
				});
			}
			$('.slick-prev').html('<i class="fas fa-chevron-left"></i>');
     	 	$('.slick-next').html('<i class="fas fa-chevron-right"></i>');

		},

		careerpage: function() {

			$('.job-container').each(function() {
				var id = $(this).data('id');
				app.form.init($('#applyForm' + id), $('#applyBtn' + id), 'form/apply/send', false);
			});

			$('.modal__careers-form').each(function() {
				var id = $(this).data('id');

				$(this).fileupload({
			        url: baseHref + 'form/apply/upload',
			        dataType: 'json',
					submit: function(e, data) {},
					done: function(e, data) {
						switch(data.result.response) {
							case 0: break;
							case 1:

								$('#file-image' + id).val(data.result.message);
								$('#maskfile-image').val(data.result.message);
								$('#file-selected' + id).html(data.result.filename);

							break;
						}
					}
			    });
			});
		},

		contactpage: function() {
			app.form.init($('#contactForm'), $('#contactBtn'), 'form/contact/send', false);
		},
		trinitycareapppage: function() {

			initSlider();

			function initSlider() {
				$('.content-hldr').slick({
				 	dots: true,
				 	arrows: false,
				  	infinite: true,
				  	autoplay: false,
					speed: 1000,
					autoplaySpeed: 10000,
				  	slidesToShow: 1,
		            slidesPerRow: 1,
		            slidesToScroll: 1,
				});
			}
			$('.slick-prev').html('<i class="fas fa-chevron-left"></i>');
     	 	$('.slick-next').html('<i class="fas fa-chevron-right"></i>');

		},
			

	},

	form: {
		/**
		* SENDING FORM
		* - Identify the form name, button name, the url (controller route), and if you want to 'refresh' the page.	
		**/
		init: function(formName, btnName, routeVal, boolean) {
			var form = formName,
				btn = btnName,
				route = routeVal,
				bool = boolean;

			form.validate({
				submitHandler: function(form) {
					swal({
						title: 'Sending ...',
						text: '',
						timer: 2000,
						onOpen: function () {
							swal.showLoading()
						}
					})
					var vars = $(form).serialize();
					$.post(baseHref + route, vars, function(data) {
						switch(data.status) {
							case 0:
								setMessage(false,data.message);
							break;
							case 1: 
								setMessage(true,data.message);
								$(form).trigger('reset');
								if(bool == true) {
									
									window.location.reload(1);
									
								}

							break;
						}

					}, 'json');
				}
			});

			$(btn).on('click', function(e) {
				e.preventDefault();
				form.submit();

				//label error -- for mobile
				if($(window).width() < 900) {
					$('label.error').empty();
					$('label.error').text("*");
				}
			});

			function setMessage(status, msg) {
				if(status) {
					swal('',msg,'success')
				} else {
					swal('',msg,'error')
				}
			}
		},

		/**
		* SENDING FORM W/ ATTACHMENTS
		* - Bind the uploaded file first, before sending.
		* - Identify where the file should be uploaded, button name, and the url (controller route).	
		* - Requirements: 
					Javascript:
						  jquery.fileupload.js
						  jquery.iframe-transport.js
						  jquery.ui.widget.js
					Composer:
						  "gargron/fileupload": "~1.4.0"
					Silverstripe:
						   Controller: Create UploadController
						   ModelAdmin: Create an admin manager for back up purposes (list of emails received)
						   Assets: Create folder inside, depends on what you declared
						   Template Syntax: 
						   		<label id="file-selected-permit" for="fileupload-permit" class="custom-file-upload">Business/Mayor Permit <i class="ion-paperclip"></i></label>
								<input type="file" id="fileupload-permit" name="file" style="display: none;">
								<input type="hidden" id="file-image-permit" name="permit" value="">

		**/
		bindUploadField: function(fileUpload, fileImg, fileSelected, formBtn, url) {
			var $file_upload = fileUpload,
				$file_img = fileImg,
				$file_selected = fileSelected,
				$form_btn = formBtn,
				$url = url;

			$file_upload.fileupload({
		        url: baseHref + $url,
		        dataType: 'json',
				submit: function(e, data) {},
				done: function(e, data) {
					switch(data.result.status) {
						case 0: break;
						case 1: 
							
							$file_img.val(data.result.message);
							$file_selected.html(data.result.filename);
							$form_btn.fadeIn(); 

						break;
					}
				}
		    });
		}
	},
};
