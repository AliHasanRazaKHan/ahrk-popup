<?php
declare(strict_types=1);

namespace AHRK\Popup\Model;

use Magento\Framework\Model\AbstractModel;
use AHRK\Popup\Model\ResourceModel\Popup as PopupResourceModel;

/**
 * model class for ahrk_popup table
 */
class Popup extends AbstractModel
{
    /**
     * @return void
     */
    protected function _construct(): void
    {
        $this->_init(PopupResourceModel::class);
    }
}
