<?php function class_headerSteps($step){ ?>
<?php 
switch ($step) {
    case 1:
        $step_1 = "active";
        $step_progress = '20';
        break;
    case 2:
        $step_1 = "active";
        $step_2 = "active";
        $step_progress = '40';
        break;
    case 3:
        $step_1 = "active";
        $step_2 = "active";
        $step_3 = "active";
        $step_progress = '60';
        break;
    case 4:
        $step_1 = "active";
        $step_2 = "active";
        $step_3 = "active";
        $step_4 = "active";
        $step_progress = '80';
        break;
    case 5:
        $step_1 = "active";
        $step_2 = "active";
        $step_3 = "active";
        $step_4 = "active";
        $step_5 = "active";
        $step_progress = '100';
        break;
}
?>
<div class="f1-steps ">
    <div class="f1-progress">
        <div class="f1-progress-line" data-now-value="<?php echo $step_progress; ?>" data-number-of-steps="5" style="width: <?php echo $step_progress; ?>%;"></div>
    </div>
    <div class="f1-step <?php echo $step_1;?>">
        <div class="f1-step-icon"><i class="fa fa-key"></i></div>
        <p>welcome</p>
    </div>
    <div class="f1-step <?php echo $step_2;?>">
        <div class="f1-step-icon"><i class="fa fa-send"></i></div>
        <p>booking</p>
    </div>
    <div class="f1-step <?php echo $step_3;?>">
        <div class="f1-step-icon"><i class="fa fa-legal"></i></div>
        <p>packages</p>
    </div>
    <div class="f1-step <?php echo $step_4;?>">
        <div class="f1-step-icon"><i class="fa fa-user"></i></div>
        <p>register</p>
    </div>
    <div class="f1-step <?php echo $step_5;?>">
        <div class="f1-step-icon"><i class="fa fa-twitter"></i></div>
        <p>thanks</p>
    </div>
</div>
<?php } ?>