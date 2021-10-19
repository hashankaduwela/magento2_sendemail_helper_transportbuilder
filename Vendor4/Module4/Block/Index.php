<?php
namespace Vendor4\Module4\Block;

class Index extends \Magento\Framework\View\Element\Template
{
    protected $helperData;
	public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
		\Vendor3\Module3\Helper\Data $helperData)
	{
		$this->helperData = $helperData;
		//$this->helperData->sendMail();
		return parent::__construct($context);
	}
   // public function getaaa(){
        //$this->helperData->sendMail();
   // }
 
}