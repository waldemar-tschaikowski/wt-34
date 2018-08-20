<?php
/**
 * @author waldemar.tschaikowsk
 * @version $Id$
 */

namespace App\Base;

//use App\Base\ConfigApplication;

class StartApplication implements \ArrayAccess
{
    private $properties = array();


    public function __construct()
    {
        $this['config'] = new ConfigApplication(ENV, ENVDIR);
        $this['di']     = new DiApplication();
    }

    public function run()
    {
        $request = new Request();

        $this['response'] = new Response();

        $requestController = "\App\Controller\\" . $request->getController();


        //'fooProvider' => 'FooProvider'
        $requestProvider = $this['di']->get($request->getController());

        //'fooProvider' => 'FooProvider'
        foreach ($requestProvider as $key => $provider) {
            $requestProvider[$key] = $this->providerRekursiveAbhaengigkeiten($provider);
        }

        $controller = new $requestController($requestProvider);


        $action = $request->getAction();


        return $this['response']->getView(function($content) use ($controller, $action) {
            $result = $controller->$action();

            echo '<div>' . $content . $result . '</div>';
        });
    }

/*    private function providerResult($requestProvider)//'FooProvider'
    {
        return $this->providerRekursiveAbhaengigkeiten($requestProvider);
    }*/

    private function providerRekursiveAbhaengigkeiten($requestProvider)
    {
        $provider = $requestProvider();//'BossProvider'

        $returnProviders = array();

        //'ArtikelProvider',
        foreach ($provider['abhaengigkeit'] as $abhaengigkeit) {
            $requestProvider = $this['di']->getProvider($abhaengigkeit);

            $returnProviders[] = $this->providerRekursiveAbhaengigkeiten($requestProvider);

        }

        if(!empty($returnProviders)) {
            $r = new \ReflectionClass($provider['class']);

            return $r->newInstanceArgs($returnProviders);
        }

        return new $provider['class']();
    }

    public function offsetExists($id)
    {
        return isset($this->properties[$id]);
    }

    public function offsetGet($id)
    {
        return $this->properties[$id];
    }

    public function offsetSet($id, $value)
    {
        $this->properties[$id] = $value;
    }

    public function offsetUnset($id)
    {
        unset($this->properties[$id]);
    }
}