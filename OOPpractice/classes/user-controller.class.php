<?php

class UserController extends Users
{
    public function createUser($firstname, $lastname)
    {
        $this->setUserStmt($firstname, $lastname);
    }
}
