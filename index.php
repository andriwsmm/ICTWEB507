<head>
	<title>Food as medicine!</title>
	<link rel="stylesheet" href="http://playground.local/wp-content/themes/PlayTheme/style.css">

</head>


<body>
	<h1>About Food</h1>
	<ul class="grid">
	<?php while(have_posts()) : the_post(); ?>
		<li class="grid-item">
			<article class="card">
				<small><?php print get_the_date() ?></small>
				<h2 class="post-title"><?php the_title() ?></h2>
				<?php the_post_thumbnail('thumbnail'); ?>
				<?php the_excerpt() ?>
				<a href="<?php the_permalink ?>" >Read More</a>
			
			</article>
		</li>
	<?php endwhile ?>		
	</ul>
</body>

