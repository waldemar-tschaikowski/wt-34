<?php


/**
 * @author waldemar.tschaikowsk
 * @version $Id$
 */
namespace App;

class TestCaseStart extends \PHPUnit_Framework_TestCase
{
    public function __construct()
    {
        parent::__construct();

        $app = new TestStartApplication();
    }
}
