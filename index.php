<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Animated Heart Background | AnimeJS</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div class="container">
			<div class="heart"></div>
		</div>

		<script type="text/javascript" src="anime.min.js"></script>
		<script type="text/javascript">
			const container = document.querySelector('.container');
			for (var i = 1; i<=30; i++){
				const hearts = document.createElement('div');
				hearts.classList.add('heart');
				container.appendChild(hearts);
			}

			function animateHearts(){
				anime({
					targets: '.heart',
					translateX: function(){
						return anime.random(-700, 700);
					},
					translateY: function(){
						return anime.random(-500, 500);
					},
					rotate: 45,
					scale: function(){
						return anime.random(1, 5);
					},
					easing: 'easeInOutBack',
					duration: 2000,
					delay: anime.stagger(10),
					complete: animateHearts //loop
				})
			}

			// run it.
			animateHearts()
		</script>
	</body>
</html>