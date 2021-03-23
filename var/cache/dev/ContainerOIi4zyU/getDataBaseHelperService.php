<?php

namespace ContainerOIi4zyU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDataBaseHelperService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Services\DataBaseHelper' shared autowired service.
     *
     * @return \App\Services\DataBaseHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Services/DataBaseHelper.php';

        return $container->privates['App\\Services\\DataBaseHelper'] = new \App\Services\DataBaseHelper();
    }
}
