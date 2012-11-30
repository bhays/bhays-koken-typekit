<?php

class KokenTypekit extends KokenPlugin {

	function __construct()
	{
		$this->require_setup = true;
		$this->register_hook('before_closing_head', 'render');
	}

	function render()
	{
		echo <<<OUT
<script type="text/javascript" src="//use.typekit.net/{$this->data->typekit_id}.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<script type="text/javascript">
OUT;

	}
}