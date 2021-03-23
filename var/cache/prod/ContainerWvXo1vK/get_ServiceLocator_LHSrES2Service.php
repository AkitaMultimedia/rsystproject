<?php

namespace ContainerWvXo1vK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LHSrES2Service extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.lHSrES2' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.lHSrES2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'LotRepo' => ['privates', 'App\\Repository\\LotDataRepository', 'getLotDataRepositoryService', true],
            'PoRepo' => ['privates', 'App\\Repository\\PoRepository', 'getPoRepositoryService', true],
        ], [
            'LotRepo' => 'App\\Repository\\LotDataRepository',
            'PoRepo' => 'App\\Repository\\PoRepository',
        ]);
    }
}