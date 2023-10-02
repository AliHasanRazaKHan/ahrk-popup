<?php
declare(strict_types=1);

namespace AHRK\Popup\Model\ResourceModel\Popup;

use AHRK\Popup\Model\ResourceModel\Popup as PopupResourceModel;
use AHRK\Popup\Model\Popup as PopupModel;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

/**
 * Collection class for ahrk_popup table
 */
class Collection extends AbstractCollection
{

    /**
     * @return void
     */
    protected function _construct(): void
    {
        $this->_init(PopupModel::class, PopupResourceModel::class);
    }
}
