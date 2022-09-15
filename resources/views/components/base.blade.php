<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Thomas Bourgeois | Étudiant en développement web</title>
	<meta name="Description" content="Portfolio de Thomas Bourgeois, étudiant en développement web à Limoges.">
	<meta name="Keywords" content="thomas, thomas bourgeois, mmi, thomas bourgeois mmi, dut, dut mmi, bourois, bouufois, tomas, thomas, thoma, limoges, haute-vienne, étudiant, portfolio, design, web, développement, dev, design, ux, ui, com, communication, licence profesionnelle développeur d'applications web et big data, lpdwbd, lp">
	<meta name="Author" content="Thomas Bourgeois">
	<meta name="Publisher" content="Thomas Bourgeois">
	<meta name="Robots" content="all">
	@vite(['resources/scss/app.scss'])
	<link rel="icon" type="image/png" href="{{ Vite::asset('resources/images/briefcase.png') }}">
	<script>
		var _paq = window._paq = window._paq || [];
		_paq.push(['trackPageView']);
		_paq.push(['enableLinkTracking']);
		(function() {
			var u="https://analytics.thomasbourgeois.fr/";
			_paq.push(['setTrackerUrl', u+'matomo.php']);
			_paq.push(['setSiteId', '1']);
			var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
			g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
		})();
	</script>
</head>

<body>

    <main>
        {{ $content }}
    </main>

    <x-footer />

    {{ $javascript }}
</body>

</html>
