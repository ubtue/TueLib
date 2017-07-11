<?php

/**
 * Generic class for Solr RecordDriver extensions
 *
 * Since multiple inheritance is not allowed in PHP, please use the following
 * class tree structure:
 *
 * VuFind\RecordDriver\SolrDefault
 * VuFind\RecordDriver\SolrMarc
 * TueLib\RecordDriver\SolrDefault
 * TueLib\RecordDriver\SolrMarc
 * <custom>\RecordDriver\SolrDefault
 * <custom>\RecordDriver\SolrMarc
 *
 * ... where <custom> might be krimDok, ixTheo, and so on.
 * So SolrDefault should always inherit from SolrMarc of the top level.
 */

namespace TueLib\RecordDriver;
class SolrDefault extends \VuFind\RecordDriver\SolrMarc implements ServiceLocatorAwareInterface
{
    protected $serviceLocator;

    public function setServiceLocator(ServiceLocatorInterface $serviceLocator)
    {
        $this->serviceLocator = $serviceLocator->getServiceLocator();
    }

    public function getServiceLocator()
    {
        return $this->serviceLocator;
    }
}
