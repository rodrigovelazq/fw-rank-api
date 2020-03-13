<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository;

class RepositoryController extends Controller
{
    public function index(){
        return Repository::all();
    }
}
