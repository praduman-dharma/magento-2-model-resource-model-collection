<?php

namespace Conceptive\Commerce\Model;

use Magento\Framework\Model\AbstractModel;
use Conceptive\Commerce\Model\ResourceModel\Car as ResourceModel;

class Car extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }
}