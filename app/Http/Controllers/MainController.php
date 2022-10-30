<?php

namespace App\Http\Controllers;
use App\Models\Phonebook;

use Illuminate\Http\Request;

class MainController extends Controller
{
public function index()
{
   // $users = Phonebook::all();  вывод всей инфы из модели Phonebook
   // $users = Phonebook::orderBy('name')->get(); получить всех отсортированных пользователей по name
   $users = Phonebook::orderBy('name')->paginate(10); //получить только первые 10 пользователей
    return view('home', compact('users'));
}
public function search(Request $request)
{
$s = $request->s; 
$users = Phonebook::where('name', 'LIKE', "%{$s}%")->orderBy('name')->paginate(10);
return view('home', compact('users'));
}
}
