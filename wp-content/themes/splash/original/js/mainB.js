$(document).ready(function(){



var setBanner = {
  init:function(){
    this.bannerSize();
  },

  bannerSize:function() {
    var viewportHeight = $(window).height();
    if(viewportHeight < 700){
			viewportHeight = 700;
		}
    var stick = viewportHeight -65;
    $("header").css("height",viewportHeight );
    $(".navList").css("top",stick);
  }
};


var downArrow = {
	init:function() {
		this.down();
		//this.getStarted();
	},

	getStarted:function() {
		var viewportHeight = $(window).height();
		if(viewportHeight < 700){
			viewportHeight = 780;
		} 

	 	var viewportWidth = $(window).width();
	 	$("#headerGetStarted").css("top",viewportHeight - 250);
	 	$("#headerGetStarted").css("left",(viewportWidth / 2) - 90 );
	 	if(viewportWidth < 650) {
	 			var viewportHeight = $(window).height();
	 			$("#headerGetStarted").css("top",viewportHeight - 150);
	 		}
	 	$(window).resize(function(){
	 		var viewportWidth = $(window).width();
	 		
	 		if(viewportWidth < 650) {
	 			var viewportHeight = $(window).height();
	 			$("#headerGetStarted").css("top",viewportHeight - 150);
	 		}else {
	 			var viewportHeight = $(window).height();
	 			$("#headerGetStarted").css("top",viewportHeight - 250);
	 		}
	 		$("#headerGetStarted").css("left",(viewportWidth / 2) - 90 );

	 	});
	},


	down:function() {
	 var viewportHeight = $(window).height();
	 if(viewportHeight < 700){
			viewportHeight = 700;
		}
	 var viewportWidth = $(window).width();


	 $(".arrowDown").css("top",viewportHeight - 85);
	 $(".arrowDown").css("left",(viewportWidth)-75 );
	 $(window).scroll(function() {
   		if($(window).scrollTop() > 1) {
       		$(".arrowDown").fadeOut(100);
   		}
	 });
	 $(window).resize(function() {
	    viewportHeight = $(window).height();
	 	viewportWidth = $(window).width();
	 	$(".arrowDown").css("top",viewportHeight - 85);
	 	$(".arrowDown").css("left",(viewportWidth)-25 );
	 });
	}
};


var sideMenu = {
	init:function() {
		this.menu();
	},

	menu:function() {
		$("#navIcon").click(function(){
			$('.popUp').fadeIn();
			$('#navIcon').css("color","transparent");
			$('#navIcon').css("background-color","transparent");
		});
		$('.popUp').click(function(){
			$('.popUp').fadeOut();
			$('#navIcon').css("color","#fff");
			$('#navIcon').css("background-color","rgba(0,0,0,0.5)");
		});

	}
};

var header = {
	init:function() {
		this.hideHead();
		this.showNumber();
		//this.fadeTitle();
		this.headerColor();
	},

	headerColor:function() {
		var height = $(window).height();
			$(".headerNav").css("background-color","#fff");
			$("header p").css("color","#4c5156");
			$("header i").css("color","#4c5156");
	},

	fadeTitle:function(){
		$(window).scroll(function(){
			var top = $(window).scrollTop();
			var threshold = false;
			

			/*if( top > 5 )
				{	
					$("#word1").fadeOut("slow");
					setTimeout(
  					function() 
  					{
  				  		$("#word1").css("color","transparent");
  					}, 400);
					$("#word1").fadeIn("fast");
				
				}*/
			if( top > 15)
				{	
					$(".small").fadeOut("slow");
					setTimeout(
  					function() 
  					{
  				  		$(".small").css("color","transparent");
  					}, 400);
					$(".small").fadeIn("fast");
				}
			if( top > 40)
				{	
					$(".big").fadeOut("slow");
					setTimeout(
  					function() 
  					{
  				  		$(".big").css("color","transparent");
  					}, 400);
					$(".big").fadeIn("fast");
				}
			if( top > 80)
				{	
					$("#damn").fadeOut("slow");
					setTimeout(
  					function() 
  					{
  				  		$("#damn").css("color","transparent");
  					}, 400);
					$("#damn").fadeIn("fast");
				}
			if( top > 110 )
				{
					$("#name, #largeQoute").animate({
						"font-size":"0px",
					}, 500);
					$(".smallStay, .huge").animate({
						"font-size":"50px",
						"font-weight":"700"
					},500);

					threshold = true;
					$("#damn").remove();
					$(".big").remove();
					$(".small").remove();
					$("#word1").remove();
				}		
		});
	},

	showNumber:function() {
		$("#contact").mouseenter(function(){
			$(".phone").fadeIn("fast");
		});
		$("#contact").mouseleave(function(){
			$(".phone").fadeOut("fast");
		});
	},

	hideHead:function() {
		
		var height = $(window).height();
		$(window).scroll(function() {
   			if($(window).scrollTop() > height -180 ){
				$("#logo").fadeOut(100);
				$(".headerNav").css("box-shadow","0px 5px 5px rgba(136, 136, 136, 0.26)");
				
   			}else{
   				$("#logo").fadeIn(700);
   				
   			}
	 	});
	 	$(window).scroll(function() {
   			if($(window).scrollTop() > height -80 ){

				$(".regHeaderItem").css("margin-top","0px");
				//$("#contact").css("margin-top","0px");
				//$("#phoneIcon").css("margin-top","10px");
   			}else{
   				$(".regHeaderItem").css("margin-top","14px");
   				//$("#contact").css("margin-top","14px");
   				//$("#phoneIcon").css("margin-top","18px");
   			}
	 	});

	 	$(window).scroll(function() {
   			if($(window).scrollTop() > height -40 ){
   				if($(window).width() > 400){
   				$('.headerNav li:nth-child(2)').css('margin-top','0');
				$("#headerButton").fadeIn(500);
				$('.headerNav li:nth-child(2) span').html('');
				$("#logoBlue").fadeIn(500);  					
   				}
   			}else{
   				$("#headerButton").fadeOut(100);
   				setTimeout(function(){
   					$('.headerNav li:nth-child(2)').css('margin-top','16');
   					$('.headerNav li:nth-child(2) span').html('Start Free');
   				},100);
   				$("#logoBlue").fadeOut(100);
   				$(".headerNav").css("box-shadow","0px 5px 5px rgba(136, 136, 136, 0)");
   			}
	 	});
	}
};

var expandPhones = {
	init:function() {
		this.unFold();
	},

	unFold:function() {
		$(window).scroll(function(){
			if($(window).scrollTop() > 3300)
			{
				$("#phones").animate({
					"width":"49.33%"
				},1000);
				setTimeout(
  				function() 
  				{
  				  $("#phones").finish();
  				}, 2000);
			}
		});
	}
};

var pricing = {
	init:function() {
		this.overLay();
	},

	overLay:function() {
		$('.custom').hover(
       		function(){ $("#overLayCustom").slideDown()},
       		function(){ $("#overLayCustom").slideUp()}
		)
		$('#free').hover(
       		function(){ $("#overLayFree").slideDown()},
       		function(){ $("#overLayFree").slideUp()}
		)
	}
};

var hovers = {
	init:function() {
		this.video();
		this.screenShot();
		this.button();
		this.social();
		this.footer();
	},

	video:function() {
		$('#video').hover(
       		function(){ $(".playVideoButton").addClass('videoDark') },
       		function(){ $(".playVideoButton").removeClass('videoDark') }
		)
	},

	screenShot:function() {
		$('.screenShot img').hover(
       		function(){  $(this).addClass('screenShotPop') },
       		function(){ $(this).removeClass('screenShotPop') }
		)
	},

	social:function() {
		$('.socialLink').hover(
       		function(){  $(this).addClass('socailPop') },
       		function(){ $(this).removeClass('socailPop') }
		)
	},
	button:function() {
		$('.subscribe, #lastGetStarted, .getStartedButton').hover(
       		function(){  $(this).addClass('buttonPop') },
       		function(){ $(this).removeClass('buttonPop') }
		)
	},
	footer:function() {
		$('.link').hover(
       		function(){  $(this).addClass('linkPop') },
       		function(){ $(this).removeClass('linkPop') }
		)
	}
};

var logoBar = {
	init:function() {
		this.tightenUp();
	},

	tightenUp:function() {
		var viewportHeight = $(window).height();
		var shrunk = false;
		$(window).scroll(function(){
			if($(window).scrollTop() > viewportHeight - 110 && shrunk == false){
			$(".logos").animate({
				"height":"0px",
			}, 500);
			$(".client").fadeOut();
			shrunk = true;
			}
			else if($(window).scrollTop() < viewportHeight - 142 && shrunk == true)
			{
				$(".logos").animate({
				"height":"77px",
			}, 500);
				$(".client").fadeIn();
				shrunk = false;
			}
		});
	}
};

var priceCalc = {
	init:function() {
		this.showCalc();
		this.values();
	},

	showCalc:function() {
		$("#tweak, .custom").click(function(e){
			$(".point").on("click",function(e){
				e.preventDefault();
			});
			$("#customInfo").fadeOut(200);
			setTimeout(
  					function() 
  					{
  						setTimeout(
  					function() 
  					{
  						$(".calc").fadeIn(600);

  					}, 500);
  				  		
  						$(".or").fadeOut(100);
  						if($(window).width() < 1300){
							$("#free").fadeOut(100);
						}
  				  		$(".custom").animate({
							"width":"700px",
							"height":"125%",
							"margin-top":"-80px"
						}, 400);
						$(".custom").css("background-color","rgba(220, 224, 219, 0.85)");
  					}, 500);
		});
	},


	values:function() {
		var priceTotal = 0;
		var addedValue = 0;
		var effciency = "0%";
		var average = "0%";
		var techs = 0; var numberOfTechs =4;
		var locations = 0;
		var accounts = 0; var numberOfAccounts = 3;
		var projects = 0; var numberOfProjects = 3;
		var assets = 0;
		var storage = 0;

		//button values 
		var directory = 0; var directoryActive = false;
		var http = 0; var httpActive = false;
		var invoice = 0; var invoiceActive = false;
		var remote = 0; var remoteActive = false;


		$("#techs").change(function(){
			techs = $("#techs").val();
			numberOfTechs = techs;
			$("#techValue").html(techs);
			if(techs > 4){
				techs = 9.95 * techs - 39.8;
			}else 
			{
				techs = 0;
			}
			if(directoryActive == true){
				directory = numberOfTechs * 2;
			}
			if(remoteActive == true){
				remote = numberOfTechs * 2;
			}
			
		});
		$("#locations").change(function(){
			locations = $("#locations").val();
			$("#locationsValue").html(locations);
			if(locations > 4){
				locations = .25 * locations - 1;
			}
		});
		$("#accounts").change(function(){
			accounts = $("#accounts").val();
			numberOfAccounts = accounts;
			numberOfAccounts = numberOfAccounts *.05;
			$("#accountsValue").html(accounts);
			if(accounts > 3){
				accounts = accounts * .20 - .60;
			}
		});
		$("#projects").change(function(){
			projects = $("#projects").val();
			numberOfProjects = projects;
			numberOfProjects = numberOfProjects * .03;
			$("#projectsValue").html(projects);
			if(projects > 3)
			{
				projects = projects * .50 - 1.5;
			}
		});
		$("#assets").change(function(){
			assets = $("#assets").val();
			$("#assetsValue").html(assets);
			if(assets > 25){
				assets = assets * .5 - 1.25;
			}
		});
		$("#storage").change(function(){
			storage = $("#storage").val();
			$("#storageValue").html(storage);
			if(storage > 1){
				storage = storage * 1 -1;
			}
		});

		//buttons 
		$(".outerCircle").click(function(){
			var buttonValue = $(this).attr("data-id");
			if(buttonValue == "directory")
			{
				if(directoryActive == false){
					directoryActive = true;
					directory = 2 * numberOfTechs;
				}else{
					directoryActive = false;
					directory = directory * -1;
				}
				
			}
			if(buttonValue == "http")
			{
				if(httpActive == false)
				{
					http = 10;
					httpActive = true;
				}else
				{
					http = 0;
					httpActive = false;
				}
					
			}
			if(buttonValue == "invoice")
			{
				if(invoiceActive == false)
				{
					invoice = 20;
					invoiceActive = true;
				}else
				{
					invoice = 0;
					invoiceActive = false;
				}
				
			}
			if(buttonValue == "remote")
			{
				if(remoteActive == false){
					remoteActive = true;
					remote = 2 * numberOfTechs;	
				}else{
					remoteActive = false;
					remote = remote * -1;
				}
				
			}
			$(this).find(".innerCircle").toggleClass("checkFill");
			priceTotal = techs + locations + accounts + projects + assets + storage + directory + http + invoice + remote;
			priceTotal = parseFloat(Math.round(priceTotal * 100) / 100).toFixed(2);
			priceTotal = priceTotal.toString();
			if(priceTotal == "NaN" || priceTotal < 0){priceTotal = "0";}
			$("#monthPrice").html("$"+priceTotal);
		});


		function calcReset() {
			$('#storageValue').html('1');
			$('#storage').val('1');
			$('#assetsValue').html('25');
			$('#assets').val('25');
			$('#projectsValue').html('3');
			$('#projects').val('3');
			$('#accountsValue').html('3');
			$('#accounts').val('3');
			$('#locationsValue').html('4');
			$('#locations').val('4');
			$('#techValue').html('4');
			$('#techs').val('4');

		}

		//update monthly price
		$("#storage, #assets, #projects, #accounts, #locations, #techs").change(function(){
			// monthly price total 
			priceTotal = techs + locations + accounts + projects + assets + storage + directory + http + invoice + remote;
			priceTotal = parseFloat(Math.round(priceTotal * 100) / 100).toFixed(2);
			priceTotal = priceTotal.toString();
			if(priceTotal == "NaN" || priceTotal < 0){priceTotal = "0";}
			if(priceTotal > 1000 || priceTotal < 0)
			{
				effciency = 17;
				average = 24;
				priceTotal = 0;
				calcReset();
			}

			$("#monthPrice").html("$"+priceTotal);
			
			//first metric 
			effciency = numberOfTechs * 25 /(numberOfProjects + numberOfAccounts);
			effciency = effciency;
			effciency = parseFloat(Math.round(effciency * 100) / 100).toFixed(0);
			if(effciency == NaN)
			{
				effciency = 0;
			}
			$(".effciency").html(effciency+"%");

			//second metric 
			average = (numberOfProjects + numberOfAccounts)* 16 / numberOfTechs;
			average = parseFloat(Math.round(average * 100) / 100).toFixed(0);
			if(average == NaN)
			{
				average = 0;
			}
			$(".average").html(average+"%");




			//update graph
			$("#canvas").remove();
			$(".colorBox").fadeIn();
			$(".colorBanner").fadeIn();
			var insert ="<canvas id='canvas' height='180' width='180'></canvas><script>var doughnutData = [{value : "+effciency+",color : 'rgba(34, 138, 169, 0.8)'},{value : "+average+",color : 'rgba(97, 173, 46, 0.59)'}];var myDoughnut = new Chart(document.getElementById('canvas').getContext('2d')).Doughnut(doughnutData);</script>";
			$(insert).appendTo("#graphHere");
		});
	}
};

	var unstaticVideo = {
		init:function() {
			this.changePic();
		},

		changePic:function(){
			var slides = ["jam1.png","jam2.png","jam3.png","jam5.png","jam6.png","jam7.png","jam8.png","jam9.png","jam10.png","jam11.png","jam12.png","jam13.png","jam14.png","jam15.png","jam16.png","jam17.png","jam18.png","jam19.png","jam20.png","jam21.png","jam22.png","jam23.png"];
			var i = 0;
			var path = "http://localhost/wordpress/wp-content/themes/splash";
			setInterval(
          		function() 
          		{	

            		$("#video").attr("src",path+"/img/"+slides[i]);

            		i++;
            		if(i > slides.length -1){i =0;}

          		}, 150);
		}
	};

	var responsive = {
		init:function() {
			this.mobileClasses();
			this.popUp();
		},

		mobileClasses:function() {
			$(window).resize(function(){

			});
		},

		popUp:function() {
			$('.popUp').css('height',$(window).height());
			$('.popUp').css('width',$(window).width());
		}
	};

	var scrollAnimations = {
		init:function() {
			this.screenShots();
			this.showFeatures();
		},

		screenShots:function(){
			setTimeout(function(){
				$('.addTicketTag').attr('id','trackTicketSS');
				$('.addTimeTag').attr('id','timelogsSS');
				$('.addInvoiceTag').attr('id','invoiceSS');
			},1000);
			$(function() {
			  $('a[href*=#]:not([href=#])').click(function() {
			    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			      var target = $(this.hash);
			      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			      if (target.length) {
			        $('html,body').animate({
			          scrollTop: target.offset().top
			        }, 1000);
			        return false;
			      }
			    }
			  });
			});
		},

		showFeatures:function() {
			setTimeout(function(){
				$('#featureOne').animate({
					opacity:"1"
				},550, function(){
					$('#featureTwo').animate({
						opacity:"1"
					},550, function(){
						$('#featureThree').animate({
							opacity:"1"
						},550, function(){
							//do nothing
						});
					});
				});
			},200);
			
		}
	};


	var addPhoneNumber = {
		init:function() {
			this.addNumber();
		},
		addNumber:function(){
			var clicked = 0;
			$('#contactUs').click(function(){
				if(clicked < 1){
				setTimeout(function(){
					var insert = "<p class='callUs'><span>Support </span>866 996 1200 ext 2</p>";
				$(insert).appendTo('#sherpadesk_divContactus');
				clicked++;
				},200);
				}
			});
		}
	};



(function() {
	addPhoneNumber.init();
	responsive.init();
	unstaticVideo.init();
	//priceCalc.init();
	pricing.init();
	//logoBar.init();
	scrollAnimations.init();
	hovers.init();
	expandPhones.init();
	setBanner.init();
	sideMenu.init();
	downArrow.init();
	//header.init();
  }()); 
});