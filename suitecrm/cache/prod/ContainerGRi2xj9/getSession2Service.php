<?php

namespace ContainerGRi2xj9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSession2Service extends App_KernelProdContainer
{
    /*
     * Gets the private '.errored..service_locator.dbFJ5zg.Symfony\Component\HttpFoundation\Session\Session' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->throw('Cannot autowire service ".service_locator.dbFJ5zg": it references class "Symfony\\Component\\HttpFoundation\\Session\\Session" but no such service exists. Try changing the type-hint to "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface" instead.');
    }
}