<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\MenuResource;
use Illuminate\Http\Request;
use App\Models\Voyager\Menu;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'success' => false,
            'data'   => 'Unauthorized Action',
            'status' => 503,
        ]);
        //return MenuResource::collection(Menu::with('items')->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //example
        // $book = Book::create([
        //     'user_id'     => $request->user()->id,
        //     'title'       => $request->title,
        //     'description' => $request->description,
        // ]);

        // return new BookResource($book);

        return response()->json([
            'success' => false,
            'data'   => 'Unauthorized Action',
            'status' => 503,
        ], 503);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $menu = Menu::find($id);

        return $menu ? new MenuResource($menu) : response()->json([
            'data'   => 'Data Not Found',
            'status' => 404,
        ], 404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //    // check if currently authenticated user is the owner of the book
        // if ($request->user()->id !== $book->user_id) {
        //   return response()->json(['error' => 'You can only edit your own books.'], 403);
        // }

        // $book->update($request->only(['title', 'description']));

        // return new BookResource($book);
        return response()->json([
            'success' => false,
            'data'   => 'Unauthorized Action',
            'status' => 503,
        ], 503);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $book->delete();

        // return response()->json(null, 204);
        return response()->json([
            'success' => false,
            'data'   => 'Unauthorized Action',
            'status' => 503,
        ], 503);
    }
}
