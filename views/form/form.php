<?php
use yii\widgets\ActiveForm;
use yii\widgets\ActiveField;
use yii\helpers\Html;

//debug($model);

if (Yii::$app->session->hasFlash('success')) {
    echo Yii::$app->session->getFlash('success');
}
if (Yii::$app->session->hasFlash('error')) {
    echo Yii::$app->session->getFlash('error');
}
?>

<?php $form = ActiveForm::begin() ?>
<?= $form->field($model, 'name')->label('Имя') ?>
<!-- //$form->field($model, 'password')->label('Тестовое поле типа здесь пароль')->passwordInput()  -->
<!-- //$form->field($model, 'password')->label('Тестовое поле типа здесь пароль')->input('password')  -->
<?= $form->field($model, 'email')->input('email') ?>
<!-- Добавлен виджет позволяющий выбирать дату используя JUI -->
<?= yii\jui\DatePicker::widget(['name' => 'attributeName']) ?>
<?= $form->field($model, 'content')->label('Текст сообщения')->textarea(['rows' => 5]) ?>
<?= $form->field($model, 'gender')->radioList(['male' => 'male', 'female' => 'female']) ?>
<?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
<?php ActiveForm::end() ?>