# magento2_sendemail_helper_transportbuilder

https://www.rakeshjesadiya.com/send-mail-from-custom-module-magento-2/

Here we have defined an area as frontend \Magento\Framework\App\Area::AREA_FRONTEND
$email is your receiver email id.
if you want to send multiple email address, pass email id as an array in addBcc() method.

Send email using below function in your template or block file.

$this->helper(‘Rbj\SendEmail\Helper\Data’)->sendMail();
