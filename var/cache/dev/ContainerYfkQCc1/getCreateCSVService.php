<?php

namespace ContainerYfkQCc1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCreateCSVService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Services\CreateCSV' shared autowired service.
     *
     * @return \App\Services\CreateCSV
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Services/CreateCSV.php';

        return $container->privates['App\\Services\\CreateCSV'] = new \App\Services\CreateCSV();
    }
}
