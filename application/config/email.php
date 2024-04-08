<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$config = array(
    // 'protocol' => 'smtp',
    // 'smtp_host' => 'smtp.gmail.com',
    // 'smtp_port' => 587,
    // 'smtp_user' => 'abhimanyu.geektech@gmail.com',
    // 'smtp_pass' => 'kfiwajyrfqbesmws',
	// 'smtp_crypto' => 'tls',
    // 'charset'   => 'iso-8859-1'
	'protocol' => 'smtp',
	'smtp_host' => 'ssl://smtp.googlemail.com',
	'smtp_port' => 465,
	'smtp_user' => 'abhimanyu.geektech@gmail.com',
	'smtp_pass' => 'mtkloecutdwlkzgz',
	'mailtype'  => 'html', 
	'charset'   => 'iso-8859-1',
	'newline'   => '\r\n'
);
