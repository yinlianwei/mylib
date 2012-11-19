<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // _welcome
        if ($pathinfo === '/_welcome') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        // _demo_login
        if ($pathinfo === '/demo/secured/login') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
        }

        // _security_check
        if ($pathinfo === '/demo/secured/login_check') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
        }

        // _demo_logout
        if ($pathinfo === '/demo/secured/logout') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
        }

        // acme_demo_secured_hello
        if ($pathinfo === '/demo/secured/hello') {
            return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
        }

        // _demo_secured_hello
        if (0 === strpos($pathinfo, '/demo/secured/hello') && preg_match('#^/demo/secured/hello/(?<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',)), array('_route' => '_demo_secured_hello'));
        }

        // _demo_secured_hello_admin
        if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',)), array('_route' => '_demo_secured_hello_admin'));
        }

        // _demo
        if (rtrim($pathinfo, '/') === '/demo') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_demo');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
        }

        // _demo_hello
        if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',)), array('_route' => '_demo_hello'));
        }

        // _demo_contact
        if ($pathinfo === '/demo/contact') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
        }

        // _wdt
        if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?<token>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_info
            if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?<about>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::infoAction',)), array('_route' => '_profiler_info'));
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?<token>[^/\\.]+)\\.txt$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_phpinfo
            if ($pathinfo === '/_profiler/phpinfo') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::phpinfoAction',  '_route' => '_profiler_phpinfo',);
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?<token>[^/]+)/search/results$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?<token>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

            // _profiler_redirect
            if (rtrim($pathinfo, '/') === '/_profiler') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_profiler_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => '_profiler_search_results',  'token' => 'empty',  'ip' => '',  'url' => '',  'method' => '',  'limit' => '10',  '_route' => '_profiler_redirect',);
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }

                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?<index>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // mylibber_backend_hello
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mylibber\\BackendBundle\\Controller\\DefaultController::helloAction',)), array('_route' => 'mylibber_backend_hello'));
        }

        // mylibber_backend_homepage
        if (rtrim($pathinfo, '/') === '/admin') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'mylibber_backend_homepage');
            }

            return array (  '_controller' => 'Mylibber\\BackendBundle\\Controller\\DefaultController::indexAction',  '_route' => 'mylibber_backend_homepage',);
        }

        // mylibber_backend_addbook
        if ($pathinfo === '/admin/addbook') {
            return array (  '_controller' => 'Mylibber\\BackendBundle\\Controller\\BookController::addAction',  '_route' => 'mylibber_backend_addbook',);
        }

        // mylibber_backend_addnew
        if ($pathinfo === '/admin/addnew') {
            return array (  '_controller' => 'Mylibber\\BackendBundle\\Controller\\BookController::addnewAction',  '_route' => 'mylibber_backend_addnew',);
        }

        // mylibber_backend_deletebook
        if (0 === strpos($pathinfo, '/admin/deltebook') && preg_match('#^/admin/deltebook/(?<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mylibber\\BackendBundle\\Controller\\BookController::deletebookAction',)), array('_route' => 'mylibber_backend_deletebook'));
        }

        // mylibber_backend_histbook
        if ($pathinfo === '/admin/histbook') {
            return array (  '_controller' => 'Mylibber\\BackendBundle\\Controller\\BookController::histAction',  '_route' => 'mylibber_backend_histbook',);
        }

        // mylibber_backend_usermanage
        if ($pathinfo === '/admin/usermanage') {
            return array (  '_controller' => 'Mylibber\\BackendBundle\\Controller\\BookController::usermanageAction',  '_route' => 'mylibber_backend_usermanage',);
        }

        // mylibber_backend_config
        if ($pathinfo === '/admin/config') {
            return array (  '_controller' => 'Mylibber\\BackendBundle\\Controller\\BookController::configAction',  '_route' => 'mylibber_backend_config',);
        }

        // mylibber_backend_addCategory
        if ($pathinfo === '/admin/addCategory') {
            return array (  '_controller' => 'Mylibber\\BackendBundle\\Controller\\CategoryController::addCategoryAction',  '_route' => 'mylibber_backend_addCategory',);
        }

        // mylibber_backend_addCategoryNew
        if ($pathinfo === '/admin/addCategoryNew') {
            return array (  '_controller' => 'Mylibber\\BackendBundle\\Controller\\CategoryController::addCategoryNewAction',  '_route' => 'mylibber_backend_addCategoryNew',);
        }

        // mylibber_backend_deleteCategory
        if (0 === strpos($pathinfo, '/admin/deleteCategory') && preg_match('#^/admin/deleteCategory/(?<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mylibber\\BackendBundle\\Controller\\CategoryController::deleteCategoryAction',)), array('_route' => 'mylibber_backend_deleteCategory'));
        }

        // mylibber_backend_addUser
        if ($pathinfo === '/admin/addUser') {
            return array (  '_controller' => 'Mylibber\\BackendBundle\\Controller\\UserController::addUserAction',  '_route' => 'mylibber_backend_addUser',);
        }

        // mylibber_backend_addUserNew
        if ($pathinfo === '/admin/addUserNew') {
            return array (  '_controller' => 'Mylibber\\BackendBundle\\Controller\\UserController::addUserNewAction',  '_route' => 'mylibber_backend_addUserNew',);
        }

        // mylibber_backend_deleteUser
        if (0 === strpos($pathinfo, '/admin/deleteUser') && preg_match('#^/admin/deleteUser/(?<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mylibber\\BackendBundle\\Controller\\UserController::deleteUserAction',)), array('_route' => 'mylibber_backend_deleteUser'));
        }

        // mylibber_backend_updateUserForm
        if (0 === strpos($pathinfo, '/admin/updateUserForm') && preg_match('#^/admin/updateUserForm/(?<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mylibber\\BackendBundle\\Controller\\UserController::updateUserFormAction',)), array('_route' => 'mylibber_backend_updateUserForm'));
        }

        // mylibber_backend_updateUser
        if (0 === strpos($pathinfo, '/admin/updateUser') && preg_match('#^/admin/updateUser/(?<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mylibber\\BackendBundle\\Controller\\UserController::updateUserAction',)), array('_route' => 'mylibber_backend_updateUser'));
        }

        // mylibber_backend_borrbook
        if ($pathinfo === '/admin/borrbook') {
            return array (  '_controller' => 'Mylibber\\BackendBundle\\Controller\\BorrController::borrAction',  '_route' => 'mylibber_backend_borrbook',);
        }

        // mylibber_backend_borrform
        if (0 === strpos($pathinfo, '/admin/borrForm') && preg_match('#^/admin/borrForm/(?<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mylibber\\BackendBundle\\Controller\\BorrController::borrFormAction',)), array('_route' => 'mylibber_backend_borrform'));
        }

        // mylibber_backend_newBorrBook
        if (0 === strpos($pathinfo, '/admin/newBorrBook') && preg_match('#^/admin/newBorrBook/(?<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mylibber\\BackendBundle\\Controller\\BorrController::newBorrBookAction',)), array('_route' => 'mylibber_backend_newBorrBook'));
        }

        // mylibber_backend_borrList
        if ($pathinfo === '/admin/borrList') {
            return array (  '_controller' => 'Mylibber\\BackendBundle\\Controller\\BorrController::borrListAction',  '_route' => 'mylibber_backend_borrList',);
        }

        // mylibber_backend_borrSearchList
        if ($pathinfo === '/admin/borrSearchList') {
            return array (  '_controller' => 'Mylibber\\BackendBundle\\Controller\\BorrController::borrSearchListAction',  '_route' => 'mylibber_backend_borrSearchList',);
        }

        // mylibber_backend_isbnBorrList
        if (0 === strpos($pathinfo, '/admin/isbnBorrList') && preg_match('#^/admin/isbnBorrList/(?<bookIsbn>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mylibber\\BackendBundle\\Controller\\BorrController::isbnBorrListAction',)), array('_route' => 'mylibber_backend_isbnBorrList'));
        }

        // mylibber_backend_giveBack
        if (0 === strpos($pathinfo, '/admin/giveBack') && preg_match('#^/admin/giveBack/(?<bookIsbn>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mylibber\\BackendBundle\\Controller\\BookController::giveBackAction',)), array('_route' => 'mylibber_backend_giveBack'));
        }

        // mylibber_backend_addebookform
        if ($pathinfo === '/admin/addebookform') {
            return array (  '_controller' => 'Mylibber\\BackendBundle\\Controller\\EbookController::addebookformAction',  '_route' => 'mylibber_backend_addebookform',);
        }

        // mylibber_backend_addebook
        if ($pathinfo === '/admin/addebook') {
            return array (  '_controller' => 'Mylibber\\BackendBundle\\Controller\\EbookController::addebookAction',  '_route' => 'mylibber_backend_addebook',);
        }

        // mylibber_backend_showebook
        if ($pathinfo === '/admin/showebook') {
            return array (  '_controller' => 'Mylibber\\BackendBundle\\Controller\\EbookController::showebookAction',  '_route' => 'mylibber_backend_showebook',);
        }

        // mylibber_backend_deleteebook
        if (0 === strpos($pathinfo, '/admin/deleteebook') && preg_match('#^/admin/deleteebook/(?<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mylibber\\BackendBundle\\Controller\\EbookController::deleteebookAction',)), array('_route' => 'mylibber_backend_deleteebook'));
        }

        // mylibber_mylib_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mylibber\\MylibBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'mylibber_mylib_homepage'));
        }

        // MylibberMylibBundle_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_MylibberMylibBundle_homepage;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'MylibberMylibBundle_homepage');
            }

            return array (  '_controller' => 'Mylibber\\MylibBundle\\Controller\\DefaultController::indexAction',  '_route' => 'MylibberMylibBundle_homepage',);
        }
        not_MylibberMylibBundle_homepage:

        // mylibberMulibBUndle_ebook
        if ($pathinfo === '/ebook') {
            return array (  '_controller' => 'Mylibber\\MylibBundle\\Controller\\PageController::ebookAction',  '_route' => 'mylibberMulibBUndle_ebook',);
        }

        // mylibber_backend_showEbookByCategory
        if (0 === strpos($pathinfo, '/showEbookByCategory') && preg_match('#^/showEbookByCategory/(?<category>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mylibber\\MylibBundle\\Controller\\PageController::showEbookByCategoryAction',)), array('_route' => 'mylibber_backend_showEbookByCategory'));
        }

        // mylibber_backend_searchEbook
        if (rtrim($pathinfo, '/') === '/searchEbook') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'mylibber_backend_searchEbook');
            }

            return array (  '_controller' => 'Mylibber\\MylibBundle\\Controller\\PageController::searchEbookAction',  '_route' => 'mylibber_backend_searchEbook',);
        }

        // MylibberMylibBundle_about
        if ($pathinfo === '/about') {
            return array (  '_controller' => 'Mylibber\\MylibBundle\\Controller\\PageController::aboutAction',  '_route' => 'MylibberMylibBundle_about',);
        }

        // MylibberMylibBundle_contact
        if ($pathinfo === '/contact') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_MylibberMylibBundle_contact;
            }

            return array (  '_controller' => 'Mylibber\\MylibBundle\\Controller\\PageController::contactAction',  '_route' => 'MylibberMylibBundle_contact',);
        }
        not_MylibberMylibBundle_contact:

        // MylibberMylibBundle_book_show
        if (0 === strpos($pathinfo, '/show') && preg_match('#^/show/(?<id>\\d+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_MylibberMylibBundle_book_show;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mylibber\\MylibBundle\\Controller\\BookController::showAction',)), array('_route' => 'MylibberMylibBundle_book_show'));
        }
        not_MylibberMylibBundle_book_show:

        // MylibberMylibBundle_book_add
        if ($pathinfo === '/create') {
            return array (  '_controller' => 'Mylibber\\MylibBundle\\Controller\\BookController::createAction',  '_route' => 'MylibberMylibBundle_book_add',);
        }

        // MylibberMylibBundle_search
        if ($pathinfo === '/bookSearch') {
            return array (  '_controller' => 'Mylibber\\MylibBundle\\Controller\\BookController::bookSearchAction',  '_route' => 'MylibberMylibBundle_search',);
        }

        // MylibberMylibBundle_showByCategory
        if (0 === strpos($pathinfo, '/showByCategory') && preg_match('#^/showByCategory/(?<category>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mylibber\\MylibBundle\\Controller\\BookController::showByCategoryAction',)), array('_route' => 'MylibberMylibBundle_showByCategory'));
        }

        // MylibberMylibBundle_showbook
        if ($pathinfo === '/showbook') {
            return array (  '_controller' => 'Mylibber\\MylibBundle\\Controller\\BookController::showbookAction',  '_route' => 'MylibberMylibBundle_showbook',);
        }

        // MylibberMylibBundle_list
        if (rtrim($pathinfo, '/') === '/list') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'MylibberMylibBundle_list');
            }

            return array (  '_controller' => 'Mylibber\\MylibBundle\\Controller\\BookController::showbookAction',  '_route' => 'MylibberMylibBundle_list',);
        }

        // MylibberMylibBundle_detail
        if (0 === strpos($pathinfo, '/detail') && preg_match('#^/detail/(?<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mylibber\\MylibBundle\\Controller\\BookController::detailAction',)), array('_route' => 'MylibberMylibBundle_detail'));
        }

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'MylibberBackendBundle:Security:login',  '_route' => 'login',);
        }

        // login_check
        if ($pathinfo === '/login_check') {
            return array('_route' => 'login_check');
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
