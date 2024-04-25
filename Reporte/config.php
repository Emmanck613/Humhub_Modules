<?php

use ricit\humhub\modules\Reporte\Events;
use humhub\modules\admin\widgets\AdminMenu;

return [
	'id' => 'Reporte',
	'class' => 'ricit\humhub\modules\Reporte\Module',
	'namespace' => 'ricit\humhub\modules\Reporte',
	'events' => [
		[
			'class' => AdminMenu::class,
			'event' => AdminMenu::EVENT_INIT,
			'callback' => [Events::class, 'onAdminMenuInit']
		],
	],
];
