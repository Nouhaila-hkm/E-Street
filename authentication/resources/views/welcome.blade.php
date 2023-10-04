@extends('layout')

@section('content')
<section class="banner bg-1" id="home">
	<div class="container">
		<div class="row">
			<div class="col-md-8 align-self-center">
				<!-- Contents -->
				<div class="content-block">
					<h1>La première app des promotions au maroc</h1>
					<h5>découvrire tous les soldes à proximité pour un shopping au meilleur prix</h5>
					<!-- App Badge -->
					<div class="app-badge">
						<ul class="list-inline">
							<li class="list-inline-item">
								<a href="#" class="btn btn-download"><i class="ti-android"></i>
									<div>obtenez le sur<span>GOOGLE PLAY</span></div>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#" class="btn btn-download"><i class="ti-apple"></i>
									<div>Disponible sur<span>Apple store</span></div>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<!-- App Image -->
				<div class="image-block">
					<img class="img-fluid phone-thumb" src="{{ url('images/phones/iphone-banner.png')}}" alt="iphone-banner">
				</div>
			</div>
		</div>
	</div>
</section>

<!--====  End of Homepage Banner  ====-->

<!--===========================
=            About            =
============================-->

<section class="about section bg-2" id="about">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 align-self-center text-center">
				<!-- Image Content -->
				<div class="image-block">
					<img class="phone-thumb-md" src="{{ url('images/phones/unnamed.webp')}}" alt="iphone-feature" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-6 col-md-10 m-md-auto align-self-center ml-auto">
				<div class="about-block">
					<!-- About 01 -->
					<div class="about-item">
						<div class="icon">
							<i class="ti-palette"></i>
						</div>
						<div class="content">
							<h5>Description</h5>
							<p>Lorsqu’on fait du shopping, il est difficile de se rendre compte rapidement si les produits achetés sont au meilleur prix parmi les magasins proches. Sur ce constat, E-Street propose une nouvelle application mobile qui vise à identifier les commerces proches proposant des promotions.</p>
						</div>
					</div>
					<!-- About 02 -->
					<div class="about-item active">
						<div class="icon">
							<i class="ti-panel"></i>
						</div>
						<div class="content">
							<h5>Simple a utilisée</h5>
							<p> le mode d'emploi de E-Street est très simple, il suffit d'être connecté a un réseau internet puis vous receverez tous les notifications des promotions à proximité   </p>
						</div>
					</div>
					<!-- About 03 -->
					<div class="about-item">
						<div class="icon">
							<i class="ti-vector"></i>
						</div>
						<div class="content">
							<h5>Meilleur experience</h5>
							<p>L’application E-Street permet à chaque utilisateur d’être localisé pour repérer rapidement les produits en promo autour de lui. Il est même possible de trouver le meilleur tarif pour un produit spécifique, et visualiser la liste des promos en cours dans un magasin où l’utilisateur se trouve.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--====  End of About  ====-->

<!--==============================
=            Features            =
===============================-->

<section class="section feature" id="feature">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h2>Pourquoi E-Street?</h2>
					<p>Explorez ci-dessous afin de découvrir pourquoi E-Street est une application simple et très utile</p>
				</div>
			</div>
		</div>
		<div class="row bg-elipse">
			<div class="col-lg-4 align-self-center text-center text-lg-right">
				<!-- Feature Item -->
				<div class="feature-item">
					<!-- Icon -->
					<div class="icon">
						<i class="ti-gift"></i>
					</div>
					<!-- Content -->
					<div class="content">
						<h5>Trouver le meilleur prix à proximité</h5>
						<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising</p>
					</div>
				</div>
				<!-- Feature Item -->
				<div class="feature-item">
					<!-- Icon -->
					<div class="icon">
						<i class="ti-announcement"></i>
					</div>
					<!-- Content -->
					<div class="content">
						<h5>Consulter les promos dans un magasin</h5>
						<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 text-center">
				<!-- Feature Item -->
				<div class="feature-item mb-0">
					<!-- Icon -->
					<div class="icon">
						<i class="ti-book"></i>
					</div>
					<!-- Content -->
					<div class="content">
						<h5>Consulter les catalogues des magasins</h5>
						<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising</p>
					</div>
				</div>
				<div class="app-screen">
					<img class="img-fluid" src="{{ url('images/phones/Capture d’écran 2022-05-10 134508.png')}}" alt="app-screen">
				</div>
				<!-- Feature Item -->
				<div class="feature-item">
					<!-- Icon -->
					<div class="icon">
						<i class="ti-support"></i>
					</div>
					<!-- Content -->
					<div class="content">
						<h5>Etre alerté dès qu'un magasin favoris propose des promos</h5>
						<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 text-center text-lg-left align-self-center">
				<!-- Feature Item -->
				<div class="feature-item">
					<!-- Icon -->
					<div class="icon">
						<i class="ti-location-pin"></i>
					</div>
					<!-- Content -->
					<div class="content">
						<h5>Découvrir les promos autour de soi</h5>
						<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising</p>
					</div>
				</div>
				<!-- Feature Item -->
				<div class="feature-item">
					<!-- Icon -->
					<div class="icon">
						<i class="ti-pie-chart"></i>
					</div>
					<!-- Content -->
					<div class="content">
						<h5>IOS & android version </h5>
						<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--====  End of Features  ====-->

