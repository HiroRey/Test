<?php
/**
 * @var \app\models\Order $order
 */

use yii\widgets\ActiveForm;

$form = ActiveForm::begin();
?>

<?=$form->field($order, 'address')->textInput()->hint('Пожалуйста, введите ваш адресс')?>
<?=$form->field($order, 'comment')->textInput()->hint('Пожалуйста, введите ваш отзыв')?>

<a href="/order/create-order" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Create Order</a>

<?php ActiveForm::end(); ?>
