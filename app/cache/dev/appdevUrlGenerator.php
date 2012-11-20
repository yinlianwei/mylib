<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Symfony\Component\HttpKernel\Log\LoggerInterface;

/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        '_welcome' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_welcome',    ),  ),),
        '_demo_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/secured/login',    ),  ),),
        '_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/secured/login_check',    ),  ),),
        '_demo_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/secured/logout',    ),  ),),
        'acme_demo_secured_hello' => array (  0 =>   array (  ),  1 =>   array (    'name' => 'World',    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/secured/hello',    ),  ),),
        '_demo_secured_hello' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/demo/secured/hello',    ),  ),),
        '_demo_secured_hello_admin' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/demo/secured/hello/admin',    ),  ),),
        '_demo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/',    ),  ),),
        '_demo_hello' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/demo/hello',    ),  ),),
        '_demo_contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/contact',    ),  ),),
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),),
        '_profiler_import' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/import',    ),  ),),
        '_profiler_export' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '.txt',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]+',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler/export',    ),  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),),
        '_profiler_redirect' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',    'route' => '_profiler_search_results',    'token' => 'empty',    'ip' => '',    'url' => '',    'method' => '',    'limit' => '10',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),),
        '_configurator_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/',    ),  ),),
        '_configurator_step' => array (  0 =>   array (    0 => 'index',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'index',    ),    1 =>     array (      0 => 'text',      1 => '/_configurator/step',    ),  ),),
        '_configurator_final' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/final',    ),  ),),
        'mylibber_backend_hello' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Mylibber\\BackendBundle\\Controller\\DefaultController::helloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),),
        'mylibber_backend_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Mylibber\\BackendBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/',    ),  ),),
        'mylibber_backend_addbook' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Mylibber\\BackendBundle\\Controller\\BookController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/addbook',    ),  ),),
        'mylibber_backend_addnew' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Mylibber\\BackendBundle\\Controller\\BookController::addnewAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/addnew',    ),  ),),
        'mylibber_backend_deletebook' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Mylibber\\BackendBundle\\Controller\\BookController::deletebookAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/deltebook',    ),  ),),
        'mylibber_backend_getBookInfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MylibberBackendBundle:getFromDouban:getBookInfo',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/getBookInfo',    ),  ),),
        'mylibber_backend_histbook' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Mylibber\\BackendBundle\\Controller\\BookController::histAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/histbook',    ),  ),),
        'mylibber_backend_config' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Mylibber\\BackendBundle\\Controller\\BookController::configAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/config',    ),  ),),
        'mylibber_backend_addCategory' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Mylibber\\BackendBundle\\Controller\\CategoryController::addCategoryAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/addCategory',    ),  ),),
        'mylibber_backend_addCategoryNew' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Mylibber\\BackendBundle\\Controller\\CategoryController::addCategoryNewAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/addCategoryNew',    ),  ),),
        'mylibber_backend_deleteCategory' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Mylibber\\BackendBundle\\Controller\\CategoryController::deleteCategoryAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/deleteCategory',    ),  ),),
        'mylibber_backend_usermanage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Mylibber\\BackendBundle\\Controller\\BookController::usermanageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/usermanage',    ),  ),),
        'mylibber_backend_addUser' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Mylibber\\BackendBundle\\Controller\\UserController::addUserAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/addUser',    ),  ),),
        'mylibber_backend_addUserNew' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Mylibber\\BackendBundle\\Controller\\UserController::addUserNewAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/addUserNew',    ),  ),),
        'mylibber_backend_deleteUser' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Mylibber\\BackendBundle\\Controller\\UserController::deleteUserAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/deleteUser',    ),  ),),
        'mylibber_backend_updateUserForm' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Mylibber\\BackendBundle\\Controller\\UserController::updateUserFormAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/updateUserForm',    ),  ),),
        'mylibber_backend_updateUser' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Mylibber\\BackendBundle\\Controller\\UserController::updateUserAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/updateUser',    ),  ),),
        'mylibber_backend_borrbook' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Mylibber\\BackendBundle\\Controller\\BorrController::borrAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/borrbook',    ),  ),),
        'mylibber_backend_borrform' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Mylibber\\BackendBundle\\Controller\\BorrController::borrFormAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/borrForm',    ),  ),),
        'mylibber_backend_newBorrBook' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Mylibber\\BackendBundle\\Controller\\BorrController::newBorrBookAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/newBorrBook',    ),  ),),
        'mylibber_backend_borrList' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Mylibber\\BackendBundle\\Controller\\BorrController::borrListAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/borrList',    ),  ),),
        'mylibber_backend_borrSearchList' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Mylibber\\BackendBundle\\Controller\\BorrController::borrSearchListAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/borrSearchList',    ),  ),),
        'mylibber_backend_isbnBorrList' => array (  0 =>   array (    0 => 'bookIsbn',  ),  1 =>   array (    '_controller' => 'Mylibber\\BackendBundle\\Controller\\BorrController::isbnBorrListAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'bookIsbn',    ),    1 =>     array (      0 => 'text',      1 => '/admin/isbnBorrList',    ),  ),),
        'mylibber_backend_giveBack' => array (  0 =>   array (    0 => 'bookIsbn',  ),  1 =>   array (    '_controller' => 'Mylibber\\BackendBundle\\Controller\\BookController::giveBackAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'bookIsbn',    ),    1 =>     array (      0 => 'text',      1 => '/admin/giveBack',    ),  ),),
        'mylibber_backend_addebookform' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Mylibber\\BackendBundle\\Controller\\EbookController::addebookformAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/addebookform',    ),  ),),
        'mylibber_backend_addebook' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Mylibber\\BackendBundle\\Controller\\EbookController::addebookAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/addebook',    ),  ),),
        'mylibber_backend_showebook' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Mylibber\\BackendBundle\\Controller\\EbookController::showebookAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/showebook',    ),  ),),
        'mylibber_backend_deleteebook' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Mylibber\\BackendBundle\\Controller\\EbookController::deleteebookAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/deleteebook',    ),  ),),
        'mylibber_mylib_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Mylibber\\MylibBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),),
        'MylibberMylibBundle_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Mylibber\\MylibBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),),
        'mylibberMulibBUndle_ebook' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Mylibber\\MylibBundle\\Controller\\PageController::ebookAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ebook',    ),  ),),
        'mylibber_backend_showEbookByCategory' => array (  0 =>   array (    0 => 'category',  ),  1 =>   array (    '_controller' => 'Mylibber\\MylibBundle\\Controller\\PageController::showEbookByCategoryAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'category',    ),    1 =>     array (      0 => 'text',      1 => '/showEbookByCategory',    ),  ),),
        'mylibber_backend_searchEbook' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Mylibber\\MylibBundle\\Controller\\PageController::searchEbookAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/searchEbook/',    ),  ),),
        'MylibberMylibBundle_about' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Mylibber\\MylibBundle\\Controller\\PageController::aboutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/about',    ),  ),),
        'MylibberMylibBundle_contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Mylibber\\MylibBundle\\Controller\\PageController::contactAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contact',    ),  ),),
        'MylibberMylibBundle_book_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Mylibber\\MylibBundle\\Controller\\BookController::showAction',  ),  2 =>   array (    '_method' => 'GET',    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/show',    ),  ),),
        'MylibberMylibBundle_book_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Mylibber\\MylibBundle\\Controller\\BookController::createAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/create',    ),  ),),
        'MylibberMylibBundle_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Mylibber\\MylibBundle\\Controller\\BookController::bookSearchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/bookSearch',    ),  ),),
        'MylibberMylibBundle_showByCategory' => array (  0 =>   array (    0 => 'category',  ),  1 =>   array (    '_controller' => 'Mylibber\\MylibBundle\\Controller\\BookController::showByCategoryAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'category',    ),    1 =>     array (      0 => 'text',      1 => '/showByCategory',    ),  ),),
        'MylibberMylibBundle_showbook' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Mylibber\\MylibBundle\\Controller\\BookController::showbookAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/showbook',    ),  ),),
        'MylibberMylibBundle_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Mylibber\\MylibBundle\\Controller\\BookController::showbookAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/list/',    ),  ),),
        'MylibberMylibBundle_detail' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Mylibber\\MylibBundle\\Controller\\BookController::detailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/detail',    ),  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MylibberBackendBundle:Security:login',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }
}
