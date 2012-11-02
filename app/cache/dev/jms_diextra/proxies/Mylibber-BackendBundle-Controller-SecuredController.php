<?php

namespace EnhancedProxy_8bc338159f096d5eed4a3f9cb832d51686890203\__CG__\Mylibber\BackendBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class SecuredController extends \Mylibber\BackendBundle\Controller\SecuredController
{
    private $__CGInterception__loader;

    public function helloadminAction($name)
    {
        $ref = new \ReflectionMethod('Mylibber\\BackendBundle\\Controller\\SecuredController', 'helloadminAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($name));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($name), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}