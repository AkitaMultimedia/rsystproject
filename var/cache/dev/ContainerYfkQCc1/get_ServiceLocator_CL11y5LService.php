<?php

namespace ContainerYfkQCc1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CL11y5LService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.CL11y5L' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.CL11y5L'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'BoxPresets' => ['privates', 'App\\Repository\\BoxSizePresetsRepository', 'getBoxSizePresetsRepositoryService', true],
        ], [
            'BoxPresets' => 'App\\Repository\\BoxSizePresetsRepository',
        ]);
    }
}