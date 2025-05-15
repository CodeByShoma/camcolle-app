<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::select('id','name', 'image_path')->get();

        return view('cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // IDからキャンピングカーを取得し、同時にレビューも取得。さらにレビューを書いたユーザーも取得
        $car = Car::with('reviews.user')->findOrFail($id);

        // 星の平均を計算（nullなら0）
        $averageRating = $car->reviews->avg('rating') ?? 0;

        //レビューの数カウント
        $reviewCount = $car->reviews->count();

        return view('cars.show', compact('car', 'averageRating', 'reviewCount'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
