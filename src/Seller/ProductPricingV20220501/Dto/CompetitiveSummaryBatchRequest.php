<?php

namespace SellingPartnerApi\Seller\ProductPricingV20220501\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class CompetitiveSummaryBatchRequest extends BaseDto
{
    protected static array $complexArrayTypes = ['requests' => [CompetitiveSummaryRequest::class]];

    /**
     * @param  CompetitiveSummaryRequest[]  $requests A batched list of `competitiveSummary` requests.
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly ?array $requests = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
