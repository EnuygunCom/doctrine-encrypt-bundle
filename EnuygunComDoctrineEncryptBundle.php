<?php

namespace EnuygunCom\DoctrineEncryptBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\PassConfig;
use EnuygunCom\DoctrineEncryptBundle\DependencyInjection\DoctrineEncryptExtension;
use EnuygunCom\DoctrineEncryptBundle\DependencyInjection\Compiler\RegisterServiceCompilerPass;

class EnuygunComDoctrineEncryptBundle extends Bundle {
    
    public function build(ContainerBuilder $container) {
        parent::build($container);
        $container->addCompilerPass(new RegisterServiceCompilerPass(), PassConfig::TYPE_AFTER_REMOVING);
    }
    
    public function getContainerExtension()
    {
        return new DoctrineEncryptExtension();
    }
}
