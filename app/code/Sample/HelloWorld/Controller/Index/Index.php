<?php
/**
 * Sample HelloWorld Controller
 */
namespace Sample\HelloWorld\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\Result\Raw;
use Magento\Framework\Controller\Result\RawFactory;

class Index extends Action
{
    /**
     * @var RawFactory
     */
    protected $resultRawFactory;

    /**
     * @param Context $context
     * @param RawFactory $resultRawFactory
     */
    public function __construct(
        Context $context,
        RawFactory $resultRawFactory
    ) {
        $this->resultRawFactory = $resultRawFactory;
        parent::__construct($context);
    }

    /**
     * Execute action
     *
     * @return Raw
     */
    public function execute()
    {
        /** @var Raw $result */
        $result = $this->resultRawFactory->create();
        $result->setContents('<h1>Hello World from Sample Extension!</h1><p>This is a test Magento module.</p>');
        return $result;
    }
}
