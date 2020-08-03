<?php
/**
 * @var \app\models\Post $post
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
$form = ActiveForm::begin();
?>

<?=$form->field($post, 'title')->textInput()->hint('Пожалуйста, введите ваше имя')?>
<?=$form->field($post, 'shortDescription')->textInput()->hint('Пожалуйста, введите краткое описание')?>
<?=$form->field($post, 'description')->textInput()->hint('Пожалуйста, введите полное описание')?>

<div class="form-group">
    <?= Html::submitButton('Update', ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>
