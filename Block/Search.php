<?php

namespace Lumenvo\CustomGoogleSearch\Block;

use Magento\Framework\View\Element\Template;
use Magento\Store\Model\StoreManagerInterface;
use Lumenvo\CustomGoogleSearch\Helper\Data as CSE_Data;

class Search extends Template
{

    /**
     * @var StoreManagerInterface
     */
    protected $storeManager;

    protected $dataHelper;

    /**
     * Search constructor.
     * @param StoreManagerInterface $storeManager
     * @param CSE_Data $cseData
     * @param Template\Context $context
     */
    public function __construct(
        StoreManagerInterface $storeManager,
        CSE_Data $cseData,
        Template\Context $context
    )
    {
        parent::__construct($context);
        $this->storeManager = $storeManager;
        $this->dataHelper = $cseData;
    }

    /**
     * Getting the site's base url.
     * @return string
     */
    public function baseUrl()
    {
        return $this->storeManager->getStore()->getBaseUrl();
    }

    /**
     * Results url.
     * @return string
     */
    public function resultsUrl()
    {
        return $this->baseUrl() . '/catalogsearch/result/';
    }

    /**
     * @return string
     */
    public function userId()
    {
        return $this->dataHelper->getUserID();
    }

}