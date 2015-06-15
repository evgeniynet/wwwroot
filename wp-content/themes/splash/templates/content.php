<?php
 $month = get_field("sherpa-blog-date-month");
 $day =   get_field("sherpa-blog-date-day");
 $year =  get_field("sherpa-blog-date-year");
 $image = get_field("sherpa-blog-img");
?>

<script type="text/javascript">
	function fbShare(url, title, descr, image, winWidth, winHeight) {
        var winTop = (screen.height / 2) - (winHeight / 2);
        var winLeft = (screen.width / 2) - (winWidth / 2);
        window.open('http://www.facebook.com/sharer.php?s=100&p[title]=' + title + '&p[summary]=' + descr + '&p[url]=' + url + '&p[images][0]=' + image, 'sharer', 'top=' + winTop + ',left=' + winLeft + ',toolbar=0,status=0,width=' + winWidth + ',height=' + winHeight);
    }
</script>
<article class="blogPost" <?php post_class(); ?>>
	<a class="crawlLink" href="<?php echo the_permalink(); ?>'"></a>
	<a class="internal" href="#">
		<div class="dateTab">
			<h1 class="dateDay"><?php echo $day; ?></h1>
			<h4 class="dateMonth"><?php echo $month; ?></h4>
			<h4 class="dateYear"><?php echo $year; ?></h4>
			<div class="dateTabBorder"></div>
		</div>
	</a>
	<div class="activeArrow"></div>
	<ul class="blogContent">
		<li class="blogImage">
			<img src="<?php echo $image; ?>">
		</li>
		<li class="blogPostData">
			<ul class="blogSocialMedia">
				<li>
					<h4>Share This Post</h4><i class="fa fa-share-alt"></i>
				</li>
				<li>
					<a href="javascript:fbShare('<?php echo the_permalink(); ?>', 'Fb Share', 'Facebook share popup', 'http://goo.gl/dS52U', 520, 350)">
					<div><i class="fa fa-facebook"></i></div>
					</a>
				</li>
				<li>
					<a class="tweet" title="#" href="#" target="_blank">
					<div><i class="fa fa-twitter"></i></div>
					</a>
				</li>
				<li>
					<a class="linked" target="_blank" href="http://www.linkedin.com/company/sherpadesk">
					<div><i class="fa fa-linkedin"></i></div>
					</a>
				</li>
			</ul>
			<a class="blogLink" href="<?php echo the_permalink(); ?>">
				<h1 class="blogTitle"><?php the_title(); ?></h1>
			</a>
			<div class="blogText"><?php the_content(); ?></div>
			<div class="emailCapture">
				<h1 class="blogFooter">Get Great Tips & Updates, Join The List</h1>
				<p>
    				<input type="email" class="blogCatcher" id="mc4wp_email" name="EMAIL" placeholder="email" required />
				</p>
				<p>
    				<input class="subscribe" type="submit" value="SUBSCRIBE" />
				</p>
			</div>
		</li>
	</ul>
</article>
