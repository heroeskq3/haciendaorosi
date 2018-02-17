<?php
/*
// define buttons for form
$formButtons = array(
    'Submit' => array('buttonType' => 'submit', 'class' => null, 'name' => null, 'value' => null, 'action' => null),
    'Cancel' => array('buttonType' => 'submit', 'class' => null, 'name' => null, 'value' => null, 'action' => null),
);
*/
function class_formButtons($type, $class, $name, $value, $action, $label)
{

    if($class){
        $class = $class;
    }else{
        $class = 'btn btn-primary';
    }

if($type == 'submit'){
    $results = '<button type="submit" class="'.$class.'">'.$label.'</button>';
}
?>

    <?php if($type == 'cancel'){ ?>
    <?php $action = isset($HTTP_REFERER); ?>
    <button <?php echo $class; ?>onclick="window.location.href='<?php echo $action; ?>'"><?php echo $label; ?></button>
    <?php } ?>

    <?php if ($type == 'link') { ?>
    <button <?php echo $class; ?>onclick="window.location.href='<?php echo $action; ?>'"><?php echo $label; ?></button>
    <?php } ?>
<?php return $results; ?>
<?php } ?>