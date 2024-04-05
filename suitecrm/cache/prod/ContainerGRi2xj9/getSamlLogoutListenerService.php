<?php

namespace ContainerGRi2xj9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSamlLogoutListenerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'Hslavich\OneloginSamlBundle\EventListener\Security\SamlLogoutListener' shared autowired service.
     *
     * @return \Hslavich\OneloginSamlBundle\EventListener\Security\SamlLogoutListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/vendor/hslavich/oneloginsaml-bundle/EventListener/Security/SamlLogoutListener.php';

        return $container->privates['Hslavich\\OneloginSamlBundle\\EventListener\\Security\\SamlLogoutListener'] = new \Hslavich\OneloginSamlBundle\EventListener\Security\SamlLogoutListener(($container->privates['OneLogin\\Saml2\\Auth'] ?? $container->load('getAuthService')));
    }
}
