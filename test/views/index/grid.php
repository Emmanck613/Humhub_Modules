

<?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                'Cap_id',
                'User_id',
                'Anio',
                'Titulo_capitulo',
                'Paginas',
                //'Autor_libro',
                //'Autores_capitulo',
                //'Titulo_libro',
                //'Resumen',
                //'Editores',
                //'ISBN',
                //'URL:url',
            ],
        ]); ?>