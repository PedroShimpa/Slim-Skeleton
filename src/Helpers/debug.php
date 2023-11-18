<?php

function dd()
{
	foreach (func_get_args() as $arg) {
		print_r($arg);
	}
	die;
}
