<?php

namespace SellingPartnerApi\Seller\ProductPricingV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class SellerSkuIdentifier extends BaseDto
{
    /**
     * @param  string  $marketplaceId A marketplace identifier.
     * @param  string  $sellerId The seller identifier submitted for the operation.
     * @param  string  $sellerSku The seller stock keeping unit (SKU) of the item.
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly string $marketplaceId,
        public readonly string $sellerId,
        public readonly string $sellerSku,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
