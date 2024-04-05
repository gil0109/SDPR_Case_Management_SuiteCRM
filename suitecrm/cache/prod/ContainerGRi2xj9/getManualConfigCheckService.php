<?php

namespace ContainerGRi2xj9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getManualConfigCheckService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Install\Service\LegacyMigration\Steps\ManualConfigCheck' autowired service.
     *
     * @return \App\Install\Service\LegacyMigration\Steps\ManualConfigCheck
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/core/backend/Engine/Model/ProcessStepInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Install/Service/LegacyMigration/LegacyMigrationStepInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Engine/Model/ProcessStepTrait.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Install/Service/Installation/InstallStepTrait.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Install/Service/LegacyMigration/Steps/ManualConfigCheck.php';

        $container->factories['service_container']['App\\Install\\Service\\LegacyMigration\\Steps\\ManualConfigCheck'] = function () use ($container) {
            return new \App\Install\Service\LegacyMigration\Steps\ManualConfigCheck(($container->privates['App\\Install\\LegacyHandler\\InstallHandler'] ?? $container->getInstallHandlerService()));
        };

        return $container->factories['service_container']['App\\Install\\Service\\LegacyMigration\\Steps\\ManualConfigCheck']();
    }
}
