<?php

class Subscription
{
    private StripeGateway $gateway;

    public function __construct(StripeGateway $gateway)
    {

        $this->gateway = $gateway;
    }

    public function create()
    {
        
    }

    public function cancel()
    {
        $this->gateway->findStripeCustomer();
    }

    public function invoice()
    {
        
    }

    public function swap($newPlan)
    {
        
    }
}

class StripeGateway
{
    public function findStripeCustomer()
    {
        
    }

    public function findStripeSubsctiptionByCustomer()
    {

    }
}