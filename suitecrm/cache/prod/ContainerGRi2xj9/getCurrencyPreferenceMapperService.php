<?php

namespace ContainerGRi2xj9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCurrencyPreferenceMapperService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\UserPreferences\LegacyHandler\Mappers\CurrencyPreferenceMapper' shared autowired service.
     *
     * @return \App\UserPreferences\LegacyHandler\Mappers\CurrencyPreferenceMapper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/core/backend/UserPreferences/LegacyHandler/UserPreferencesMapperInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/UserPreferences/LegacyHandler/Mappers/CurrencyPreferenceMapper.php';

        return $container->privates['App\\UserPreferences\\LegacyHandler\\Mappers\\CurrencyPreferenceMapper'] = new \App\UserPreferences\LegacyHandler\Mappers\CurrencyPreferenceMapper(($container->privates['App\\Currency\\LegacyHandler\\CurrencyHandler'] ?? $container->getCurrencyHandlerService()));
    }
}