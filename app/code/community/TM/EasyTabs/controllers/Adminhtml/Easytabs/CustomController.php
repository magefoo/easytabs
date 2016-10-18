<?php

class TM_EasyTabs_Adminhtml_Easytabs_CustomController extends Mage_Adminhtml_Controller_Action
{

    protected function _initAction()
    {
        $this->loadLayout();
        $this->_setActiveMenu('easytabs')
            ->_addBreadcrumb(
                Mage::helper('easytabs')->__('easytabs'),
                Mage::helper('easytabs')->__('easytabs')
            );

        return $this;
    }

    public function indexAction()
    {
        // Mage::register('easytabs_collection', $this->_getCollection());
        // echo 'ffdddfff';
        $this->_initAction();
        $this->renderLayout();
    }

}
