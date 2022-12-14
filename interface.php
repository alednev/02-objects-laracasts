<?php

interface Newsletter
{
    public function subscribe($email);


}

class CampaignMonitor implements Newsletter
{
    public function subscribe($email)
    {
        die('Subscribing with CM');
    }
}

class Drip implements Newsletter
{
    public function subscribe($email)
    {
        die('Subscribing with Drip');
    }
}

class NewsLetterSubscriptionController
{
    public function store(Newsletter $newsletter)
    {
        $email = 'joe@example.com';

        $newsletter->subscribe($email);
    }
}

$controller = new NewsLetterSubscriptionController();

$controller->store(new Drip());