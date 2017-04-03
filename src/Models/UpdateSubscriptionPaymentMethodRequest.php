<?php
/*
 * MundiAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MundiAPILib\Models;

use JsonSerializable;

/**
 * Request for updating a subscription's payment method
 */
class UpdateSubscriptionPaymentMethodRequest implements JsonSerializable
{
    /**
     * The new payment method
     * @required
     * @maps payment_method
     * @var string $paymentMethod public property
     */
    public $paymentMethod;

    /**
     * Credit card's id
     * @required
     * @maps credit_card_id
     * @var string $creditCardId public property
     */
    public $creditCardId;

    /**
     * Credit card's gateway id
     * @required
     * @maps credit_card_gateway_id
     * @var string $creditCardGatewayId public property
     */
    public $creditCardGatewayId;

    /**
     * Credit card data
     * @required
     * @maps credit_card
     * @var CreateCreditCardRequest $creditCard public property
     */
    public $creditCard;

    /**
     * Constructor to set initial or default values of member properties
     * @param string                  $paymentMethod       Initialization value for $this->paymentMethod
     * @param string                  $creditCardId        Initialization value for $this->creditCardId
     * @param string                  $creditCardGatewayId Initialization value for $this->creditCardGatewayId
     * @param CreateCreditCardRequest $creditCard          Initialization value for $this->creditCard
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->paymentMethod       = func_get_arg(0);
            $this->creditCardId        = func_get_arg(1);
            $this->creditCardGatewayId = func_get_arg(2);
            $this->creditCard          = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['payment_method']         = $this->paymentMethod;
        $json['credit_card_id']         = $this->creditCardId;
        $json['credit_card_gateway_id'] = $this->creditCardGatewayId;
        $json['credit_card']            = $this->creditCard;

        return $json;
    }
}