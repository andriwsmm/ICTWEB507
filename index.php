<head>
	<title>Food as medicine!</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>


<body>
	<h1>About Food</h1>


	<div class="container">
		<div class="row">
			<?php while(have_posts()) : the_post(); ?>
				<div class="col-sm">
					<div class="card" style="width: 18rem;">
						<small><?php print get_the_date() ?></small>
						<img src="https://placehold.it/300x200/" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title"><?php the_title() ?></h5>
							<div class="card-text"><?php the_excerpt() ?></div>
							<a href="#" class="btn btn-primary">Read More</a>
						</div>
					</div>
				</div>
			<?php endwhile ?>	
		</div>
	</div>
	

</body>

