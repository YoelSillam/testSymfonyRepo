<?php

namespace ContainerOd8t7qc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEtudiantControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\EtudiantController' shared autowired service.
     *
     * @return \App\Controller\EtudiantController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/EtudiantController.php';

        $container->services['App\\Controller\\EtudiantController'] = $instance = new \App\Controller\EtudiantController();

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\EtudiantController', $container));

        return $instance;
    }
}
