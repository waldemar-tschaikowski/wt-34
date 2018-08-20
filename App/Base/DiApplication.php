<?php
/**
 * @author waldemar.tschaikowsk
 * @version $Id$
 */

namespace App\Base;

class DiApplication
{
    private $di;

    public function __construct()
    {
        $diDetei = ENVDIR . '/Conf/di.php';

        $this->di = include $diDetei;
    }

    public function get($requestController)
    {
        $provider = $this->di['controllers'][$requestController];

        $returnProviders = [];

        foreach ($provider as $key => $value) {
            $returnProviders[$key] = $this->di['provider'][$value];
        }

        return $returnProviders;
    }

    public function getProvider($provider)
    {
        return $this->di['provider'][$provider];
    }
}