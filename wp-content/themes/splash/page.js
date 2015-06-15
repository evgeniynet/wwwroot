$(document).ready(function(){

var header = {
	init:function() {
		this.addShadow();
		this.logo();
	},

	addShadow:function() {
		$(window).scroll(function(){
			var top = $(document).scrollTop();
			if(top > 100)
			{
				$(".header").css("box-shadow","rgba(136, 136, 136, 0.258824) 0px 5px 5px");
			}
			else
			{
				$(".header").css("box-shadow","rgba(136, 136, 136, 0.0) 0px 5px 5px");
			}
		});
	},

	logo:function() {
		$(document).ready(function(){
			$("#logoBlue").animate({
				"margin-top": "7px",
				"opacity": "1"
			}, 500, function(){
				$("#logoBlue").animate({
					"margin-top":"4px"
				},200);
			});
		});
	}
};


var hovers = {
	init:function() {
		this.video();
		this.screenShot();
		this.button();
		this.social();
		this.footer();
		this.people();
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
	},
	people:function() {
		$('.personBlock').hover(
       		function(){  ;$(this).find(".personCover").fadeIn()},
       		function(){ $(this).find(".personCover").fadeOut() }
		)
	}

};

var sideMenu = {
	init:function() {
		this.menu();
	},

	menu:function() {
		$("#mobileNavigation").click(function(){
			$("html, body").animate({ scrollTop: 0 }, "fast");
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
	var pricing = {
		init:function() {
			this.initCalculator();
			this.calcTabs();
		},

		initCalculator:function() {
			if (location.pathname.indexOf("/pricing") >= 0)
        	{
           		$('.calculator-wrap, .price-bar-row, .calc-cta').hide();
           		$('.pageH1').html('Construct your own plan');
           		$('.pageH1').css('font-family','Open Sans, sans-serif');
           		$('.subscribe').css('margin-top','-15px');
           		$('#plan3').click(function(){
           			$('.price-number').html('0.00');
           			$('.calc-cta').fadeIn();
           		});
           		$('#plan4').click(function(){
           			$('.price-number').html('9.95');
           			$('.calc-cta').fadeIn();
           		});
           		$('.calcTabs').on('click',function(e){
           			e.preventDefault();
           		});
           		$('#custoTab').css('background-color','#379ac9');

       		}

		},
		calcTabs:function() {
			$('#calcFeature').click(function(){
				$(this).css('background-color','#379ac9');
				$('#custoTab').css('background-color','#004a84');
			});
			$('#custoTab').click(function(){
				$(this).css('background-color','#379ac9');
				$('#calcFeature').css('background-color','#004a84');
			});
		}
	};

	var blog = {
		init:function() {
			this.injection();
			this.injectContainer();
			this.showPost();
			this.shares();
			this.morePost();
			this.scrollNav();
			this.mobile();
			// this.sectionHover();
		},

		injection:function() {
			//var buttonInsert = '<a class="internal" href="#"><div class="showMorePost"><i class="fa fa-calendar"></i><span>More Post</span><div class="moreTabBorder"></div></div></a>';
			if (location.pathname.indexOf("/blog") >= 0 || $('.singlePagePost').length == 1)
        	{
      			$('.pageTitle').css('height',"0px");
      			$('.photoCoverSmall, .pagePhotoCover').css({
      				'height':'70px',
      				'background-color':'#fff',
      				'position':'static',
      				'margin-top':'0px',
      				'box-shadow': '0px 1px 5px #888888'
      			});
      			 $('.navigation p, #mobileNavigation').css('color','#4c5156 !important');
      			$('#logo').attr('src','http://sherpadesk.com/wp-content/themes/splash/img/logo.png');
      			$('footer').hide();
      			//$('.header').css('display','none !important');
      			$('.internal').click(function(e){
      				e.preventDefault();
      			})
       		}
		}, 
		injectContainer:function() {

			if (location.pathname.indexOf("/blog") >= 0)
        	{
            	$('.container').addClass('blogContainer');
       		}
		},
		scrollNav:function() {
			var articleTop = 0;
			window.onscroll = function (e) {  
				//var scrollPos = $(window).scrollTop();
				//$(window).scrollTop(0);
				// articleTop = articleTop + 3;
			}		 
		},
		morePost:function(){
			var numberOfPost = $('.blogPost').length;
			var buttonInsert = '<a class="internal" href="#"><div class="showMorePost"><i class="fa fa-calendar"></i><span>More Post</span><div class="moreTabBorder"></div></div></a>';
			var newPostInsert = '<div class="newPostButton"><i id="newPost" class="fa fa-chevron-up"><span>New Post</span></i></div>';
			var latestPostVisiable = 5;
			//init
			$('.col-md-12').append(buttonInsert);
			initailPost(5, numberOfPost);
			$(document).on('click','.showMorePost',function(){
				$('.showMorePost, .newPostButton').hide();
				ShowOlderPost(latestPostVisiable, 5, numberOfPost);
				if( latestPostVisiable < numberOfPost){
					$('.col-md-12').append(buttonInsert);
				}
				$('.col-md-12').append(newPostInsert);
			});
			$(document).on('click','.newPostButton',function(){
				showNewerPost();
			});

			//show the intial Post up to the amount of post choosen to show
			function initailPost(initPostShown, initNumberOfPost) {
				if(initNumberOfPost > initPostShown){
					for(var  i= initPostShown; i < initNumberOfPost; i++){
						$('.dateTab:eq('+i+')').hide();
					}
				}
			}
			//show older post 
			function ShowOlderPost(visablePost, totalPost, lastPost) {
				//fade the current post that are visable
				//alert('visablePost:'+visablePost+' totalPost:'+totalPost+' lastPost:'+lastPost);
				for(var a = visablePost -totalPost; a < totalPost;  a++){
					$('.dateTab:eq('+a+')').animate({
						'opacity':'0'
					},1000);
				}
				//show next set of older post 
				for(var b = visablePost; b < totalPost + visablePost; b++) {
					$('.dateTab:eq('+b+')').fadeIn();
				}
				//hide what was the current post 
				for(var c = visablePost - totalPost; c < totalPost; c++) {
					$('.dateTab:eq('+c+')').hide();
				}
				$('.blogContent').css('margin-top',0);
				//updatePost(latestPostVisiable + 1);
				post  = latestPostVisiable;
				$('.dateTab:eq('+post+')').trigger('click');
				latestPostVisiable = 5 + 5;
			}
			//show newer post 
			function showNewerPost() {
				window.location = 'http;//sherpadesk.com/blog';
			}
		},
			shares:function(){
			// $('.popup').click(function(event) {
  	// 		  var width  = 575,
 		// 	       height = 400,
 		// 	       left   = ($(window).width()  - width)  / 2,
 		// 	       top    = ($(window).height() - height) / 2,
 		// 	       url    = this.href,
 		// 	       opts   = 'status=1' +
 		// 	                ',width='  + width  +
 		// 	                ',height=' + height +
 		// 	                ',top='    + top    +
 		// 	                ',left='   + left;
 			   
 		// 	   window.open("url", 'twitter', opts);
  	// 		  return false;
  	// 		});
		},
		showPost:function() {
			// init fm
			$('.blogPost:eq(0)').css('width','100%');
			$('.blogContent:eq(0)').show();
			$('.dateTab:eq(0)').addClass('activeDateTab');
			$('.activeArrow:eq(0)').show();
			$('.dateTabBorder:eq(0)').hide();

			// first Blog post 
			var firstTitle = $('.blogTitle:eq(0)').html();
			var firstText = $('.blogText:eq(0)').html();
			var firstImage = $('.blogImage:eq(0)').html();
			var firstSocial = $('.blogSocialMedia:eq(0)').html();
			var permLink = '';
			var shareTitle = '';
			$('.blogPost:eq(0)').addClass('firstPost');
			$('.dateTab').on('click',function(){
				var postObject = $(this).parent().offsetParent()[0];
				if($(postObject).hasClass('firstPost')){
					$('.blogTitle:eq(0)').html(firstTitle);
					$('.blogImage:eq(0)').html(firstImage);
					$('.blogText:eq(0)').html(firstText);
					$('.blogSocialMedia:eq(0)').html(firstSocial);

				}
				$('.activeArrow').hide();
				$('.dateTab').removeClass('activeDateTab');
				$('.dateTabBorder').show();
				$(postObject).find('.activeArrow').show();
				$(postObject).find('.dateTab').addClass('activeDateTab');
				$(postObject).find('.dateTabBorder').hide();

				//getpostData
				var title = $(postObject).find('.blogTitle').html();
				var blogText = $(postObject).find('.blogText').html();
				var blogImage = $(postObject).find('.blogImage').html();
				var social = $(postObject).find('.blogSocialMedia').html();
				permLink = $(postObject).find('.crawlLink').attr('href');
				permLink = permLink.substring(0,permLink.length -1);
				shareTitle = title;
				$('.blogSocialMedia').html(social);
				$('.blogLink:eq(0)').attr('href', permLink);
				$('.blogTitle:eq(0)').html(title);
				$('.blogImage:eq(0)').html(blogImage);
				$('.blogText:eq(0)').html(blogText);
				$('.blogPostData').scrollTop(0);
				if (window.history.replaceState) {
   					//prevents browser from storing history with each change:
   					window.history.replaceState( shareTitle, shareTitle, permLink);
				}

			});
			$(document).on('click','.tweet',function(e){
				 //We tell our browser not to follow that link
			  e.preventDefault();
			  //We get the URL of the link
			  var loc = permLink;
			  //We get the title of the link
			  var title  = escape(shareTitle);
			  //We trigger a new window with the Twitter dialog, in the middle of the page
			  window.open('http://twitter.com/share?url=' + loc + '&text=' + title + '&', 'twitterwindow', 'height=450, width=550, top='+($(window).height()/2 - 225) +', left='+$(window).width()/2 +', toolbar=0, location=0, menubar=0, directories=0, scrollbars=0');
			});

			$(document).on('click','.linked',function(e){
				e.preventDefault();
				var pageLink = permLink;
				var pageTitleUri = shareTitle;
				window.open('http://www.linkedin.com/shareArticle?mini=true&url='+pageLink+'&title='+pageTitleUri);
			});

			postPageHeader = $('.pageH1').html();
			if(postPageHeader == 'The Sherpa Blog'){
				$('.pageH1').hide();
			}
		},
		mobile:function() {
			var vpHeight = $(window).height();
			var vpWidth = $(window).width();
			if(vpWidth < 1200) {
				$('.blogPostData').css('height',vpHeight - 100);
				$('.blogContent').css('height',vpHeight - 100);
			}
		}

		// sectionHover:function() {
		// 	$('.layoutSections').mouseenter(function(){
		// 		//$(this).find('.shadow').css('box-shadow','rgb(136, 136, 136) 0px 4px 5px');
		// 		$(this).find('.timeCircle').animate({
		// 			width:30,
		// 			height: 30,
		// 			top:182,
		// 			left:85
		// 		},300, function(){
		// 			$(this).addClass('circleFace');
		// 		});
		// 	});
		// 	$('.layoutSections').mouseleave(function(){
		// 		//$(this).find('.shadow').css('box-shadow','transparent 0px 4px 5px');
		// 		$(this).find('.timeCircle').animate({
		// 			width:10,
		// 			height: 10,
		// 			top: 193,
		// 			left: 95
		// 		},300, function(){
		// 			$(this).removeClass('circleFace');
		// 		});
		// 	});
			
		};




(function() {
	blog.init();
	//openTicket.init();
	pricing.init();
	sideMenu.init();
	header.init();
	hovers.init();
  }()); 
});