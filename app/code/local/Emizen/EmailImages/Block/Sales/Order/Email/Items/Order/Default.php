<?php
class Emizen_EmailImages_Block_Sales_Order_Email_Items_Order_Default extends Mage_Sales_Block_Order_Email_Items_Order_Default
{
	public function productimage($productId)
	{
		return Mage::helper('catalog/image')->init(Mage::getModel('catalog/product')->load($productId), 'small_image')->resize(Mage::getStoreConfig('email_images/general/image_resize'));
	}
}
			