<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Aquí puedes obtener los productos desde la base de datos si es necesario
        return view('products.index');
    }

    public function create()
    {
        return view('products.create');
    }

    public function edit($id)
    {
        // Aquí puedes obtener el producto específico desde la base de datos si es necesario
        return view('products.edit', compact('id'));
    }
}

