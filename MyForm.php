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

    /**
     * @return string
     */
    public function makeForm() //Функция генерации формы
    {

        //Начло формы
        $form = '<form action="' . $_SERVER['REQUEST_URI'] . '" method="POST">';

        //Перебор свойств объекта с помощью фукнкции get_object_vars()
        foreach (get_object_vars($this) as $prop => $value)
        {

            //Добавление поля ввода, где name соотвествует свойству объекта,
            //value соотвествует значению свойства объекта
            $form .= $prop . ':&nbsp;<input type="text" name="'.$prop.'" value="'. $value .'" /><br />';
        }

        //Субмит баттон ;-)
        $form .= '<input type="submit" />';


        //Возвращаем строку формы.
        return $form;
    }

    /**
     * @param $data
     */
    public function loadData($data) //Функция загрузки данных
    {
        foreach($data as $prop => $value) //перебираем данные в массиве
        {
            if( property_exists($this, $prop) ) //если свойство есть,
            {
                $this->{$prop} = $value; //то присваиваем ему занчение из массива
            }
        }
    }


}