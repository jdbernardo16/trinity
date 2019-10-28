$(document).ready(function() {
	animate.init();
});

var animate = {

	init: function() {
		var setup = this.setup;
		setup.animateEvents();
	},

	setup: {

		animateEvents: function() {

			// Init ScrollMagic
			var controller = new ScrollMagic.Controller();


			 /*
            * General:
            * gnrlfrm : General Frame
            */

            $('.animate-up').each(function() {
                var tl = new TimelineMax()
                .fromTo(this, 1,
                    { y: "10%", opacity: "0", ease:Power0.easeIn },
                    { y: "0%", opacity: "1", ease:Power0.easeIn })

                var fadeScene = new ScrollMagic.Scene({
                    triggerElement: this,
                    triggerHook: .8,
                    reverse:false,
                    })
                    .setTween(tl)
                    .addTo(controller);
            });

            $('.fadeIn').each(function() {
                var tl = new TimelineMax()
                .fromTo(this, 1,
                    { y: "0px", opacity: 0, ease:Power0.easeIn },
                    { y: "0px", opacity: 1, ease:Power0.easeIn })

                var fadeScene = new ScrollMagic.Scene({
                    triggerElement: this,
                    triggerHook: .8,
                    reverse:false,
                    })
                    .setTween(tl)
                    .addTo(controller);
            });

            $('.animate-down').each(function() {
                var tl = new TimelineMax()
                .fromTo(this, 1,
                    { y: "-10%", opacity: "0", ease:Power0.easeIn },
                    { y: "0%", opacity: "1", ease:Power0.easeIn })

                var fadeScene = new ScrollMagic.Scene({
                    triggerElement: this,
                    triggerHook: .7,
                    reverse:false,
                    })
                    .setTween(tl)
                    .addTo(controller);
            });

            $('.animate-scale').each(function() {
                var tl = new TimelineMax()
                .fromTo(this, 1,
                    { scale: "0.8", opacity: "0", ease:Power0.easeIn },
                    { scale: "1", opacity: "1", ease:Power0.easeIn })

                var fadeScene = new ScrollMagic.Scene({
                    triggerElement: this,
                    triggerHook: .7,
                    reverse:false,
                    })
                    .setTween(tl)
                    .addTo(controller);
            });

            $('.animate-right').each(function() {
                var tl = new TimelineMax()
                .fromTo(this, 1,
                    { x: "10%", opacity: "0", ease:Power0.easeIn },
                    { x: "0%", opacity: "1", ease:Power0.easeIn })

                var fadeScene = new ScrollMagic.Scene({
                    triggerElement: this,
                    triggerHook: .7,
                    reverse:false,
                    })
                    .setTween(tl)
                    .addTo(controller);
            });

            $('.animate-left').each(function() {
                var tl = new TimelineMax()
                .fromTo(this, 1,
                    { x: "-10%", opacity: "0", ease:Power0.easeIn },
                    { x: "0%", opacity: "1", ease:Power0.easeIn })

                var fadeScene = new ScrollMagic.Scene({
                    triggerElement: this,
                    triggerHook: .7,
                    reverse:false,
                    })
                    .setTween(tl)
                    .addTo(controller);
            });

            $('.animate-flip').each(function() {
                var fadeScene = new ScrollMagic.Scene({
                	triggerElement: this,
                	reverse: false,
                	offset:-300
                })
				.setClassToggle("#high1", "flipInY") // add class toggle
				// .addIndicators() // add indicators (requires plugin)
				.addTo(controller);

            });

            $('.animate-flip1').each(function() {
                var fadeScene = new ScrollMagic.Scene({
                	triggerElement: this,
                	reverse: false,
                	offset:-300
                })
				.setClassToggle("#contactBtn", "flipInY") // add class toggle
				// .addIndicators() // add indicators (requires plugin)
				.addTo(controller);

            });

            $('.animate-flipX').each(function() {
                var fadeScene = new ScrollMagic.Scene({
                	triggerElement: this,
                	reverse: false,
                	offset:-100
                })
				.setClassToggle("#img-cntnr", "flipInX") // add class toggle
				// .addIndicators() // add indicators (requires plugin)
				.addTo(controller);

            });

             $('.animate-flipY').each(function() {
                var fadeScene = new ScrollMagic.Scene({
                	triggerElement: this,
                	reverse: false,
                	offset:-100
                })
				.setClassToggle("#img-cntnr", "flipInY") // add class toggle
				// .addIndicators() // add indicators (requires plugin)
				.addTo(controller);

            });

             $('.animate-rotate').each(function() {
                var fadeScene = new ScrollMagic.Scene({
                	triggerElement: this,
                	reverse: false,
                	offset:-100
                })
				.setClassToggle("#headache", "rotateInDownLeft") // add class toggle
				// .addIndicators() // add indicators (requires plugin)
				.addTo(controller);

            });


             $('.hm_frame6').each(function() {
             	var controller = new ScrollMagic.Controller();
	            var tl = new TimelineMax({delay:0, repeat:0, repeatDelay:0});
		        tl.fromTo('#f6content', 1,
	                    { x: "10%", y: "0%", opacity: "0", ease:Power0.easeIn },
	                    { x: "0%", y: "0%", rotation:"0", opacity: "1", ease:Bounce.easeNone })
		        .fromTo('#gold', .75,
	                    { x: "-50%", y: "10%", rotation:"-20", transformOrigin:"right 60%" ,opacity: "0", ease:Power0.easeIn },
	                    { x: "0%", y: "0%", rotation:"0", opacity: "1", ease:Bounce.easeNone })
		        	.fromTo('#white', .5,
	                    { x: "-10%", y: "0%", opacity: "0", ease:Power0.easeIn },
	                    { x: "0%", y: "0%", rotation:"0", opacity: "1", ease:Bounce.easeNone })
		        	.fromTo('#black', .5,
	                    { x: "-10%", y: "0%", opacity: "0", ease:Power0.easeIn },
	                    { x: "0%", y: "0%", rotation:"0", opacity: "1", ease:Bounce.easeNone })

		         var fadeScene = new ScrollMagic.Scene({
                	triggerElement: this,
                	reverse: false,
                	offset:-100
                })

		        .setTween(tl)
            	.addTo(controller);
	         });
		        

		     $('.phone').each(function() {
             	var controller = new ScrollMagic.Controller();
	            var tl = new TimelineMax({delay:2, repeat:0, repeatDelay:0});
		        tl.fromTo(this, 2,
	                    { x: "-10%", y: "0%" ,opacity: "0", ease:Power0.easeIn },
	                    { x: "0%", y: "0%", opacity: "1", ease:Bounce.easeNone })

		         var fadeScene = new ScrollMagic.Scene({
                	triggerElement: this,
                	reverse: false,
                	offset:-100
                })

		        .setTween(tl)
            	.addTo(controller);
	         });

            

           



            

			/** 
			 * Home : Animations
			 */

			$('.staggerup_hldr').each(function() {
	            var tl = new TimelineMax({delay:0, repeat:0, repeatDelay:0});
	            tl.staggerFrom(".staggerup", 1, { y: "30%", opacity: 0, ease: Bounce.easeNone }, 0.5,)
	              .staggerTo(".staggerup", 1, { y: "0%", opacity: 1, ease: Bounce.easeOut }, 0.5,)

	            var fadeScene = new ScrollMagic.Scene({
	                triggerElement: this,
	                triggerHook: .1,
	                offset:-300,
	                reverse:false,
	            })
	            .setTween(tl)
	            .addTo(controller);
        	});

        	setTimeout( function(){ 
                $('.staggerup_hldrt').each(function() {
		            var tl = new TimelineMax({delay:0, repeat:0, repeatDelay:0});
		            tl.staggerFrom(".staggerupt", 1.00, { y: "30%", opacity: 0, ease: Bounce.easeNone }, 0.5,)
		              .staggerTo(".staggerupt", 1.00, { y: "0%", opacity: 1, ease: Bounce.easeOut }, 0.5,)

		            var fadeScene = new ScrollMagic.Scene({
		                triggerElement: this,
		                triggerHook: .1,
		                offset:-300,
		                reverse:false,
		            })
		            .setTween(tl)
		            .addTo(controller);
	        	});
            }, 1000);

        	

        	$('.staggerup_hldrl').each(function() {
	            var tl = new TimelineMax({delay:0, repeat:0, repeatDelay:0});
	            tl.staggerFrom(".staggerupl", .5, { x: "30%", opacity: 0, ease: Bounce.easeNone }, 0.5,)
	              .staggerTo(".staggerupl", .5, { x: "0%", opacity: 1, ease: Bounce.easeOut }, 0.5,)

	            var fadeScene = new ScrollMagic.Scene({
	                triggerElement: this,
	                triggerHook: .1,
	                offset:-300,
	                reverse:false,
	            })
	            .setTween(tl)
	            .addTo(controller);
        	});

        	$('.staggerup_hldr1').each(function() {
	            var tl = new TimelineMax({delay:0, repeat:0, repeatDelay:0});
	            tl.staggerFrom(".staggerup1", 1.00, { y: "30%", opacity: 0, ease: Bounce.easeNone }, 0.5,)
	              .staggerTo(".staggerup1", 1.00, { y: "0%", opacity: 1, ease: Bounce.easeOut }, 0.5,)

	            var fadeScene = new ScrollMagic.Scene({
	                triggerElement: this,
	                triggerHook: .1,
	                offset:-300,
	                reverse:false,
	            })
	            .setTween(tl)
	            .addTo(controller);
        	});

        	$('.staggerscale_hldr').each(function() {
	            var tl = new TimelineMax({delay:0, repeat:0, repeatDelay:0});
	            tl.staggerFrom(".staggerscale", 2.00, { scale: 0, opacity: 0, ease: Bounce.easeNone }, 0.5,)
	              .staggerTo(".staggerscale", 2.00, { scale: 1, opacity: 1, ease: Bounce.easeOut }, 0.5,)

	            var fadeScene = new ScrollMagic.Scene({
	                triggerElement: this,
	                triggerHook: .1,
	                offset:-300,
	                reverse:false,
	            })
	            .setTween(tl)
	            .addTo(controller);
        	});

        	$('.staggerrotate_hldr').each(function() {
	            var tl = new TimelineMax({delay:0, repeat:0, repeatDelay:0});
	            tl.staggerTo(".staggerrotate", 1.00, {css:{className:'+=rotateIn'}}, 0.5,)
	              // .staggerTo(".staggerbounce", 1.00, { y: "0%", opacity: 1, ease: Bounce.easeOut }, 0.5,)

	            var fadeScene = new ScrollMagic.Scene({
	                triggerElement: this,
	                triggerHook: .1,
	                offset:-400,
	                reverse:false,
	            })
	            .setTween(tl)
	            // .addIndicators()
	            .addTo(controller);
        	});

        	$('.staggerup_hldr2').each(function() {
	            var tl = new TimelineMax({delay:0, repeat:0, repeatDelay:0});
	            tl.staggerFrom(".staggerup2", 1.00, { y: "30%", opacity: 0, ease: Bounce.easeNone }, 0.5,)
	              .staggerTo(".staggerup2", 1.00, { y: "0%", opacity: 1, ease: Bounce.easeOut }, 0.5,)

	            var fadeScene = new ScrollMagic.Scene({
	                triggerElement: this,
	                triggerHook: .1,
	                offset:-500,
	                reverse:false,
	            })
	            .setTween(tl)
	            .addTo(controller);
        	});

        	$('.staggerup_hldr3').each(function() {
	            var tl = new TimelineMax({delay:0, repeat:0, repeatDelay:0});
	            tl.staggerFrom(".staggerup3", 1.00, { y: "30%", opacity: 0, ease: Bounce.easeNone }, 0.5,)
	              .staggerTo(".staggerup3", 1.00, { y: "0%", opacity: 1, ease: Bounce.easeOut }, 0.5,)

	            var fadeScene = new ScrollMagic.Scene({
	                triggerElement: this,
	                triggerHook: .1,
	                offset:-500,
	                reverse:false,
	            })
	            .setTween(tl)
	            .addTo(controller);
        	});

        	$('.staggerup_hldr4').each(function() {
	            var tl = new TimelineMax({delay:0, repeat:0, repeatDelay:0});
	            tl.staggerFrom(".staggerup4", 1.00, { y: "30%", opacity: 0, ease: Bounce.easeNone }, 0.5,)
	              .staggerTo(".staggerup4", 1.00, { y: "0%", opacity: 1, ease: Bounce.easeOut }, 0.5,)

	            var fadeScene = new ScrollMagic.Scene({
	                triggerElement: this,
	                triggerHook: .1,
	                offset:-500,
	                reverse:false,
	            })
	            .setTween(tl)
	            .addTo(controller);
        	});

        	$('.staggerup_hldr5').each(function() {
	            var tl = new TimelineMax({delay:0, repeat:0, repeatDelay:0});
	            tl.staggerFrom(".staggerup5", 1.00, { y: "30%", opacity: 0, ease: Bounce.easeNone }, 0.5,)
	              .staggerTo(".staggerup5", 1.00, { y: "0%", opacity: 1, ease: Bounce.easeOut }, 0.5,)

	            var fadeScene = new ScrollMagic.Scene({
	                triggerElement: this,
	                triggerHook: .1,
	                offset:-500,
	                reverse:false,
	            })
	            .setTween(tl)
	            .addTo(controller);
        	});

        	$('.staggerup_hldr6').each(function() {
	            var tl = new TimelineMax({delay:0, repeat:0, repeatDelay:0});
	            tl.staggerFrom(".staggerup6", 1.00, { y: "30%", opacity: 0, ease: Bounce.easeNone }, 0.5,)
	              .staggerTo(".staggerup6", 1.00, { y: "0%", opacity: 1, ease: Bounce.easeOut }, 0.5,)

	            var fadeScene = new ScrollMagic.Scene({
	                triggerElement: this,
	                triggerHook: .1,
	                offset:-500,
	                reverse:false,
	            })
	            .setTween(tl)
	            .addTo(controller);
        	});

        	$('.staggerfade_hldr').each(function() {
	            var tl = new TimelineMax({delay:0, repeat:0, repeatDelay:0});
	            tl.staggerFrom(".staggerfade", 1.00, { y: "5%", opacity: 0, ease: Bounce.easeNone }, 0.5,)
	              .staggerTo(".staggerfade", 1.00, { y: "0%", opacity: 1, ease: Bounce.easeOut }, 0.5,)

	            var fadeScene = new ScrollMagic.Scene({
	                triggerElement: this,
	                triggerHook: .1,
	                offset:-300,
	                reverse:false,
	            })
	            .setTween(tl)
	            .addTo(controller);
        	});

        	$('.staggerup_hldricon').each(function() {
	            var tl = new TimelineMax({delay:0, repeat:0, repeatDelay:0});
	            tl.staggerFrom(".staggerupicon", 1.00, { x: "-30", y: "30%", opacity: 0, ease: Bounce.easeNone }, 0.5,)
	              .staggerTo(".staggerupicon", 1.00, { x: "0", y: "0%", opacity: 1, ease: Bounce.easeOut }, 0.5,)

	            var fadeScene = new ScrollMagic.Scene({
	                triggerElement: this,
	                triggerHook: .1,
	                offset:-500,
	                reverse:false,
	            })
	            .setTween(tl)
	            .addTo(controller);
        	});

        	$('.staggerdown_hldricon').each(function() {
	            var tl = new TimelineMax({delay:0, repeat:0, repeatDelay:0});
	            tl.staggerFrom(".staggerdownicon", 1.00, { x: "30", y: "-30%", opacity: 0, ease: Bounce.easeNone }, 0.5,)
	              .staggerTo(".staggerdownicon", 1.00, { x: "0", y: "0%", opacity: 1, ease: Bounce.easeOut }, 0.5,)

	            var fadeScene = new ScrollMagic.Scene({
	                triggerElement: this,
	                triggerHook: .1,
	                offset:-500,
	                reverse:false,
	            })
	            .setTween(tl)
	            .addTo(controller);
        	});

        	$('.stagger-bounce_hldr').each(function() {
	            var tl = new TimelineMax({delay:0, repeat:0, repeatDelay:0});
	             tl.staggerTo(".stagger-bounce", 1.00, {css:{className:'+=bounce'}}, 0.5,)
	              // .staggerTo(".stagger-bounce", 1.00, { x: "0", y: "0%", opacity: 1, ease: Bounce.easeOut }, 0.5,)

	            var fadeScene = new ScrollMagic.Scene({
	                triggerElement: this,
	                triggerHook: .1,
	                offset:-500,
	                reverse:false,
	            })
	            .setTween(tl)
	            .addTo(controller);
        	});

        	$('.staggerzoomindown_hldr').each(function() {
	            var tl = new TimelineMax({delay:0, repeat:0, repeatDelay:0});
	             tl.staggerTo(".staggerzoomindown", 1.00, {css:{className:'+=ZoomInDown'}}, 0.5,)
	              // .staggerTo(".stagger-bounce", 1.00, { x: "0", y: "0%", opacity: 1, ease: Bounce.easeOut }, 0.5,)

	            var fadeScene = new ScrollMagic.Scene({
	                triggerElement: this,
	                triggerHook: .1,
	                offset:-500,
	                reverse:false,
	            })
	            .setTween(tl)
	            .addTo(controller);
        	});

        	$('.staggerflipx_hldr').each(function() {
	            var tl = new TimelineMax({delay:0, repeat:0, repeatDelay:0});
	             tl.staggerTo(".staggerflipx", 1.00, {css:{className:'+=flipInX'}}, 0.5,)
	              // .staggerTo(".stagger-bounce", 1.00, { x: "0", y: "0%", opacity: 1, ease: Bounce.easeOut }, 0.5,)

	            var fadeScene = new ScrollMagic.Scene({
	                triggerElement: this,
	                triggerHook: .1,
	                offset:-500,
	                reverse:false,
	            })
	            .setTween(tl)
	            .addTo(controller);
        	});

        	$('.staggerflipy_hldr').each(function() {
	            var tl = new TimelineMax({delay:0, repeat:0, repeatDelay:0});
	             tl.staggerTo(".staggerflipy", 1.00, {css:{className:'+=flipInY'}}, 0.5,)
	              // .staggerTo(".stagger-bounce", 1.00, { x: "0", y: "0%", opacity: 1, ease: Bounce.easeOut }, 0.5,)

	            var fadeScene = new ScrollMagic.Scene({
	                triggerElement: this,
	                triggerHook: .1,
	                offset:-500,
	                reverse:false,
	            })
	            .setTween(tl)
	            .addTo(controller);
        	});

        	$('.staggerjack_hldr').each(function() {
	            var tl = new TimelineMax({delay:0, repeat:0, repeatDelay:0});
	             tl.staggerTo(".staggerjack", 1.00, {css:{className:'+=jackInTheBox'}}, 0.5,)
	              // .staggerTo(".stagger-bounce", 1.00, { x: "0", y: "0%", opacity: 1, ease: Bounce.easeOut }, 0.5,)

	            var fadeScene = new ScrollMagic.Scene({
	                triggerElement: this,
	                triggerHook: .1,
	                offset:-500,
	                reverse:false,
	            })
	            .setTween(tl)
	            .addTo(controller);
        	});


		},
		
	},
}