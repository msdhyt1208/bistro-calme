<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>サンプルサイト</title>
	<link href="./assets/css/styles.min.css" rel="stylesheet">
	<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="./assets/js/main.js"></script>
</head>

<body>
	<header class="header">
		<div class="header_inner">
			<div class="header_logo">
				<h1><a href="/"><img src="./assets/img/common/logo@2x.png" alt="BISTRO CALME"></a></h1>
			</div>

			<div class="header_desc">
				<p>サイトのキャッチフレーズ</p>
			</div>

			<form class="header_search">
				<input type="text" placeholder="キーワードを入力">
				<i class="fas fa-search"></i>
			</form>
		</div>

		<div class="header_links">
			<nav class="gnav">
				<ul class="">
					<li><a href="#">HOME</a></li>
					<li><a href="#">わたしたちについて</a></li>
					<li><a href="#">アクセス</a></li>
					<li><a href="#">最新情報</a></li>
					<li><a href="#">お問い合わせ</a></li>
				</ul>
			</nav>

			<ul class="header_sns">
				<li><a href="#"><i class="fab fa-twitter"></i></a></li>
				<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
			</ul>
		</div>

		<svg class="header_menu" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
			width="30" height="30" viewBox="0 0 30 30">
			<defs>
				<clipPath id="clip-path">
					<rect width="30" height="30" fill="none" />
				</clipPath>
			</defs>
			<g clip-path="url(#clip-path)">
				<rect class="header_border header_border-1" width="30" height="2" transform="translate(0 0)" />
				<rect class="header_border header_border-2" width="30" height="2" transform="translate(0 10)" />
				<rect class="header_border header_border-3" width="30" height="2" transform="translate(0 20)" />
			</g>
		</svg>
	</header>

	<h2 class="pageTitle">アクセス<span>ACCESS</span></h2>

	<main class="main">
		<div class="container">
			<div class="content">
				<iframe
					src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3240.332798729691!2d139.7333802!3d35.6934272!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188c5e412329bb%3A0x7db38e6732953dc!2z44CSMTYyLTA4NDYg5p2x5Lqs6YO95paw5a6_5Yy65biC6LC35bem5YaF55S677yS77yR4oiS77yR77yT!5e0!3m2!1sja!2sjp!4v1566456578905!5m2!1sja!2sjp"
					width="600" height="450" frameborder="0" style="border:0" allowfullscreen=""
					class="googlemap"></iframe>
				<table class="wp-block-table is-style-stripes">
					<tbody>
						<tr>
							<td>所在地 </td>
							<td>東京都新宿区市谷左内町21-13</td>
						</tr>
						<tr>
							<td>電話番号</td>
							<td>03-1234-5678</td>
						</tr>
						<tr>
							<td>営業時間</td>
							<td>17:00～翌2:00(L.O.翌1:00)</td>
						</tr>
						<tr>
							<td>定休日</td>
							<td>日曜日<br>営業時間・定休日は変更となる場合がございますので、ご来店前に店舗にご確認ください。</td>
						</tr>
					</tbody>
				</table>

			</div>
		</div>
	</main>

	<div class="pagetop js-pagetop"><i class="fas fa-angle-up"></i>PAGE TOP</div>

	<footer class="footer">
		<div class="container">
			<div class="footer_inner">
				<nav>
					<ul>
						<li><a href="#">HOME</a></li>
						<li><a href="#">わたしたちについて</a></li>
						<li><a href="#">アクセス</a></li>
						<li><a href="#">最新情報</a></li>
						<li><a href="#">お問い合わせ</a></li>
					</ul>
				</nav>
				<div class="footer_copyright">
					<small>&copy; BISTRO CALME All rights reserved.</small>
				</div>
			</div>
		</div>
	</footer>

</body>

</html>