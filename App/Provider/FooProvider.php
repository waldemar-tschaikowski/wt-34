<?php
/**
 * @author waldemar.tschaikowsk
 * @version $Id$
 */

namespace App\Provider;

class FooProvider extends Provider
{
    private $bossProvider;

    private $datenObjektProvider;

    public function __construct(
        BossProvider $bossProvider,
        DatenObjektProvider $datenObjektProvider
    )
    {
        $this->bossProvider = $bossProvider;
        $this->datenObjektProvider = $datenObjektProvider;
    }

    public function html()
    {
        echo $this->datenObjektProvider->html() . '<br>';
        return $this->bossProvider->text();
    }
}