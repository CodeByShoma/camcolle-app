<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Review;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Car $car)
    {
        return view('reviews.create', compact('car'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Car $car)
    {
        // バリデーション
        $request->validate([
            'message' => ['required', 'string'],
            // 'image' => ['nullable', 'image', 'max:2048'],
            'title' => ['required', 'string', 'max:255'],
            'rating' => ['required', 'integer', 'between:1,5'],
        ]);

        // DB保存
        Review::create([
            'car_id' => $car->id,
            'user_id' => auth()->id(),
            'rating' => $request->rating,
            'comment' => $request->message,
            'title' => $request->title,
        ]);

        return redirect()->route('cars.show', $car);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        //削除するデータを取得
        $review =Review::findOrFail($id);

        //ログインしている本人か確認
        if($review->user_id !== auth()->id()){
            abort(403); //権限エラー
        }

        $carId = $review -> car_id; //どの詳細ページにリダイレクトするかを覚えておくためのid
        $review -> delete();

        return redirect()->route('cars.show', $carId);
    }
}
