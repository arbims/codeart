<?php

if(!function_exists('errors_message')) {
	function errors_message($session, $name) {
        if (errors_message_class($session, $name) != '') {
            return '<div class="error-message" id="slug-error">'. session("errors")[$name] . '</div>';
        }
	}
}

if(!function_exists('errors_message_class')) {
	function errors_message_class($session, $name) {
		return ($session && array_key_exists($name,$session)) ? 'form-error is-invalid': '';
	}
}