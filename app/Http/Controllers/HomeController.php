<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class HomeController extends BaseController
{

	public function index()
	{

		$title = 'Laravel';
        $product = Product::all();


        return view('pages.home', compact ('title','product'));
	}

    public function add()
	{
		$title = 'Laravel';
        $product = Product::all();

        return view('pages.add', compact ('title','product'));
	}

    public function save(Request $request)
    {
        $data               = new Product();
        $data->name         = $request->name;
        $data->price        =  $request->price;
        $data->details      = $request->details;
        $data->publish      = $request->publish;
        $data->save();

        return redirect('home');
    }

    public function edit(Request $request)
	{
		$title = 'Laravel';
        $product = Product::where('id', $request->id)->first();

        return view('pages.edit', compact ('title','product'));
	}

    public function update(Request $request)
    {
        $data               = Product::where('id', $request->id)->first();
        $data->name         = $request->name;
        $data->price        = $request->price;
        $data->details      = $request->details;
        $data->publish      = $request->publish;
        $data->save();

        return redirect('home');
    }

    public function show(Request $request)
	{
		$title = 'Laravel';
        $product = Product::where('id', $request->id)->first();

        return view('pages.show', compact ('title','product'));
	}

    public function delete($id)
    {
        $product = Product::where('id', $id)->delete();

        return redirect('home');
    }

    public function search(Request $request)
    {
        $title = 'Laravel';

        $name = $request->search;

        $product = Product::where('name', 'LIKE', '%' . $name . '%')
                            ->orWhere('details', 'LIKE', '%' . $name . '%')
                            ->orWhere('price', $name)
                            ->orWhere('publish',$name)
                            ->get();

        return view('pages.home', compact('title','product'));
    }

}
