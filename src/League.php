<?php

namespace Acme;

class League
{
    private $name;
    private $teams = [];

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
    public function addTeams(Team $team)
    {
        $this->teams[] = $team;
    }

    public function getTeamsCount()
    {
        return count($this->teams);
    }
}
