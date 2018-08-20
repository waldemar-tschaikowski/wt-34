<?php
/**
 * @author waldemar.tschaikowsk
 * @version $Id$
 */

namespace App\Controller;

class Controller
{
    public function __construct($properties)
    {
        foreach ($properties as $propertyKey => $propertyValue) {
            $this->$propertyKey = $propertyValue;
        }
    }

    /**
     * @param $name
     * @param $arguments
     */
    public function __call($name, $arguments)
    {
       echo 'Kein Controller existiert';
    }
}