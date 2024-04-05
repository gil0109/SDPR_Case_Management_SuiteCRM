<?php

namespace ContainerGRi2xj9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRecordHandlerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Data\LegacyHandler\RecordHandler' shared autowired service.
     *
     * @return \App\Data\LegacyHandler\RecordHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/core/backend/Data/Service/RecordProviderInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Data/LegacyHandler/RecordHandler.php';

        return $container->privates['App\\Data\\LegacyHandler\\RecordHandler'] = new \App\Data\LegacyHandler\RecordHandler(\dirname(__DIR__, 3), (\dirname(__DIR__, 3).'/public/legacy'), 'LEGACYSESSID', 'PHPSESSID', ($container->privates['App\\Engine\\LegacyHandler\\LegacyScopeState'] ?? ($container->privates['App\\Engine\\LegacyHandler\\LegacyScopeState'] = new \App\Engine\LegacyHandler\LegacyScopeState())), ($container->privates['App\\Module\\LegacyHandler\\ModuleNameMapperHandler'] ?? $container->getModuleNameMapperHandlerService()), ($container->services['session'] ?? $container->getSessionService()), ($container->privates['App\\Engine\\LegacyHandler\\AclHandler'] ?? $container->load('getAclHandlerService')), ($container->privates['App\\Module\\LegacyHandler\\Favorites\\FavoritesHandler'] ?? $container->load('getFavoritesHandlerService')));
    }
}
