
<div class="form">
<?php echo CHtml::beginForm(); ?>
 
    <?php echo CHtml::errorSummary($model); ?>
 
    <div class="row">
        <?php echo CHtml::activeLabel($model,'username'); ?>
        <?php echo CHtml::activeTextField($model,'username') ?>
    </div>
 
    <div class="row">
        <?php echo CHtml::activeLabel($model,'password'); ?>
        <?php echo CHtml::activePasswordField($model,'password') ?>
    </div>
 
     <div class="row">
        <?php echo CHtml::activeLabel($model,'email'); ?>
        <?php echo CHtml::activePasswordField($model,'email') ?>
    </div>
     <div class="row">
        <?php echo CHtml::activeLabel($model,'photo'); ?>
        <?php echo CHtml::activePasswordField($model,'photo') ?>
    </div>
    
     <div class="row">
        <?php echo CHtml::activeLabel($model,'status'); ?>
        <?php echo CHtml::activePasswordField($model,'status') ?>
    </div>
 
    <div class="row submit">
        <?php echo CHtml::submitButton('Login'); ?>
    </div>
 
<?php echo CHtml::endForm(); ?>
</div><!-- form -->