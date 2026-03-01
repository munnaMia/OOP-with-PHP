<?php
abstract class PaymentGateway
{
    protected $amount;

    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    // Every gateway MUST have its own way to send the money
    abstract public function execute();
}

class PayPal extends PaymentGateway
{
    public function execute()
    {
        return "Redirecting to PayPal to pay $" . $this->amount;
    }
}

class CreditCard extends PaymentGateway
{
    public function execute()
    {
        return "Charging credit card for $" . $this->amount;
    }
}
