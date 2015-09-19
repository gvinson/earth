<?php

return array(
	'driver' => 'smtp',
	 
	'host' => 'smtp.gmail.com',

	'port' => 587,

	'from' => array('address' => 'hello@theearthcafe.com', 'name' => 'The Earth Cafe'),

	'encryption' => 'tls',

	'username' => 'gvinsontest',

	'password' => 'sedona89',

	'sendmail' => '/usr/sbin/sendmail -bs',

	'pretend' => false,
);
