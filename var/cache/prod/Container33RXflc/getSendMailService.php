<?php

namespace Container33RXflc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSendMailService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Services\SendMail' shared autowired service.
     *
     * @return \App\Services\SendMail
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Services/SendMail.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/MailerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Mailer.php';

        return $container->privates['App\\Services\\SendMail'] = new \App\Services\SendMail(new \Symfony\Component\Mailer\Mailer(($container->privates['mailer.transports'] ?? $container->load('getMailer_TransportsService')), ($container->services['messenger.default_bus'] ?? $container->load('getMessenger_DefaultBusService')), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService())), ($container->privates['parameter_bag'] ?? ($container->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($container))));
    }
}
