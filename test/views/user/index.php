<?php
    use yii\helpers\Html;
    use yii\helpers\Url;
    use yii\grid\GridView;    
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <?= Yii::t('UserModule.profile', '<strong>Scientific Producction</strong> By User') ?>
    </div>

<?php   
   echo GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' =>[
         [            
             // you may configure additional properties here
             'attribute' => 'P_id',
             'label' =>'ID',
             'headerOptions'=>[ 'style'=>'background-color:#BC955C; width:5%; text-align: center;' ]
         ],
         [            
            // you may configure additional properties here
            'attribute' => 'Autor',
            'headerOptions'=>[ 'style'=>'background-color:#BC955C; text-align: center;' ]
        ],
        [            
         // you may configure additional properties here
         'attribute' => 'Anio',
         'label' =>'Año',
         'headerOptions'=>[ 'style'=>'background-color:#BC955C; width:6%; text-align: center;' ]
         ],
         [            
            // you may configure additional properties here
            'attribute' => 'Titulo',
            'headerOptions'=>[ 'style'=>'background-color:#BC955C; text-align: center;' ]
        ],
        [            
         // you may configure additional properties here
         'attribute' => 'Resumen',
         'headerOptions'=>[ 'style'=>'background-color:#BC955C; text-align: center;' ]
         ],
         [            
            // you may configure additional properties here
            'attribute' => 'Tipo',
            'headerOptions'=>[ 'style'=>'background-color:#BC955C; width:8%; text-align: center;' ]
            ]
      ],
     ]);

?>
</div>