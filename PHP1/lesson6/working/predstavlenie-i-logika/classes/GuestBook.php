<?php

require __DIR__ . '/GuestBookRecord.php';

/**
 * Created by PhpStorm.
 * User: User
 * Date: 009 09.01.17
 * Time: 11:18
 */
class GuestBook
{
    protected $file;
    public function __construct($file)
    {
        $this->file = $file;
    }
    public function getAll()
    {
        $data = file($this->file);
        $ret = [];
        foreach ($data as $line) {
            $ret[] = new GuestBookRecord($line);
        }
        return $ret;
    }
}