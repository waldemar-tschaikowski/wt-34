<?php
/**
 * Created by PhpStorm.
 * User: waldemar.tschaikowsk
 * Date: 19.01.2018
 * Time: 09:46
 */
class Request
{
    private $fied;
}

class Applikation
{
    public function run(Request $request = null)
    {
        var_dump($request);
    }
}

$app = new Applikation();

$app->run();