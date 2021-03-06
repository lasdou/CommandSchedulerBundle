<?php

namespace App\Tests\App;

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        return array(
            new \Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new \Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new \Symfony\Bundle\TwigBundle\TwigBundle(),
            new \Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new \Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle(),
            new \Liip\FunctionalTestBundle\LiipFunctionalTestBundle(),
            new \JMose\CommandSchedulerBundle\JMoseCommandSchedulerBundle(),
            new \Liip\TestFixturesBundle\LiipTestFixturesBundle(),
        );
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__ . '/config/config_' . $this->getEnvironment() . '.yml');
    }

    /**
     * @return string
     */
    public function getCacheDir()
    {
        return __DIR__ . '/../../build/cache/' . $this->getEnvironment();
    }

    /**
     * @return string
     */
    public function getLogDir()
    {
        return __DIR__ . '/../../build/kernel_logs/' . $this->getEnvironment();
    }
}
