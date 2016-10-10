<?php

namespace App\Http\Controllers;

use App\Cat;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCatsRequest;
use App\Http\Requests\UpdateCatsRequest;
use App\Http\Controllers\Traits\FileUploadTrait;

class CatsController extends Controller
{
    use FileUploadTrait;


    /**
     * Display a listing of Cat.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats = Cat::all();
        return view('cats.index', compact('cats'));
    }

    /**
     * Show the form for creating new Cat.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $enum_color = Cat::$enum_color;
        
        return view('cats.create', compact('enum_color'));
    }

    /**
     * Store a newly created Cat in storage.
     *
     * @param  \App\Http\Requests\StoreCatsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCatsRequest $request)
    {
        $request = $this->saveFiles($request);
        Cat::create($request->all());

        return redirect()->route('cats.index');
    }

    /**
     * Show the form for editing Cat.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $enum_color = Cat::$enum_color;

        $cat = Cat::findOrFail($id);
        return view('cats.edit', compact('cat', 'enum_color'));
    }

    /**
     * Update Cat in storage.
     *
     * @param  \App\Http\Requests\UpdateCatsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCatsRequest $request, $id)
    {
        $request = $this->saveFiles($request);
        $cat = Cat::findOrFail($id);
        $cat->update($request->all());

        return redirect()->route('cats.index');
    }

    /**
     * Display Cat.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cat = Cat::findOrFail($id);
        return view('cats.show', compact('cat'));
    }

    /**
     * Remove Cat from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat = Cat::findOrFail($id);
        $cat->delete();

        return redirect()->route('cats.index');
    }

}
