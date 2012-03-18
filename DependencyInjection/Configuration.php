<?php

namespace Tremend\KrumoBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $builder = new TreeBuilder();
        $builder->root('krumo')
            ->children()
                ->scalarNode('skin')->defaultValue('orange')->end()
                ->scalarNode('asset_dir')->defaultValue('%kernel.root_dir%/../web/bundle/tremendkrumo')->end()
            ->end()
        ;

        return $builder;
    }
}
