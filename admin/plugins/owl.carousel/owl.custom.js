jQuery(document).ready(function($) {
                //owl carousel
      $("#owl-demo").owlCarousel({
     
          navigation : true, // Show next and prev buttons
          slideSpeed : 300,
          paginationSpeed : 400,
          //singleItem:true
     
          // "singleItem:true" is a shortcut for:
           items : 1, 
          // itemsDesktop : false,
          // itemsDesktopSmall : false,
          // itemsTablet: false,
          // itemsMobile : false
     
      });
                $('#owl-demo2').owlCarousel({
				    margin:20,
				    nav:true,
					autoplay:true,
					dots:false,
				    responsive:{
				        0:{
				            items:1
				        },
				        480:{
				            items:2
				        },
				        700:{
				            items:4
				        },
				        1000:{
				            items:3
				        },
				        1100:{
				            items:5
				        }
				    }
				});
				
				
				$('.three').owlCarousel({
				    margin:20,
				    nav:true,
					autoplay:true,
					dots:false,
				    responsive:{
				        0:{
				            items:1
				        },
				        480:{
				            items:2
				        },
				        700:{
				            items:4
				        },
				        1000:{
				            items:3
				        },
				        1100:{
				            items:3
				        }
				    }
				});
				$('.four').owlCarousel({
				    margin:20,
				    nav:true,
					autoplay:true,
					dots:false,
				    responsive:{
				        0:{
				            items:1
				        },
				        480:{
				            items:2
				        },
				        700:{
				            items:3
				        },
				        1000:{
				            items:4
				        },
				        1100:{
				            items:4
				        }
				    }
				});
				
				
				
				$('.five').owlCarousel({
				    margin:20,
				    nav:true,
					autoplay:true,
					dots:false,
				    responsive:{
				        0:{
				            items:1
				        },
				        480:{
				            items:2
				        },
				        700:{
				            items:4
				        },
				        1000:{
				            items:5
				        },
				        1100:{
				            items:5
				        }
				    }
				});
				
				
				
				$('.six').owlCarousel({
				    margin:20,
				    nav:true,
					autoplay:true,
					dots:false,
				    responsive:{
				        0:{
				            items:1
				        },
				        480:{
				            items:2
				        },
				        700:{
				            items:4
				        },
				        1000:{
				            items:6
				        },
				        1100:{
				            items:6
				        }
				    }
				});
				
				$('.two').owlCarousel({
				    margin:20,
				    nav:true,
					autoplay:true,
					dots:false,
				    responsive:{
				        0:{
				            items:1
				        },
				        480:{
				            items:2
				        }, 
				        1100:{
				            items:2
				        }
				    }
				});
            });