{extends file="main.tpl"}

{block name=footer}
<footer id="footer">

	<ul class="copyright">
		<li>&copy; Untitled. All rights reserved.</li>
		<li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
	</ul>

	
</footer>


{/block}

{block name=content}

<div>
	<a href="{$conf->action_url}logout" >wyloguj</a>
	
	
</div>


		<section>
			<h3>Kalkulator kredytowy</h3>
			<form action="{$conf->action_root}calcCredit" method="post">
				<div class="row gtr-uniform gtr-50">
					<div class="col-3 col-12-xsmall">
						<input type="text" placeholder="Kwota" name="amount" value="{$data->amount}">
					</div>
					<div class="col-3 col-12-xsmall">
						<input type="text" placeholder="Lata" name="years" value="{$data->years}">
					</div>
					<div class="col-3 col-12-xsmall">
						<input type="text" placeholder="Oprocentowanie" name="percentage" value="{$data->percentage}">
					</div>
					
				   <div class="col-12">
						<ul class="actions">
							<li><input type="submit" value="Oblicz" class="primary" /></li>
					
						</ul>
					</div>
				</div>
			</form>
		

<div class="messages">

	{* wyświeltenie listy błędów, jeśli istnieją *}
	{if $msgs->isError()}
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
		{foreach $msgs->getErrors() as $err}
		{strip}
		<li>{$err}</li>
		{/strip}
		{/foreach}
	</ol>
	{/if}

	{* wyświeltenie listy informacji, jeśli istnieją *}
	{if $msgs->isInfo()}
	<h4>Informacje: </h4>
	<ol class="inf">
		{foreach $msgs->getInfos() as $inf}
		{strip}
		<li>{$inf}</li>
		{/strip}
		{/foreach}
	</ol>
	{/if}

	{if isset($result->result)}
	<h4>Wynik</h4>
	<p class="res">
		{$result->result}
	</p>
	{/if}

</div>

{/block}