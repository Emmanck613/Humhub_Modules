<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Articulos $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="articulos-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="container-fluid">
        <?= $form->field($model, 'User_id')->textInput(['value' => $hum_uid,'readonly' => true]) ?>
        <div class="row">

        <span class="col-md-6 col-sm-6">
            <?= $form->field($model, 'Autor')->textInput(['onchange' => 'this.value = this.value.toUpperCase();'],['maxlength' => true, 'placeholder'=>'Person Name']) ?>

            <?= $form->field($model, 'Autores')->textInput(['onchange' => 'this.value = this.value.toUpperCase();'],['maxlength' => true, 'placeholder'=>'John Doe, Jane Doe']) ?>

            <?= $form->field($model, 'Anio')->textInput(['placeholder'=>2020]) ?>

            <?= $form->field($model, 'Titulo')->textInput(['onchange' => 'this.value = this.value.toUpperCase();'],['maxlength' => true, 'placeholder'=>'Sample Book']) ?>

            <?= $form->field($model, 'Resumen')->textarea(['onchange' => 'this.value = this.value.toUpperCase();'],['maxlength' => true, 'placeholder'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a felis et ligula fermentum ultrices sit amet non sapien. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;']) ?>

            <?= $form->field($model, 'Revista')->textInput(['onchange' => 'this.value = this.value.toUpperCase();'],['maxlength' => true, 'placeholder'=>'Sample Magazine']) ?>
        </span>

        <span class="col-md-6 col-sm-6">
            <?= $form->field($model, 'Pais')->textInput(['onchange' => 'this.value = this.value.toUpperCase();'],['maxlength' => true, 'placeholder'=>'Mexico']) ?>

            <?= $form->field($model, 'Idioma')->textInput(['onchange' => 'this.value = this.value.toUpperCase();'],['maxlength' => true, 'placeholder'=>'Español']) ?>

            <?= $form->field($model, 'ISSNs')->textInput(['maxlength' => true, 'placeholder'=>'0-7645-2641-3']) ?>

            <?= $form->field($model, 'URL')->textInput(['maxlength' => true, 'placeholder'=>'http://sampleurl.com/article']) ?>

            <?= $form->field($model, 'DOI')->textInput(['maxlength' => true, 'placeholder'=>'54321']) ?>

            <?= $form->field($model, 'Palabras_clave')->textInput(['onchange' => 'this.value = this.value.toUpperCase();'],['maxlength' => true, 'placeholder'=>'Articulo, Economia, Ambiente']) ?>
        </span>
     </div>
    </div>

    <div class="form-group" style="margin-left: 10px; padding-bottom:10px;">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
