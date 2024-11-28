<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function testAction()
    {

        $posts = array('username' => 'yazan_new', 'contactNum' => +962778383739, 'email' => 'yazanew@gmail.com', 'name' => 'yazan new', 'role' => 'gym admin');

        return view('admin/Admin_profile_page', ['post' => $posts]);
    }
}
