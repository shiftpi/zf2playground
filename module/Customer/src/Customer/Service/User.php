<?php
namespace Customer\Service;

class User
{
    protected $users = array(
        'John Doe',
        'Richard Miles',
        'MrFoo',
    );

    public function getByIdentifier($identifier)
    {
        foreach ($this->users as $user) {
            if (strtolower(str_replace(' ', '.', $user)) === $identifier) {
                return $user;
            }
        }

        return null;
    }
}