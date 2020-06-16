<?php

namespace Albedo\SharedIncrementId\Model;

class EntityTypes implements \Magento\Framework\Option\ArrayInterface {

    protected $options;

    public function toOptionArray()
    {
        if ($this->options === null) {
            $options = [
                [
                    'label' => __('Order'),
                    'value' => 'order'
                ],
                [
                    'label' => __('Invoice'),
                    'value' => 'invoice'
                ],
                [
                    'label' => __('Credit Memo'),
                    'value' => 'creditmemo'
                ],
                [
                    'label' => __('Shipment'),
                    'value' => 'shipment'
                ],
                [
                    'label' => __('RMA Item'),
                    'value' => 'rma_item'
                ]

            ];

            $this->options = $options;
        }

        return $this->options;
    }

}