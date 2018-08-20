<?php
/**
 * @author waldemar.tschaikowsk
 * @version $Id$
 */

namespace App\Base;

class Response
{
    public function __construct()
    {

    }

    public function getView($callback)
    {
        $callback('View Template--');
    }
}