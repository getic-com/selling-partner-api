<?php

namespace SellingPartnerApi\Seller\ProductPricingV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ItemOffersRequest extends BaseDto
{
    /**
     * @param  string  $uri The resource path of the operation you are calling in batch without any query parameters.
     *
     * If you are calling `getItemOffersBatch`, supply the path of `getItemOffers`.
     *
     * **Example:** `/products/pricing/v0/items/B000P6Q7MY/offers`
     *
     * If you are calling `getListingOffersBatch`, supply the path of `getListingOffers`.
     *
     * **Example:** `/products/pricing/v0/listings/B000P6Q7MY/offers`
     * @param  string  $method The HTTP method associated with the individual APIs being called as part of the batch request.
     * @param  string  $marketplaceId A marketplace identifier. Specifies the marketplace for which prices are returned.
     * @param  string  $itemCondition Filters the offer listings to be considered based on item condition. Possible values: New, Used, Collectible, Refurbished, Club.
     * @param  ?array  $headers A mapping of additional HTTP headers to send/receive for the individual batch request.
     * @param  ?string  $customerType Indicates whether to request Consumer or Business offers. Default is Consumer.
     */
    public function __construct(
        public readonly string $uri,
        public readonly string $method,
        public readonly string $marketplaceId,
        public readonly string $itemCondition,
        public readonly ?array $headers = null,
        public readonly ?string $customerType = null,
    ) {
    }
}
