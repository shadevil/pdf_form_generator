<?php
require('data.php');

function formAssembler(array $inputList)
{
    if(!empty($inputList)) {
        $robolink = getRoboLink();
        $result = '';
        foreach ($inputList as $value) {
            if(array_key_exists($value, fields)) {
                $result .= '<tr><td><p>' . fields[$value] . ':</p></td><td>
                <input class="input" name="' . $value . '" type="text">
                </td>
                </tr>';
            }
        }
        echo $result;
    }
    else{
        return false;
    }
    return false;
}

function getClientTypes()
{
    foreach (client_types as $key => $value) {
        echo '<option value=' . $key . '>' . $value . '</option>';
    }
}

function getFields($type)
{
    if (isset($type)) {
        if ($type == 1) {
            formAssembler(['email', 'orgname','legaladdress','mailaddress','phone','inn','kpp']);
        }
        if ($type == 2) {
            formAssembler(['email', 'fioip','legaladdress','mailaddress','phone','inn','kpp']);
        }
        if ($type == 3) {
            formAssembler(['email', 'fio','mailaddress','phone','inn']);
        }
        else {
            return false;
        }
    }
    else{
        return false;
    }
    return false;
}

if ($_POST['type']) {
    getFields($_POST['type']);
}