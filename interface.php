<?php

class CampaignMonitor
{
    public function subscribe($email)
    {
        die('Subscribing with CM');
    }
}

class Drip
{
    public function subscribe($email)
    {
        die('Subscribing with Drip');
    }
}

class NewsLetterSubscriptionController
{
    public function store(CampaignMonitor $newsletter)
    {
        $email = 'joe@example.com';

        $newsletter->subscribe($email);
    }
}

$controller = new NewsLetterSubscriptionController();

$controller->store(new CampaignMonitor());