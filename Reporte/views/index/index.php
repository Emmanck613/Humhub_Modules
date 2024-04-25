<?php

use humhub\widgets\Button;

// Register our module assets, this could also be done within the controller
\ricit\humhub\modules\Reporte\assets\Assets::register($this);

$displayName = (Yii::$app->user->isGuest) ? Yii::t('ReporteModule.base', 'Guest') : Yii::$app->user->getIdentity()->displayName;

// Add some configuration to our js module
$this->registerJsConfig("Reporte", [
    'username' => (Yii::$app->user->isGuest) ? $displayName : Yii::$app->user->getIdentity()->username,
    'text' => [
        'hello' => Yii::t('ReporteModule.base', 'Hi there {name}!', ["name" => $displayName])
    ]
])

?>

<div class="panel-heading"><strong>Reporte</strong> <?= Yii::t('ReporteModule.base', 'overview') ?></div>

<div class="panel-body">
    <p><?= Yii::t('ReporteModule.base', 'Hello World!') ?></p>

    <?=  Button::primary(Yii::t('ReporteModule.base', 'Say Hello!'))->action("Reporte.hello")->loader(false); ?></div>
