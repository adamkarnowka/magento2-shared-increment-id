<?php

namespace Albedo\SharedIncrementId\Plugin\Magento\SalesSequence\Model;

class ManagerSharedIncrementId{

    const SALES_SHARED_INCREMENT_ID_ENABLED_FOR_ENTITIES = 'sales/shared_increment_id/enabled_for_entities';

    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    protected $scopeConfig;

    /**
     * ManagerSharedIncrementId constructor.
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    )
    {
        $this->scopeConfig = $scopeConfig;
    }

    public function beforeGetSequence($subject, $entityType, $storeId){
        $handledEntities = $this->scopeConfig->getValue(self::SALES_SHARED_INCREMENT_ID_ENABLED_FOR_ENTITIES);
        if(empty($handledEntities)) {
            return [$entityType, $storeId];
        }

        $handledEntitiesArray = explode(',', $handledEntities);
        if(in_array($entityType, $handledEntitiesArray)){
            return [$entityType, 0];
        }

        return [$entityType, $storeId];
    }
}