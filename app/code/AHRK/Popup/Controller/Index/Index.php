<?php

namespace AHRK\Popup\Controller\Index;


use Magento\Framework\App\ActionInterface;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;

/**
 * action class for rendering blank page
 */
class Index implements ActionInterface
{
    /**
     * @param PageFactory $pageFactory
     */
    public function __construct(
        private PageFactory $pageFactory
    ) {
    }

    /**
     * @return Page|ResultInterface
     */
    public function execute()
    {
        return $this->pageFactory->create();
    }
}
