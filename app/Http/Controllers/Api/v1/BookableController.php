<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\BookableIndexResource;
use App\Http\Resources\BookableShowResource;
use App\Models\Bookable;
use Illuminate\Http\Request;

class BookableController extends Controller
{
    public function index(){
        return new BookableIndexResource(Bookable::all());
    }

    public function show(Request $request, $bookableId){
        return new BookableShowResource(Bookable::findOrFail($bookableId));
    }
}
