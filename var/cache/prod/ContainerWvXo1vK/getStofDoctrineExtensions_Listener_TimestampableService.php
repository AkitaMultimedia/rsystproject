<?php

namespace ContainerWvXo1vK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStofDoctrineExtensions_Listener_TimestampableService extends App_KernelProdContainer
{
    /*
     * Gets the private 'stof_doctrine_extensions.listener.timestampable' shared service.
     *
     * @return \Gedmo\Timestampable\TimestampableListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/event-manager/lib/Doctrine/Common/EventSubscriber.php';
        include_once \dirname(__DIR__, 4).'/vendor/gedmo/doctrine-extensions/src/Mapping/MappedEventSubscriber.php';
        include_once \dirname(__DIR__, 4).'/vendor/gedmo/doctrine-extensions/src/AbstractTrackingListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/gedmo/doctrine-extensions/src/Timestampable/TimestampableListener.php';

        $container->privates['stof_doctrine_extensions.listener.timestampable'] = $instance = new \Gedmo\Timestampable\TimestampableListener();

        $instance->setAnnotationReader(($container->privates['annotations.cached_reader'] ?? $container->getAnnotations_CachedReaderService()));

        return $instance;
    }
}
