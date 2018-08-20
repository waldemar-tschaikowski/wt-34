<?php
/**
 * @author waldemar.tschaikowsk
 * @version $Id$
 */

namespace App\Base;

class ConfigApplication
{
    private $localConfig;

    /**
     * ConfigApplication constructor.
     * @param $enviroment
     *
     * $enviroment:
     *      app, test(phpunit), etc.
     *
     */
    public function __construct($enviroment, $dir)
    {
        $detei = $dir . '/Conf/' . $enviroment . 'Config.php';

        if (!file_exists($detei)) {
            throw new \Exception('File exsitiert nicht');
        }

        $this->localConfig = include $detei;
    }

}
