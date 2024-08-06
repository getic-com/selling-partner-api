<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\ResponseGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\MessagingV1\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\MessagingV1\Dto\ErrorList;

final class CreateNegativeFeedbackRemovalResponse extends Response
{
    /**
     * @param  ?ErrorList  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?ErrorList $errors = null,
    ) {}
}
