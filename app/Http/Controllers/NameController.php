<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Factory as Faker;

class NameController extends Controller
{
    public function index()
    {
        return view('name');
    }


    public function generateRandomName()
    {
        $faker = Faker::create();
        $randomName = $faker->name;

        return response()->json(['name' => $randomName]);
    }
}
