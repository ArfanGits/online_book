<?php
?>

<style>
	@import url('https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap');

	body {
		font-family: 'PT Sans', sans-serif;
		margin: 0;
		padding: 0;
	}

	footer {
		position: relative;
		top: 0;
	}

	.footer-distributed {
		background-color: #292c2f;
		box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
		box-sizing: border-box;
		width: 100%;
		text-align: left;
		font: bold 16px sans-serif;
		padding: 55px 50px;
	}

	.footer-distributed .footer-left,
	.footer-distributed .footer-center,
	.footer-distributed .footer-right {
		display: inline-block;
		vertical-align: top;
	}

	.footer-distributed .footer-left {
		width: 40%;
	}

	.footer-distributed h3 {
		color: #ffffff;
		font: normal 36px 'Cookie', cursive;
		margin: 0;
	}

	.footer-distributed h3 span {
		color: #5383d3;
	}


	.footer-distributed .footer-links {
		color: #ffffff;
		margin: 20px 0 12px;
		padding: 0;
	}

	.footer-distributed .footer-links a {
		display: inline-block;
		line-height: 1.8;
		text-decoration: none;
		color: inherit;
	}

	.footer-distributed .footer-company-name {
		color: #8f9296;
		font-size: 14px;
		font-weight: normal;
		margin: 0;
	}


	.footer-distributed .footer-center {
		width: 35%;
	}

	.footer-distributed .footer-center i {
		background-color: #33383b;
		color: #ffffff;
		font-size: 25px;
		width: 38px;
		height: 38px;
		border-radius: 50%;
		text-align: center;
		line-height: 42px;
		margin: 10px 15px;
		vertical-align: middle;
	}

	.footer-distributed .footer-center i.fa-envelope {
		font-size: 17px;
		line-height: 38px;
	}

	.footer-distributed .footer-center p {
		display: inline-block;
		color: #ffffff;
		vertical-align: middle;
		margin: 0;
	}

	.footer-distributed .footer-center p span {
		display: block;
		font-weight: normal;
		font-size: 14px;
		line-height: 2;
	}

	.footer-distributed .footer-center p a {
		color: #5383d3;
		text-decoration: none;
		;
	}

	.footer-distributed .footer-right {
		width: 20%;
	}

	.footer-distributed .footer-company-about {
		line-height: 20px;
		color: #92999f;
		font-size: 13px;
		font-weight: normal;
		margin: 0;
	}

	.footer-distributed .footer-company-about span {
		display: block;
		color: #ffffff;
		font-size: 14px;
		font-weight: bold;
		margin-bottom: 20px;
	}

	.footer-distributed .footer-icons {
		margin-top: 25px;
	}

	.footer-distributed .footer-icons a {
		display: inline-block;
		width: 35px;
		height: 35px;
		cursor: pointer;
		background-color: #33383b;
		border-radius: 2px;

		font-size: 20px;
		color: #ffffff;
		text-align: center;
		line-height: 35px;

		margin-right: 3px;
		margin-bottom: 5px;
	}


	@media (max-width: 880px) {

		.footer-distributed {
			font: bold 14px sans-serif;

		}

		.footer-distributed .footer-left,
		.footer-distributed .footer-center,
		.footer-distributed .footer-right {
			display: block;
			width: 100%;
			margin-bottom: 40px;
			text-align: center;
		}

		.footer-distributed .footer-center i {
			margin-left: 0;
		}

		.main {
			line-height: normal;
			font-size: auto;
		}

	}
</style>

<footer class="footer-distributed">

	<div class="footer-left">

		<h3>Online <span>Book Store</span></h3>

		<p class="footer-links">
			<a href="#">Home</a>
			·
			<a href="#">Books</a>
			·
			<a href="#">Pricing</a>
			·
			<a href="#">About</a>
			·
			<a href="#">Faq</a>
			·
			<a href="#">Contact</a>
		</p>

		<p class="footer-company-name">onlinebookstore &copy; 2022</p>
	</div>

	<div class="footer-center">

		<div>
			<i class="fa fa-map-marker"></i>
			<p><span>South Kulshi</span> Chittagong, Bangladesh</p>
		</div>

		<div>
			<i class="fa fa-phone"></i>
			<p>+8801-951518412</p>
		</div>

		<div>
			<i class="fas fa-envelope-open"></i>
			<p><a href="">contact@onlinebookstore.com</a></p>
		</div>

	</div>

	<div class="footer-right">

		<p class="footer-company-about">
			<span>About the Store</span>
			Online Book Store is a site for readers, learners and researchers.
		</p>

		<div class="footer-icons">

			<a href="#"><i class="fab fa-facebook-square"></i></a>
			<a href="#"><i class="fas fa-twitter"></i></a>
			<a href="#"><i class="fas fa-linkedin"></i></a>
			<a href="#"><i class="fas fa-github"></i></a>

		</div>

	</div>

</footer>