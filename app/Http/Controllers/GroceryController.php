<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grocery;

class GroceryController extends Controller
{
    public function index() {
        // Load all columns in descending order based on the 'id' column.
        $groceries = Grocery::orderBy('id', 'desc')->get();
        
        // Return data as JSON
        return response()->json($groceries);
        }
}
