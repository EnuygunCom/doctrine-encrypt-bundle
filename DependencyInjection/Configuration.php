<?php

namespace EnuygunCom\DoctrineEncryptBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Configuration tree for security bundle. Full tree you can see in Resources/docs
 * 
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface {

    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder() {

        //Create tree builder
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('enuyguncom_doctrine_encrypt');

        // Grammar of config tree
        $rootNode
                ->children()
                    ->scalarNode('secret_key')
                        ->beforeNormalization()
                        ->ifNull()
                            ->thenInvalid('You must specifiy secret_key option')
                        ->end()
                    ->end()
                    ->scalarNode('encryptor_class')
                    ->end()
                ->end();

        return $treeBuilder;
    }

}