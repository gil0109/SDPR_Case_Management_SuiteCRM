<?php

namespace ContainerGRi2xj9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrintAsPdfActionService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Process\Service\RecordActions\PrintAsPdfAction' shared autowired service.
     *
     * @return \App\Process\Service\RecordActions\PrintAsPdfAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/core/backend/Process/Service/ProcessHandlerInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Process/Service/RecordActions/PrintAsPdfAction.php';

        return $container->privates['App\\Process\\Service\\RecordActions\\PrintAsPdfAction'] = new \App\Process\Service\RecordActions\PrintAsPdfAction(($container->privates['App\\Module\\LegacyHandler\\ModuleNameMapperHandler'] ?? $container->getModuleNameMapperHandlerService()));
    }
}
