<?php
$testData = [
    "email" => "linkinfan@bk.ru",
    "orgname" => "ООО Газавтоматика",
    "legaladdress" => "Бирск, Бурновская",
    "mailaddress" => "Бирск, Бурновская",
    "phone" => "89174587878",
    "inn" => "0257007375",
    "kpp" => "02547845",
    "fioip" => "ФИО ИП",
    "fio", "ФИО"
];
class Field
{
    const email = ["email", "Email"];
    const orgname = ["orgname", "Наименование организации"];
    const legaladdress = ["legaladdress", "Юридический адрес"];
    const mailaddress = ["mailaddress", "Почтовый адрес"];
    const phone = ["phone", "Телефон"];
    const inn = ["inn", "ИНН"];
    const kpp = ["kpp", "КПП"];
    const fioip = ["fioip", "ФИО ИП"];
    const fio = ["fio", "ФИО"];

    static function getRoboLink()
    {
        return '<h2>ROBOKASSA</h2>';
    }
}

$client_types = [
    1 => 'Юридическое лицо',
    2 => 'Индивидуальный предприниматель',
    3 => 'Физическое лицо'
];



function inputGenerator($field)
{
    return '<tr>
                    <td><p>' . $field[1] . ':</p></td>
                    <td>
                        <input class="input" name="' . $field[0] . '" type="text">
                    </td>
                </tr>';
}

function getClientTypes()
{
    global $client_types;
    foreach ($client_types as $key => $value) {
        echo '<option value=' . $key . '>' . $value . '</option>';
    }
}
function getFields($type)
{
    if(isset($type)) {
        $orgname = inputGenerator(Field::orgname);
        $fio = inputGenerator(Field::fio);
        $fioip = inputGenerator(Field::fioip);
        $legaladdress = inputGenerator(Field::legaladdress);
        $kpp = inputGenerator(Field::kpp);
        $robolink = Field::getRoboLink();
        if ($type == "1") {
            $fio = "";
            $fioip = "";
            $robolink = "";
        }
        if ($type == "2") {
            $orgname = "";
            $fio = "";
            $robolink = "";
        }
        if ($type == "3") {
            $orgname = "";
            $fioip = "";
            $legaladdress = "";
            $kpp = "";
        }
        echo inputGenerator(Field::email) .
            $orgname .
            $fio .
            $fioip .
            $legaladdress .
            inputGenerator(Field::mailaddress) .
            inputGenerator(Field::phone) .
            inputGenerator(Field::inn) .
            $kpp .
            $robolink;
    }
}

function sendEmail(){

}

if ($_POST['type']){
    getFields(['type']);
}