<?php

namespace  ricit\humhub\modules\Reporte;

use Yii;
use yii\helpers\Url;

class Events
{
    /**
     * Defines what to do if admin menu is initialized.
     *
     * @param $event
     */
    public static function onAdminMenuInit($event)
    {
        $event->sender->addItem([
            'label' => 'Reporte',
            'url' => Url::to(['/Reporte/admin']),
            'group' => 'manage',
            'icon' => '<i class="fa fa-file-archive-o"></i>',
            'isActive' => (Yii::$app->controller->module && Yii::$app->controller->module->id == 'Reporte' && Yii::$app->controller->id == 'admin'),
            'sortOrder' => 99999,
        ]);
    }
}
