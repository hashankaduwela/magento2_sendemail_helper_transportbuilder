<?php
namespace Vendor4\Module4\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;
	protected $helperData;
	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory,
		\Vendor3\Module3\Helper\Data $helperData)
	{
		$this->helperData = $helperData;
		$this->_pageFactory = $pageFactory;
		return parent::__construct($context);
	}

	public function execute()
	{
		//$this->helperData->sendMail();
		return $this->_pageFactory->create();
	}
}
