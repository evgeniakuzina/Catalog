<?php

namespace App\Http\Controllers;

use App\Good;
use App\Category;
use Illuminate\Http\Request;

class GoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $goods = Good::all();
        return view('goods.index', compact('goods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view('goods.form', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
        $this->validate($request, [
            'name' => 'required|unique:goods',
            'category_id' => 'required',
        ]);
        
        $data = Good::create($request->all());

        $good = Good::find($data->id);

        $good->categories()->attach($request['category_id']);

        return response()->json([
            "status" => 201,
            "body" => $good,
            "message" => ''
        ], 201);

    }
        
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Good  $good
     * @return \Illuminate\Http\Response
     */
    public function show(Good $good)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Good  $good
     * @return \Illuminate\Http\Response
     */
    public function edit(Good $good)
    {
        //
        $entity = $good;
        $categories = Category::all();
        return view('goods.form', compact('entity', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Good  $good
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Good $good)
    {
        //
        $this->validate($request, [
            'name' => 'required',
            'category_id' => 'required'
        ]);

        $data = $good->update($request->all());

        $good = Good::find($good)->first();

        $good->categories()->sync($request['category_id']);

        return response()->json([
            "status" => 200,
            "body" => $good,
            "message" => ''
        ], 200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Good  $good
     * @return \Illuminate\Http\Response
     */
    public function destroy(Good $good)
    {
        //
        $good->delete();

        return response()->json([
            "status" => 200,
            "body" => '',
            "message" => ''
        ], 200);
        
    }
}
