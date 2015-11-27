<?php

/**
 * Created by PhpStorm.
 * User: artem
 * Date: 27.11.15
 * Time: 18:50
 *
 * Базовый класс формы, который содержит функции генерации формы
 * и функцию заполнения данных объекта на сонове массива
 *
 */

class BaseForm
{
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