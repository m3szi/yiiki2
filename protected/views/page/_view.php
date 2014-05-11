<?php
/* @var $this PageController */
/* @var $data Page */
?>

    <div class="view">
        <?php echo CHtml::link( CHtml::encode($data->title), $this->createUrl('page/view', array( 'title' => $data->title ) ) ); ?>
        (Rev.: <?php echo CHtml::encode($data->revision); ?>)
        <i><?php echo date( 'Y-m-d H:i', strtotime(CHtml::encode($data->created)) ); ?></i>
    </div>