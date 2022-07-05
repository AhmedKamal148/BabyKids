<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\AdminHomeInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminHomeController extends Controller
{
    public $adminHomeInterface ;
    public function __construct(AdminHomeInterface $adminHomeInterface)
    {
        $this->adminHomeInterface = $adminHomeInterface;
    }

    public  function  index()
    {
        return $this->adminHomeInterface->index();
    }
}
