<?php

namespace ContainerGRi2xj9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRecordThreadDefinitionMapperService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\ViewDefinitions\LegacyHandler\RecordView\RecordThreadDefinitionMapper' shared autowired service.
     *
     * @return \App\ViewDefinitions\LegacyHandler\RecordView\RecordThreadDefinitionMapper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/core/backend/ViewDefinitions/LegacyHandler/ViewDefinitionMapperInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/ViewDefinitions/LegacyHandler/FieldDefinitionsInjectorTrait.php';
        include_once \dirname(__DIR__, 3).'/core/backend/ViewDefinitions/LegacyHandler/RecordView/RecordThreadDefinitionMapper.php';

        return $container->privates['App\\ViewDefinitions\\LegacyHandler\\RecordView\\RecordThreadDefinitionMapper'] = new \App\ViewDefinitions\LegacyHandler\RecordView\RecordThreadDefinitionMapper(($container->privates['App\\FieldDefinitions\\LegacyHandler\\FieldDefinitionsHandler'] ?? $container->load('getFieldDefinitionsHandlerService')), ($container->privates['App\\ViewDefinitions\\Service\\FieldAliasMapper'] ?? $container->load('getFieldAliasMapperService')));
    }
}
