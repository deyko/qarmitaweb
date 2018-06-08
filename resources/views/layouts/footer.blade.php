<style>

	.social {
		display: flex;
		justify-content: center;
		flex-wrap: wrap;
	}
	.social__button {
		display: block;
		width: 45px;
		height: 45px;
		border-radius: 100%;
		background: #fff;
		position: relative;
		cursor: pointer;
		margin: 5px;
		text-align: center;
	}
	.social__button i {
		display: inline-block;
		position: absolute;
		left: 0;
		top: 0;
		height: 45px;
		line-height: 45px;
		width: 45px;
		font-size: 37.5px;
		color: #000;
		z-index: 2;
		transition: 0.3s;
	}
	.social__button:after {
		content: '';
		display: block;
		position: absolute;
		background: #000;
		border-radius: 100%;
		width: 0;
		height: 0;
		transition: 0.3s;
		top: 0;
		left: 50%;
	}
	.social__button:hover i {
		color: #fff;
	}
	.social__button:hover:after {
		width: 45px;
		height: 45px;
		margin-left: -22px;
	}

	.mail i {
		color: #0072C6;
	}
	.mail:after {
		background: #0072C6;
	}

	.facebook i {
		color: #3b5999;
	}
	.facebook:after {
		background: #3b5999;
	}

	.linkedin i {
		color: #0077b5;
	}
	.linkedin:after {
		background: #0077b5;
	}

	.instagram i {
		color: #6e5494;
	}
	.instagram:after {
		background: #6e5494;
	}

	.codepen i {
		color: #212121;
	}
	.codepen:after {
		background: #212121;
	}
</style>




<!-- Footer de la web --> 

<footer class="footer text-faded text-center py-5">
    <div class="container">
		<div class="zerogrid wrapper">
			Copyright @ QARMITA - Diseñado por <a>Daniel &amp; Julio </a>
			<ul class="quick-link">
                <a href="#">Política de privacidad</a>
                <br>
				<a href="#">Términos de uso</a>
			</ul>
		</div>

		<div class="social">
			<a href="#" class="social__button mail"><i class="fa fa-envelope-o"></i></a>
			<a href="#" class="social__button facebook"><i class="fa fa-facebook"></i></a>
			<a href="#" class="social__button linkedin"><i class="fa fa-linkedin"></i></a>
			<a href="#" class="social__button instagram"><i class="fa fa-instagram"></i></a>
		</div>
	</div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>

