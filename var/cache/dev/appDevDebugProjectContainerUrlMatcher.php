<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/eshop')) {
            if (0 === strpos($pathinfo, '/eshop/admin/category')) {
                // admin_category_index
                if ('/eshop/admin/category' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\CategoryController::list',  '_route' => 'admin_category_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_admin_category_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_category_index'));
                    }

                    return $ret;
                }
                not_admin_category_index:

                // admin_category_new
                if ('/eshop/admin/category/new' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\CategoryController::addnew',  '_route' => 'admin_category_new',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_admin_category_new;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_category_new'));
                    }

                    return $ret;
                }
                not_admin_category_new:

                // admin_category_remove
                if (0 === strpos($pathinfo, '/eshop/admin/category/remove') && preg_match('#^/eshop/admin/category/remove/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_category_remove')), array (  '_controller' => 'AppBundle\\Controller\\CategoryController::remove',));
                }

                // admin_category_update
                if (0 === strpos($pathinfo, '/eshop/admin/category/update') && preg_match('#^/eshop/admin/category/update/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_category_update')), array (  '_controller' => 'AppBundle\\Controller\\CategoryController::update',));
                }

            }

            // eshop_index
            if ('/eshop' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\FrontController::indexAction',  '_route' => 'eshop_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_eshop_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'eshop_index'));
                }

                return $ret;
            }
            not_eshop_index:

            // eshop_category
            if (0 === strpos($pathinfo, '/eshop/category') && preg_match('#^/eshop/category/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'eshop_category')), array (  '_controller' => 'AppBundle\\Controller\\FrontController::categoryAction',));
            }

            if (0 === strpos($pathinfo, '/eshop/admin/product')) {
                // eshop_admin_product_index
                if ('/eshop/admin/product' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\ProductController::indexAction',  '_route' => 'eshop_admin_product_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_eshop_admin_product_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'eshop_admin_product_index'));
                    }

                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_eshop_admin_product_index;
                    }

                    return $ret;
                }
                not_eshop_admin_product_index:

                // eshop_admin_product_new
                if ('/eshop/admin/product/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\ProductController::newAction',  '_route' => 'eshop_admin_product_new',);
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_eshop_admin_product_new;
                    }

                    return $ret;
                }
                not_eshop_admin_product_new:

                // eshop_admin_product_show
                if (preg_match('#^/eshop/admin/product/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'eshop_admin_product_show')), array (  '_controller' => 'AppBundle\\Controller\\ProductController::showAction',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_eshop_admin_product_show;
                    }

                    return $ret;
                }
                not_eshop_admin_product_show:

                // eshop_admin_product_edit
                if (preg_match('#^/eshop/admin/product/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'eshop_admin_product_edit')), array (  '_controller' => 'AppBundle\\Controller\\ProductController::editAction',));
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_eshop_admin_product_edit;
                    }

                    return $ret;
                }
                not_eshop_admin_product_edit:

                // eshop_admin_product_delete
                if (preg_match('#^/eshop/admin/product/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'eshop_admin_product_delete')), array (  '_controller' => 'AppBundle\\Controller\\ProductController::deleteAction',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_eshop_admin_product_delete;
                    }

                    return $ret;
                }
                not_eshop_admin_product_delete:

            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
