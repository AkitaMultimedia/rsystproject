<?php

namespace ContainerYfkQCc1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBase64ConvertService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Services\Base64Convert' shared autowired service.
     *
     * @return \App\Services\Base64Convert
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Services/Base64Convert.php';

        return $container->privates['App\\Services\\Base64Convert'] = new \App\Services\Base64Convert();
    }
}
