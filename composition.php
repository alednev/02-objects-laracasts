<?php

class Subscription
{
    private Gateway $gateway;

    public function __construct(Gateway $gateway)
    {

        $this->gateway = $gateway;
    }

    public function create()
    {
        
    }

    public function cancel()
    {
        $customer = $this->gateway->findCustomer();
        $customerSubscription = $this->gateway->findSubscriptionByCustomer($customer);
    }

    public function invoice()
    {
        
    }

    public function swap($newPlan)
    {
        
    }
}

interface Gateway
{
    public function findCustomer();

    public function findSubscriptionByCustomer();
}

class StripeGateway implements Gateway
{
    public function findCustomer()
    {
        
    }

    public function findSubscriptionByCustomer()
    {

    }
}

class BraintreeGateway implements Gateway
{
    public function findCustomer()
    {

    }

    public function findSubscriptionByCustomer()
    {

    }
}

(new Subscription(new BraintreeGateway()));