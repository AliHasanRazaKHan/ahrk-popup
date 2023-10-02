<?php
declare(strict_types=1);

namespace AHRK\Popup\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

/**
 *ResourceModel class for ahrk_popup table
 */
class Popup extends AbstractDb
{

    /**
     * @const
     */
    private const TABLE_NAME = 'ahrk_popup';
    /**
     * @const
     */
    private const  FIELD_NAME = 'popup_id';

    /**
     * @return void
     */
    protected function _construct(): void
    {
        $this->_init(self::TABLE_NAME, self::FIELD_NAME);
    }
}
