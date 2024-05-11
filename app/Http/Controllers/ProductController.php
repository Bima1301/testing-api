<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $dummyData = [
                [
                    'id' => 1,
                    'name' => 'Product 1',
                    'price' => 100,
                    'created_at' => '2024-05-11 13:26:33',
                    'updated_at' => '2024-05-11 13:26:33',
                ],
                [
                    'id' => 2,
                    'name' => 'Product 2',
                    'price' => 200,
                    'created_at' => '2024-05-11 13:26:33',
                    'updated_at' => '2024-05-11 13:26:33',
                ],
                [
                    'id' => 3,
                    'name' => 'Product 3',
                    'price' => 300,
                    'created_at' => '2024-05-11 13:26:33',
                    'updated_at' => '2024-05-11 13:26:33',
                ],
            ];

            $response = [
                'status' => 'success',
                'message' => 'Data fetched successfully',
                'entries' => $dummyData
            ];

            return response($response, 200);
        } catch (\Throwable $th) {
            $response = [
                'status' => 'error',
                'message' => 'Failed to fetch data',
                'error' => $th->getMessage()
            ];

            return response($response, 500);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
