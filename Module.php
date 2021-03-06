<?php
/**
 * ZF2 module with customized functions (especially proxy functions)
 *
 * @category    VuFind2
 * @package     Module
 * @author      Oliver Obenland <oliver.obenland@ub.uni-tuebingen.de>
 * @copyright   2015-2017 Universtitätsbibliothek Tübingen
 */
namespace TueLib;
use Zend\ModuleManager\ModuleManager,
    Zend\Mvc\MvcEvent;

/**
 * Template for ZF2 module for storing local overrides.
 *
 * @category VuFind2
 * @package  Module
 * @author   Demian Katz <demian.katz@villanova.edu>
 * @license  http://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @link     https://github.com/dmj/vf2-proxy
 */
class Module
{
    /**
     * Get module configuration
     *
     * @return array
     */
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    /**
     * Get autoloader configuration
     *
     * @return array
     */
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    /**
     * Initialize the module
     *
     * @param ModuleManager $m Module manager
     *
     * @return void
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function init(ModuleManager $m)
    {
    }

    /**
     * Bootstrap the module
     *
     * @param MvcEvent $e Event
     *
     * @return void
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function onBootstrap(MvcEvent $e)
    {
    }
}
