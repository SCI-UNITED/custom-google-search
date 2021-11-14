<?php

namespace Lumenvo\CustomGoogleSearch\Block;

use Magento\Framework\View\Element\Template;

class Result extends Template
{

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context
    )
    {
        parent::__construct($context);
    }

    protected function _prepareLayout()
    {
        parent::_prepareLayout();

        $keywords = $this->getRequest()->getParam("q");
        $this->pageConfig->getTitle()->set(__("Search Results For: '".$keywords."'"));

        return $this;
    }

}