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

        elseif (0 === strpos($pathinfo, '/accounts')) {
            // accounts
            if ('/accounts' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\AccountController::accountsAction',  '_route' => 'accounts',);
            }

            // account
            if (preg_match('#^/accounts/(?P<name>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'account')), array (  '_controller' => 'AppBundle\\Controller\\AccountController::accountAction',));
            }

            // account_by_key
            if (0 === strpos($pathinfo, '/accounts/key') && preg_match('#^/accounts/key/(?P<key>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'account_by_key')), array (  '_controller' => 'AppBundle\\Controller\\AccountController::accountByKeyAction',));
            }

            // account_actions
            if (preg_match('#^/accounts/(?P<name>[^/]++)/actions$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'account_actions')), array (  '_controller' => 'AppBundle\\Controller\\AccountController::accountActionsAction',));
            }

            // account_actions_to
            if (preg_match('#^/accounts/(?P<name>[^/]++)/actions/to$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'account_actions_to')), array (  '_controller' => 'AppBundle\\Controller\\AccountController::accountActionsToAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/actions')) {
            // actions
            if ('/actions' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ActionController::actionsAction',  '_route' => 'actions',);
            }

            // action
            if (preg_match('#^/actions/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'action')), array (  '_controller' => 'AppBundle\\Controller\\ActionController::actionAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/blocks')) {
            // blocks
            if ('/blocks' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\BlockController::blocksAction',  '_route' => 'blocks',);
            }

            // block
            if (preg_match('#^/blocks/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'block')), array (  '_controller' => 'AppBundle\\Controller\\BlockController::blockAction',));
            }

            // block_by_id
            if (0 === strpos($pathinfo, '/blocks/id') && preg_match('#^/blocks/id/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'block_by_id')), array (  '_controller' => 'AppBundle\\Controller\\BlockController::blockbyIdAction',));
            }

            // block_transactions
            if (preg_match('#^/blocks/(?P<id>[^/]++)/transactions$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'block_transactions')), array (  '_controller' => 'AppBundle\\Controller\\BlockController::blockTransactionsAction',));
            }

        }

        // bps
        if (0 === strpos($pathinfo, '/bps') && preg_match('#^/bps/(?P<url>.+)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'bps')), array (  '_controller' => 'AppBundle\\Controller\\ProducerController::bpsAction',));
        }

        if (0 === strpos($pathinfo, '/stats')) {
            // stats
            if ('/stats' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::statsAction',  '_route' => 'stats',);
            }

            // stats_actions
            if (0 === strpos($pathinfo, '/stats/actions') && preg_match('#^/stats/actions/(?P<hours>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'stats_actions')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::statsActionsAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/transactions')) {
            // transactions
            if ('/transactions' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\TransactionController::transactionsAction',  '_route' => 'transactions',);
            }

            // transaction
            if (preg_match('#^/transactions/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'transaction')), array (  '_controller' => 'AppBundle\\Controller\\TransactionController::transactionAction',));
            }

            // transactions_action
            if (preg_match('#^/transactions/(?P<id>[^/]++)/actions$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'transactions_action')), array (  '_controller' => 'AppBundle\\Controller\\TransactionController::blockTransactionsAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/tweets')) {
            // tweets
            if ('/tweets' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\TwitterController::tweetsAction',  '_route' => 'tweets',);
            }

            // tweets_stats
            if ('/tweets/stats' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\TwitterController::tweetsStatsAction',  '_route' => 'tweets_stats',);
            }

            // tweets_user
            if (preg_match('#^/tweets/(?P<username>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tweets_user')), array (  '_controller' => 'AppBundle\\Controller\\TwitterController::tweetsUserAction',));
            }

            // tweets_user_avatar
            if (preg_match('#^/tweets/(?P<username>[^/]++)/avatar\\.png$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tweets_user_avatar')), array (  '_controller' => 'AppBundle\\Controller\\TwitterController::tweetsUserAvatarAction',));
            }

            // tweets_user_stats
            if (preg_match('#^/tweets/(?P<username>[^/]++)/stats$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tweets_user_stats')), array (  '_controller' => 'AppBundle\\Controller\\TwitterController::tweetsUserStatsAction',));
            }

        }

        // votes
        if (0 === strpos($pathinfo, '/votes') && preg_match('#^/votes/(?P<producer>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'votes')), array (  '_controller' => 'AppBundle\\Controller\\VoteController::votesAction',));
        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
