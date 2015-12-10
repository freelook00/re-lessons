<?php

/**
 * Created by PhpStorm.
 * User: artem
 * Date: 27.11.15
 * Time: 18:51
 *
 * Класс Некой формы, который наследуется от класса Базовой формы
 *
 * Содержит только поля
 */
class SomeForm extends BaseForm
{

    public $firstName;
    public $middleName;
    public $lastName;

    public $email;
    public $phone;
    public $birthDate;

}