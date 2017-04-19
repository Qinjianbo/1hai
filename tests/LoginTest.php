<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LoginTest extends TestCase
{
    /**
     * Login test
     *
     * @return void
     */
    public function testLogin()
    {
	    $this->get('/api/user/login?type=mobile&username=12345678901&password=1234ll');
    }
}
