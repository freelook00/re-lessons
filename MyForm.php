<?php

/**
 * Created by PhpStorm.
 * User: artem
 * Date: 27.11.15
 * Time: 18:15
 *
 *
 * Пример класса, который
 *
 * 1) Может создавать форму на основе своих свойств
 * 2) Может заполнянть свойства на основе данных из массива,
 * в котором имена ключей соответствуют именам свойств
 *
 * Для простоты реализации считаем, что все поля ввода имеют тип "текст"
 */
class MyForm
{
    public $firstName;
    public $middleName;
    public $lastName;

    public $email;
    public $phone;
    public $birthDate;

    public function makeForm()
    {
        $form = '<form action="' . $_SERVER['REQUEST_URI'] . '" method="POST">';

        foreach (get_object_vars($this) as $prop => $value)
        {
            $form .= $prop . ':&nbsp;<input type="text" name="'.$prop.'" value="'. $value .'" /><br />';
        }

        $form .= '<input type="submit" />';

        return $form;
    }

    public function loadData($data)
    {
        foreach($data as $prop => $value)
        {
            if( property_exists($this, $prop) )
            {
                $this->{$prop} = $value;
            }
        }
    }


}