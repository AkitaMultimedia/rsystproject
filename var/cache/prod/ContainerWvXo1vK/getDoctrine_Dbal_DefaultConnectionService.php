<?php

namespace ContainerWvXo1vK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Dbal_DefaultConnectionService extends App_KernelProdContainer
{
    /*
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/Connection.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Connection.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/ConnectionFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Configuration.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/event-manager/lib/Doctrine/Common/EventManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/ContainerAwareEventManager.php';

        $a = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine.orm.default_listeners.attach_entity_listeners' => ['privates', 'doctrine.orm.default_listeners.attach_entity_listeners', 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService', true],
            'doctrine.orm.listeners.pdo_cache_adapter_doctrine_schema_subscriber' => ['privates', 'doctrine.orm.listeners.pdo_cache_adapter_doctrine_schema_subscriber', 'getDoctrine_Orm_Listeners_PdoCacheAdapterDoctrineSchemaSubscriberService', true],
            'doctrine.orm.messenger.doctrine_schema_subscriber' => ['privates', 'doctrine.orm.messenger.doctrine_schema_subscriber', 'getDoctrine_Orm_Messenger_DoctrineSchemaSubscriberService', true],
            'stof_doctrine_extensions.listener.timestampable' => ['privates', 'stof_doctrine_extensions.listener.timestampable', 'getStofDoctrineExtensions_Listener_TimestampableService', true],
        ], [
            'doctrine.orm.default_listeners.attach_entity_listeners' => '?',
            'doctrine.orm.listeners.pdo_cache_adapter_doctrine_schema_subscriber' => '?',
            'doctrine.orm.messenger.doctrine_schema_subscriber' => '?',
            'stof_doctrine_extensions.listener.timestampable' => '?',
        ]), [0 => 'doctrine.orm.messenger.doctrine_schema_subscriber', 1 => 'doctrine.orm.listeners.pdo_cache_adapter_doctrine_schema_subscriber', 2 => 'stof_doctrine_extensions.listener.timestampable']);
        $a->addEventListener([0 => 'loadClassMetadata'], 'doctrine.orm.default_listeners.attach_entity_listeners');

        return $container->services['doctrine.dbal.default_connection'] = (new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory([]))->createConnection(['driver' => 'pdo_mysql', 'charset' => 'utf8mb4', 'unix_socket' => '/Applications/MAMP/tmp/mysql/mysql.sock', 'url' => $container->getEnv('resolve:DATABASE_URL'), 'host' => 'localhost', 'port' => NULL, 'user' => 'root', 'password' => NULL, 'driverOptions' => [], 'serverVersion' => '5.7', 'defaultTableOptions' => ['charset' => 'utf8mb4', 'collate' => 'utf8mb4_unicode_ci']], new \Doctrine\DBAL\Configuration(), $a, []);
    }
}
