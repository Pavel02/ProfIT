<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 009 09.01.17
 * Time: 11:35
 */
class GuestBookRecord
{
    protected $message;
    public function __construct($message)
    {
        $this->message = $message;
    }
    public function getMessage()
    {
        return $this->message;
    }
}