<!--=============================================
=            Call to Action Download            =
==============================================-->

<section class="cta-download bg-3 overlay">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 text-center">
				<div class="image-block"><img class="phone-thumb img-fluid" src="{{ url('images/phones/iphone-chat.png')}}" alt=""></div>
			</div>
			<div class="col-lg-7">
				<div class="content-block">
					<!-- Title -->
					<h2>Télécharger gratuitement maintenant</h2>
					<!-- Desctcription -->
					<p>Obtenir votre application E-Street maintenant et gratuitement.<br> L'application est disponible sur App Store et Google Play</p>
					<!-- App Badge -->
					<div class="app-badge">
						<ul class="list-inline">
							<li class="list-inline-item">
								<a href="#" class="btn btn-download"><i class="ti-android"></i>
									<div>obtenez le sur<span>GOOGLE PLAY</span></div>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#" class="btn btn-download"><i class="ti-apple"></i>
									<div>Disponible sur<span>Apple store</span></div>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--====  End of Call to Action Download  ====-->

	<!--===================================
=            Pricing Table            =
====================================-->
<section class="pricing section bg-shape" id="pricing">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title mb-4">
					<h2 class="mb-3">Vous Etes un Magasin ?</h2>
					<p>Si vous êtes un magasin, et vous souhaitez integrer notre teams E-Street , veuillez-vous inscrire dans notre site web</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<!-- Pricing Table -->
<div class="pricing-table text-center">	
	<!-- Title -->
<div class="title">	
		<h5>creer votre magasin</h5>
	</div>
	<!-- Features -->
	<ul class="feature-list">
		<li>creer votre propre magasin qui sera visible dans l'application E-Street</li>
		<li>chez E-Street, vous etes libre de gerer votre magasin comme vous voulez</li>
		<li>vous pouvez gerer vos produits librement comme vous voulez</li>
		<li>creer votre catalogue comme vous voulez vous pouvez être creatif</li>
	</ul>
	
</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<!-- Pricing Table -->
<div class="pricing-table featured text-center">	
	<!-- Title -->
<div class="title">	
		<h5>gerer votre promotion</h5>
	</div>
	
	<!-- Features -->
	<ul class="feature-list">
		<li>vous pouvez appliquer des promotions sur votre produits n'importe quel moment</li>
		<li>la promotion est visible par les clients de E-Street</li>
		<li>vous pouvez modeliser les notifications envoyées aux clients</li>
		<li>vous pouvez supprimer les promotions sans problème</li>
	</ul>
	
</div>
			</div>
			<div class="col-lg-4 col-md-6 m-md-auto">
				<!-- Pricing Table -->
<div class="pricing-table text-center">	
	<!-- Title -->
	<div class="title">	
		<h5>gagner des nouveaux clients</h5>
	</div>
	
	<!-- Features -->
<ul class="feature-list">
		<li>vos promotions serons visible par tous les clients de E-Street autour de votre magasin</li>
		<li>vous aurez un maximum de clients interessés par vos soldes </li>
		<li>tous les clients de E-Street a proximité vienderons a votre magasin</li>
		<li>les clients peuvent voir le chemin au magasin pour venir dirrectement</li>
	</ul>
</div>
			</div>
		</div>
		<div class="section-title mb-4">
			<div class="action-button">
		<a href="{{ route('register')}}" class="btn btn-main-rounded">Inscrivez-vous maintenant</a>
	</div>

</div>
	</div>
</section>
@endsection