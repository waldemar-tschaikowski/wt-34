<?php
/**
 * @author waldemar.tschaikowsk
 * @version $Id$
 */

namespace App\Controller;

class FooController extends Controller
{
    /**
     * @var \App\Provider\FooProvider
     */
    public $fooProvider;

    /**
     * @var \App\Provider\ArtikelProvider
     */
    public $artikelProvider;

    public function main()
    {

        echo '<pre>';
        var_dump($this->fooProvider->html());
        var_dump($this->artikelProvider->html());
        echo '</pre>';

        //return $this->fooProvider->html();
    }
}