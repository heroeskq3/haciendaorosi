<?php function class_surveyButtons($formButtons)
{
    $results = null;
    foreach ($formButtons as $key => $value) {
        $results .= class_formButtons($value['buttonType'], $value['class'], $value['name'], $value['value'], $value['action'], $key);
    }
    return $results;
}
