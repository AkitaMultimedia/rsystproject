<?php

namespace ContainerWvXo1vK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArgumentResolver_ServiceService extends App_KernelProdContainer
{
    /*
     * Gets the private 'argument_resolver.service' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/ServiceValueResolver.php';

        return $container->privates['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\Admin\\AdminController::deletePhoto' => ['privates', '.service_locator.FsjR8vo', 'get_ServiceLocator_FsjR8voService', true],
            'App\\Controller\\Admin\\AdminController::getCsv' => ['privates', '.service_locator.CNth_dx', 'get_ServiceLocator_CNthDxService', true],
            'App\\Controller\\Admin\\AdminController::mailCsv' => ['privates', '.service_locator..R6xlct', 'get_ServiceLocator__R6xlctService', true],
            'App\\Controller\\Admin\\AdminController::markAsDone' => ['privates', '.service_locator.sE1tA8R', 'get_ServiceLocator_SE1tA8RService', true],
            'App\\Controller\\Admin\\AdminController::polist' => ['privates', '.service_locator.lHSrES2', 'get_ServiceLocator_LHSrES2Service', true],
            'App\\Controller\\Admin\\AdminController::viewLots' => ['privates', '.service_locator.tzmxNcP', 'get_ServiceLocator_TzmxNcPService', true],
            'App\\Controller\\Admin\\AdminController::viewPhotos' => ['privates', '.service_locator.FsjR8vo', 'get_ServiceLocator_FsjR8voService', true],
            'App\\Controller\\Admin\\SettingsController::dav_change_configuration' => ['privates', '.service_locator.QSiPVOk', 'get_ServiceLocator_QSiPVOkService', true],
            'App\\Controller\\Admin\\SettingsController::delete_box' => ['privates', '.service_locator.hiuod1Z', 'get_ServiceLocator_Hiuod1ZService', true],
            'App\\Controller\\Admin\\SettingsController::delete_email' => ['privates', '.service_locator.yl9MWu0', 'get_ServiceLocator_Yl9MWu0Service', true],
            'App\\Controller\\Admin\\SettingsController::modify_box' => ['privates', '.service_locator.hiuod1Z', 'get_ServiceLocator_Hiuod1ZService', true],
            'App\\Controller\\Admin\\SettingsController::modify_email' => ['privates', '.service_locator.yl9MWu0', 'get_ServiceLocator_Yl9MWu0Service', true],
            'App\\Controller\\Admin\\SettingsController::settings' => ['privates', '.service_locator.GJu2fT6', 'get_ServiceLocator_GJu2fT6Service', true],
            'App\\Controller\\MainController::getpresets' => ['privates', '.service_locator.3gocVCl', 'get_ServiceLocator_3gocVClService', true],
            'App\\Controller\\MainController::upload' => ['privates', '.service_locator.TQnptkY', 'get_ServiceLocator_TQnptkYService', true],
            'App\\Controller\\MainController::user_settings' => ['privates', '.service_locator.CL11y5L', 'get_ServiceLocator_CL11y5LService', true],
            'App\\Controller\\MainController::verifyLotExist' => ['privates', '.service_locator.zztPjMg', 'get_ServiceLocator_ZztPjMgService', true],
            'App\\Controller\\RegistrationController::delete' => ['privates', '.service_locator.Kntl2lG', 'get_ServiceLocator_Kntl2lGService', true],
            'App\\Controller\\RegistrationController::modify' => ['privates', '.service_locator.Kntl2lG', 'get_ServiceLocator_Kntl2lGService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.pwZ6MTM', 'get_ServiceLocator_PwZ6MTMService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\WebdavController::davtest' => ['privates', '.service_locator.zL5Ntz5', 'get_ServiceLocator_ZL5Ntz5Service', true],
            'App\\Controller\\WebdavController::webdav' => ['privates', '.service_locator.zL5Ntz5', 'get_ServiceLocator_ZL5Ntz5Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\Admin\\AdminController:deletePhoto' => ['privates', '.service_locator.FsjR8vo', 'get_ServiceLocator_FsjR8voService', true],
            'App\\Controller\\Admin\\AdminController:getCsv' => ['privates', '.service_locator.CNth_dx', 'get_ServiceLocator_CNthDxService', true],
            'App\\Controller\\Admin\\AdminController:mailCsv' => ['privates', '.service_locator..R6xlct', 'get_ServiceLocator__R6xlctService', true],
            'App\\Controller\\Admin\\AdminController:markAsDone' => ['privates', '.service_locator.sE1tA8R', 'get_ServiceLocator_SE1tA8RService', true],
            'App\\Controller\\Admin\\AdminController:polist' => ['privates', '.service_locator.lHSrES2', 'get_ServiceLocator_LHSrES2Service', true],
            'App\\Controller\\Admin\\AdminController:viewLots' => ['privates', '.service_locator.tzmxNcP', 'get_ServiceLocator_TzmxNcPService', true],
            'App\\Controller\\Admin\\AdminController:viewPhotos' => ['privates', '.service_locator.FsjR8vo', 'get_ServiceLocator_FsjR8voService', true],
            'App\\Controller\\Admin\\SettingsController:dav_change_configuration' => ['privates', '.service_locator.QSiPVOk', 'get_ServiceLocator_QSiPVOkService', true],
            'App\\Controller\\Admin\\SettingsController:delete_box' => ['privates', '.service_locator.hiuod1Z', 'get_ServiceLocator_Hiuod1ZService', true],
            'App\\Controller\\Admin\\SettingsController:delete_email' => ['privates', '.service_locator.yl9MWu0', 'get_ServiceLocator_Yl9MWu0Service', true],
            'App\\Controller\\Admin\\SettingsController:modify_box' => ['privates', '.service_locator.hiuod1Z', 'get_ServiceLocator_Hiuod1ZService', true],
            'App\\Controller\\Admin\\SettingsController:modify_email' => ['privates', '.service_locator.yl9MWu0', 'get_ServiceLocator_Yl9MWu0Service', true],
            'App\\Controller\\Admin\\SettingsController:settings' => ['privates', '.service_locator.GJu2fT6', 'get_ServiceLocator_GJu2fT6Service', true],
            'App\\Controller\\MainController:getpresets' => ['privates', '.service_locator.3gocVCl', 'get_ServiceLocator_3gocVClService', true],
            'App\\Controller\\MainController:upload' => ['privates', '.service_locator.TQnptkY', 'get_ServiceLocator_TQnptkYService', true],
            'App\\Controller\\MainController:user_settings' => ['privates', '.service_locator.CL11y5L', 'get_ServiceLocator_CL11y5LService', true],
            'App\\Controller\\MainController:verifyLotExist' => ['privates', '.service_locator.zztPjMg', 'get_ServiceLocator_ZztPjMgService', true],
            'App\\Controller\\RegistrationController:delete' => ['privates', '.service_locator.Kntl2lG', 'get_ServiceLocator_Kntl2lGService', true],
            'App\\Controller\\RegistrationController:modify' => ['privates', '.service_locator.Kntl2lG', 'get_ServiceLocator_Kntl2lGService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.pwZ6MTM', 'get_ServiceLocator_PwZ6MTMService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\WebdavController:davtest' => ['privates', '.service_locator.zL5Ntz5', 'get_ServiceLocator_ZL5Ntz5Service', true],
            'App\\Controller\\WebdavController:webdav' => ['privates', '.service_locator.zL5Ntz5', 'get_ServiceLocator_ZL5Ntz5Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\Admin\\AdminController::deletePhoto' => '?',
            'App\\Controller\\Admin\\AdminController::getCsv' => '?',
            'App\\Controller\\Admin\\AdminController::mailCsv' => '?',
            'App\\Controller\\Admin\\AdminController::markAsDone' => '?',
            'App\\Controller\\Admin\\AdminController::polist' => '?',
            'App\\Controller\\Admin\\AdminController::viewLots' => '?',
            'App\\Controller\\Admin\\AdminController::viewPhotos' => '?',
            'App\\Controller\\Admin\\SettingsController::dav_change_configuration' => '?',
            'App\\Controller\\Admin\\SettingsController::delete_box' => '?',
            'App\\Controller\\Admin\\SettingsController::delete_email' => '?',
            'App\\Controller\\Admin\\SettingsController::modify_box' => '?',
            'App\\Controller\\Admin\\SettingsController::modify_email' => '?',
            'App\\Controller\\Admin\\SettingsController::settings' => '?',
            'App\\Controller\\MainController::getpresets' => '?',
            'App\\Controller\\MainController::upload' => '?',
            'App\\Controller\\MainController::user_settings' => '?',
            'App\\Controller\\MainController::verifyLotExist' => '?',
            'App\\Controller\\RegistrationController::delete' => '?',
            'App\\Controller\\RegistrationController::modify' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\WebdavController::davtest' => '?',
            'App\\Controller\\WebdavController::webdav' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\Admin\\AdminController:deletePhoto' => '?',
            'App\\Controller\\Admin\\AdminController:getCsv' => '?',
            'App\\Controller\\Admin\\AdminController:mailCsv' => '?',
            'App\\Controller\\Admin\\AdminController:markAsDone' => '?',
            'App\\Controller\\Admin\\AdminController:polist' => '?',
            'App\\Controller\\Admin\\AdminController:viewLots' => '?',
            'App\\Controller\\Admin\\AdminController:viewPhotos' => '?',
            'App\\Controller\\Admin\\SettingsController:dav_change_configuration' => '?',
            'App\\Controller\\Admin\\SettingsController:delete_box' => '?',
            'App\\Controller\\Admin\\SettingsController:delete_email' => '?',
            'App\\Controller\\Admin\\SettingsController:modify_box' => '?',
            'App\\Controller\\Admin\\SettingsController:modify_email' => '?',
            'App\\Controller\\Admin\\SettingsController:settings' => '?',
            'App\\Controller\\MainController:getpresets' => '?',
            'App\\Controller\\MainController:upload' => '?',
            'App\\Controller\\MainController:user_settings' => '?',
            'App\\Controller\\MainController:verifyLotExist' => '?',
            'App\\Controller\\RegistrationController:delete' => '?',
            'App\\Controller\\RegistrationController:modify' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\WebdavController:davtest' => '?',
            'App\\Controller\\WebdavController:webdav' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]));
    }
}
