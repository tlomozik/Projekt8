<!doctype html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<meta name="description" content="{$page_description|default:'Opis domyślny'}">
	<title>{$page_title|default:"Tytuł domyślny"}</title>
	<link rel="stylesheet" href="{$conf->app_url}/css/assets/css/main.css" />
	<noscript> <link rel="stylesheet" href="{$conf->app_url}/css/assets/css/noscript.css" /> </noscript>
</head>
<body class="is-preload">


<header id="header">
	<h1 id="logo">{$page_title|default:"Tytuł domyślny"}</h1>
	
</header>

<div id="main" class="wrapper style1">
	<div class="container">
		<header class="major">
			<h2>Kalkulator</h2>
			
		</header>

<div class="content">
{block name=content} Domyślna treść zawartości .... {/block}
</div><!-- content -->

<div class="footer">
	<p>
{block name=footer} Domyślna treść stopki .... {/block}
	</p>
	
</div>

</body>
</html>