<?php

namespace ContainerGRi2xj9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSubpanelDataHandlerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Data\LegacyHandler\PresetDataHandlers\SubpanelDataHandler' shared autowired service.
     *
     * @return \App\Data\LegacyHandler\PresetDataHandlers\SubpanelDataHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/core/backend/Data/LegacyHandler/ListDataHandlerInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Data/LegacyHandler/PresetListDataHandlerInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Data/LegacyHandler/PresetDataHandlers/SubpanelDataHandler.php';

        return $container->privates['App\\Data\\LegacyHandler\\PresetDataHandlers\\SubpanelDataHandler'] = new \App\Data\LegacyHandler\PresetDataHandlers\SubpanelDataHandler(\dirname(__DIR__, 3), (\dirname(__DIR__, 3).'/public/legacy'), 'LEGACYSESSID', 'PHPSESSID', ($container->privates['App\\Engine\\LegacyHandler\\LegacyScopeState'] ?? ($container->privates['App\\Engine\\LegacyHandler\\LegacyScopeState'] = new \App\Engine\LegacyHandler\LegacyScopeState())), ($container->privates['App\\Module\\LegacyHandler\\ModuleNameMapperHandler'] ?? $container->getModuleNameMapperHandlerService()), ($container->privates['App\\Data\\LegacyHandler\\RecordMapper'] ?? $container->load('getRecordMapperService')), ($container->privates['App\\Data\\LegacyHandler\\FilterMapper\\LegacyFilterMapper'] ?? $container->load('getLegacyFilterMapperService')), ($container->services['session'] ?? $container->getSessionService()));
    }
}
