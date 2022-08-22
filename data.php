<?php

const fields = array(
    "email" => "Email",
    "orgname" => "Наименование организации",
    "legaladdress" => "Юридический адрес",
    "mailaddress" => "Почтовый адрес",
    "phone" => "Телефон",
    "inn" => "ИНН",
    "kpp" => "КПП",
    "fioip" => "ФИО ИП",
    "fio" => "ФИО");

function getRoboLink()
{
    return '<tr><td>ROBOKASSA</td><td></td></tr>';
}
const client_types = [
    1 => 'Юридическое лицо',
    2 => 'Индивидуальный предприниматель',
    3 => 'Физическое лицо'
];