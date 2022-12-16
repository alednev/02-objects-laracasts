<?php

class MaximumMembersReached extends Exception
{
    protected $message = 'You can not add more than 3 team members';
}

class Member
{
    public string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}

class Team
{
    protected $members = [];

    public function add(Member $member)
    {
        if (count($this->members)) {
            throw new MaximumMembersReached();
        }
        $this->members[] = $member;
    }

    public function members()
    : array
    {
        return $this->members;
    }
}

class TeamMemberController
{
    public function store()
    {
        $team = new Team; // has a maximum of three members

        try {
            $team->add(new Member('Jane Doe'));
            $team->add(new Member('John Doe'));
            $team->add(new Member('Frank Doe'));
            $team->add(new Member('Susan Doe'));

            var_dump($team->members());
        } catch (MaximumMembersReached $e) {
            var_dump($e->getMessage());
        }
    }
}

(new TeamMemberController())->store();