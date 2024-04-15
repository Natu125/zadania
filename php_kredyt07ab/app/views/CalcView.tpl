{extends file="main.tpl"}

{block name=content}

<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="{$conf->action_url}logout"  class="pure-menu-heading pure-menu-link">wyloguj</a>
	<span style="float:right;">użytkownik: {$user->login}, rola: {$user->role}</span>
</div>

<form action="{$conf->action_url}calcCompute" method="post" class="pure-form pure-form-aligned bottom-margin">
	<legend>Kalkulator</legend>
	<fieldset>

			<label for="id_kwota">Kwota kredytu: </label>
			<input id="id_kwota" type="number" name="kwota"  value="{$form->kwota}" /><br />
			<label for="id_lat">Na ile lat: </label>
			<input id="id_lat" type="number" name="lat"  value="{$form->lat}" /><br />
			<label for="id_opr">Oprocentowanie: </label>
			<input id="id_opr" type="number" name="opr"  value="{$form->opr}" /><br />





			
			

			<button type="submit" class="pure-button">Oblicz</button>
		</fieldset>
</form>	

{include file='messages.tpl'}

{if isset($res->result)}
<div class="messages info">
	Wynik: {$res->result}
</div>
{/if}

{/block}