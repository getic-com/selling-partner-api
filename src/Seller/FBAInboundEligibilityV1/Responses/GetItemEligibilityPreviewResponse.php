<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\ResponseGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundEligibilityV1\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\FBAInboundEligibilityV1\Dto\ErrorList;
use SellingPartnerApi\Seller\FBAInboundEligibilityV1\Dto\ItemEligibilityPreview;

final class GetItemEligibilityPreviewResponse extends Response
{
    /**
     * @param  ?ItemEligibilityPreview  $payload  The response object which contains the ASIN, marketplaceId if required, eligibility program, the eligibility status (boolean), and a list of ineligibility reason codes.
     * @param  ?ErrorList  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?ItemEligibilityPreview $payload = null,
        public readonly ?ErrorList $errors = null,
    ) {}
}
