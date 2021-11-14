<?php

namespace Lumenvo\CustomGoogleSearch\Helper;

use Magento\Framework\App\Helper\AbstractHelper;

class Data extends AbstractHelper
{

    #USER CLIENT ID
    const CSE_CLIENT_ID = "lumenvo_custom_google_search/general/search_engine_id";


    public function __construct(
        \Magento\Framework\App\Helper\Context $context

    )
    {

        parent::__construct($context);
    }

    public function getUserID()
    {
        return $this->scopeConfig->getValue(
            self::CSE_CLIENT_ID,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }
}