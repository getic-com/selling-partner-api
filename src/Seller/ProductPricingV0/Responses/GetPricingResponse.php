<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\ResponseGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ProductPricingV0\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\ProductPricingV0\Dto\ErrorList;
use SellingPartnerApi\Seller\ProductPricingV0\Dto\Price;

final class GetPricingResponse extends Response
{
    protected static array $complexArrayTypes = ['payload' => Price::class];

    /**
     * @param  Price[]|null  $payload
     * @param  ?ErrorList  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?array $payload = null,
        public readonly ?ErrorList $errors = null,
    ) {}
}
