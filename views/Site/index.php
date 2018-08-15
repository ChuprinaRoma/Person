<?php
    use yii\helpers\Html;
?>
<div class="">
    <table border="1" width="100%" cellpadding="5">
        <tr>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Номер телефона</th>
         </tr>
        <?php foreach ($persons as $person): ?>
        <tr>
            <td><?= Html::encode("{$person->fName}") ?></td>
            <td><?= Html::encode("{$person->lName}") ?></td>
            <td><?= Html::encode("{$person->number}") ?></td>
         </tr>
            
        <?php endforeach; ?>
    </table>
</div>
