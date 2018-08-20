<?php


/**
 * @author waldemar.tschaikowsk
 * @version $Id$
 */
namespace App;

use App\Provider\DatenObjektProvider;

class FooTest extends TestCaseStart
{
    public function testTutorial()
    {
        $expected = "Test DatenObjektProvider";

        $tutorial = new DatenObjektProvider();

        $this->assertEquals($expected, $tutorial->html());
    }
}
