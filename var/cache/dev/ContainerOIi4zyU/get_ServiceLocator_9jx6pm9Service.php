<?php

namespace ContainerOIi4zyU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_9jx6pm9Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.9jx6pm9' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.9jx6pm9'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'LotsRepo' => ['privates', 'App\\Repository\\LotRepository', 'getLotRepositoryService', true],
            'csv' => ['privates', 'App\\Services\\CreateCSV', 'getCreateCSVService', true],
            'emailsRepo' => ['privates', 'App\\Repository\\EmailsForDataRepository', 'getEmailsForDataRepositoryService', true],
            'mailer' => ['privates', 'App\\Services\\SendMail', 'getSendMailService', true],
            'po' => ['privates', '.errored..service_locator.9jx6pm9.App\\Entity\\Po', NULL, 'Cannot autowire service ".service_locator.9jx6pm9": it references class "App\\Entity\\Po" but no such service exists.'],
        ], [
            'LotsRepo' => 'App\\Repository\\LotRepository',
            'csv' => 'App\\Services\\CreateCSV',
            'emailsRepo' => 'App\\Repository\\EmailsForDataRepository',
            'mailer' => 'App\\Services\\SendMail',
            'po' => 'App\\Entity\\Po',
        ]);
    }
}
