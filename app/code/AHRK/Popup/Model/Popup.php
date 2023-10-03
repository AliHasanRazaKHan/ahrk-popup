<?php
declare(strict_types=1);

namespace AHRK\Popup\Model;

use AHRK\Popup\Api\Data\PopupInterface;
use AHRK\Popup\Model\ResourceModel\Popup as PopupResourceModel;
use Magento\Framework\Model\AbstractModel;

/**
 * model class for ahrk_popup table
 */
class Popup extends AbstractModel implements PopupInterface
{
    private const POPUP_ID = 'popup_id';
    private const NAME = 'name';
    private const CONTENT = 'content';
    private const CREATED_AT = 'created_at';
    private const UPDATED_AT = 'updated_at';
    private const IS_ACTIVE = 'is_active';
    private const TIMEOUT = 'timeout';


    /**
     * @return void
     */
    protected function _construct(): void
    {
        $this->_eventPrefix = 'ahrk_popup';
        $this->_eventObject='popup';
        $this->_idFieldName = 'popup_id';
        $this->_init(PopupResourceModel::class);
    }

    public function getPopupId(): int
    {
        return (int) $this->getData(self::POPUP_ID);
    }

    public function setPopupId(int $popupId): void
    {
        $this->setData(self::POPUP_ID, $popupId);
    }

    public function getName(): string
    {
        return (string) $this->getData(self::NAME);
    }

    public function setName(string $name): void
    {
        $this->setData(self::NAME, $name);
    }

    public function getContent(): string
    {
        return (string) $this->getData(self::CONTENT);
    }

    public function setContent(string $content): void
    {
        $this->setData(self::CONTENT, $content);
    }

    public function getCreatedAt(): string
    {
        return (string) $this->getData(self::CREATED_AT);
    }

    public function setCreatedAt(string $createdAt):void
    {
        $this->setData(self::CREATED_AT, $createdAt);
    }

    public function getUpdatedAt(): string
    {
        return (string) $this->getData(self::UPDATED_AT);
    }

    public function setUpdatedAt(string $updatedAt): void
    {
        $this->setData(self::UPDATED_AT, $updatedAt);
    }

    public function getIsActive(): bool
    {
        return (bool) $this->getData(self::IS_ACTIVE);
    }

    public function setIsActive(bool $isActive){
        $this->setData(self::IS_ACTIVE, $isActive);
    }
    public function getTimeout(): int
    {
        return (int) $this->getData(self::TIMEOUT);
    }

    public function setTimeout(int $timeout): void
    {
        $this->setData(self::TIMEOUT, $timeout);
    }

}
