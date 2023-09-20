<?php

namespace ContainerOd8t7qc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HaLTs5yService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.haLTs5y' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.haLTs5y'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'etudiant' => ['privates', '.errored..service_locator.haLTs5y.App\\Entity\\Etudiant', NULL, 'Cannot autowire service ".service_locator.haLTs5y": it needs an instance of "App\\Entity\\Etudiant" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'etudiant' => 'App\\Entity\\Etudiant',
        ]);
    }
}