<?php function class_headerSteps($step){ ?>
<?php 
switch ($step) {
    case 1:
        $step_1 = "active";
        $step_progress = '33';
        break;
    case 2:
        $step_1 = "active";
        $step_2 = "active";
        $step_progress = '66';
        break;
    case 3:
        $step_1 = "active";
        $step_2 = "active";
        $step_3 = "active";
        $step_progress = '100';
        break;
}
?>
<div class="f1-steps ">
    <div class="f1-progress">
        <div class="f1-progress-line" data-now-value="<?php echo $step_progress; ?>" data-number-of-steps="3" style="width: <?php echo $step_progress; ?>%;"></div>
    </div>
    <div class="f1-step <?php echo $step_1;?>">
        <div class="f1-step-icon"><i class="fa fa-key"></i></div>
        <p>Availability</p>
    </div>
    <div class="f1-step <?php echo $step_2;?>">
        <div class="f1-step-icon"><i class="fa fa-user"></i></div>
        <p>Guest information</p>
    </div>
    <div class="f1-step <?php echo $step_3;?>">
        <div class="f1-step-icon"><i class="fa fa-twitter"></i></div>
        <p>Confirmation</p>
    </div>
</div>
<?php } ?>