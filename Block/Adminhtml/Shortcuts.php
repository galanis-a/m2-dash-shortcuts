<?php

namespace Gladd\DashboardShortcuts\Block\Adminhtml;

use Magento\Backend\Block\Template\Context;
use Magento\Framework\AuthorizationInterface;
use Magento\Backend\Block\Template;

class Shortcuts extends Template
{

    /**
     * @var AuthorizationInterface
     */
    private $authorization;

    public function __construct(
        Context $context,
        AuthorizationInterface $authorization,
        array $data = []
    ){
        parent::__construct($context, $data);
        $this->authorization = $authorization;
    }

    public function canShowCreateOrderButton() {
        return $this->authorization->isAllowed('Magento_Sales::create');
    }

}