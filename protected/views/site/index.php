<?php $this->pageTitle = Yii::app()->name ?>

<h1>Welcome to <?= CHtml::encode(Yii::app()->name) ?></h1>

<?php if (!Yii::app()->user->isGuest) { ?>
<?= CHtml::link('Create a lesson', array('doc/create')) ?><br/>
<?php } else { ?>
<p><?= CHtml::link('Register Now', array('user/create')) ?></p>
<?php } ?>
