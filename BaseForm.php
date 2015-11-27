<?php

/**
 * Created by PhpStorm.
 * User: artem
 * Date: 27.11.15
 * Time: 18:50
 */
class BaseForm
{
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