<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laratrust, DataTables, Lang;
use App\Models\Master\Category;

class CategoryController extends Controller
{
    public function index()
    {
        if (!Laratrust::isAbleTo('view-category')) return abort(404);

        return view('master.category.index');
    }

    public function data()
    {
        if (!Laratrust::isAbleTo('view-category')) return abort(404);

        $categories = Category::select('id', 'name');

        return DataTables::of($categories)
            ->addColumn('action', function($category) {
                $edit = '<a href="' . route('master.category.edit', $category->id) . '" class="btn btn-sm btn-clean btn-icon btn-icon-md btn-tooltip" title="' . Lang::get('Edit') . '"><i class="la la-edit"></i></a>';
                $delete = '<a href="#" data-href="' . route('master.category.destroy', $category->id) . '" class="btn btn-sm btn-clean btn-icon btn-icon-md btn-tooltip" title="' . Lang::get('Delete') . '" data-toggle="modal" data-target="#modal-delete" data-key="' . $category->name . '"><i class="la la-trash"></i></a>';

                return (Laratrust::isAbleTo('update-category') ? $edit : '') . (Laratrust::isAbleTo('delete-category') ? $delete : '');
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function create()
    {
        if (!Laratrust::isAbleTo('create-category')) return abort(404);

        return view('master.category.create');
    }

    public function store(Request $request)
    {
        if (!Laratrust::isAbleTo('create-category')) return abort(404);

        $this->validate($request, [
            'nama' => ['required', 'string', 'max:255'],
        ]);

        $category = new Category;
        $category->name = $request->nama;
        $category->save();

        $message = Lang::get('Category') . ' \'' . $category->name . '\' ' . Lang::get('successfully created.');
        return redirect()->route('master.category.index')->with('status', $message);
    }

    public function edit($id)
    {
        if (!Laratrust::isAbleTo('update-category')) return abort(404);

        $category = Category::select('id', 'name')->findOrFail($id);

        return view('master.category.edit', compact('category'));
    }

    public function update($id, Request $request)
    {
        if (!Laratrust::isAbleTo('update-category')) return abort(404);

        $category = Category::findOrFail($id);

        $this->validate($request, [
            'nama' => ['required', 'string', 'max:255'],
        ]);

        $category->name = $request->nama;
        $category->save();

        $message = Lang::get('Category') . ' \'' . $category->name . '\' ' . Lang::get('successfully updated.');
        return redirect()->route('master.category.index')->with('status', $message);
    }

    public function destroy($id)
    {
        if (!Laratrust::isAbleTo('delete-category')) return abort(404);

        $category = Category::findOrFail($id);
        $name = $category->name;
        $category->delete();

        $message = Lang::get('Category') . ' \'' . $name . '\' ' . Lang::get('successfully deleted.');
        return redirect()->route('master.category.index')->with('status', $message);
    }
}
