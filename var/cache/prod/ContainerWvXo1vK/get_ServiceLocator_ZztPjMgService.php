<?php

namespace ContainerWvXo1vK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZztPjMgService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.zztPjMg' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.zztPjMg'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'helper' => ['privates', 'App\\Services\\DataBaseHelper', 'getDataBaseHelperService', true],
            'lotRepo' => ['privates', 'App\\Repository\\LotDataRepository', 'getLotDataRepositoryService', true],
        ], [
            'helper' => 'App\\Services\\DataBaseHelper',
            'lotRepo' => 'App\\Repository\\LotDataRepository',
        ]);
    }
}