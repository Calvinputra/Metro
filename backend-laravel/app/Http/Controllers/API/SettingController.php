<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Http\Resources\SettingResource;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Setting::where('group', 'Site')->get();
        if ($data) {
            return SettingResource::collection($data)->additional(["success" => true]);
        } else {
            return response()->json(['success' => false, 'msg' => 'Data not found']);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return response()->json([
            'data'   => 'Unauthorized Action',
            'status' => 503,
            'success' => false,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($key)
    {
        $data = Setting::where('group', 'Site')->where('key', $key)->first();
        if ($data) {
            return (new SettingResource($data))->additional(["success" => true]);
        } else {
            return response()->json(['success' => false, 'msg' => 'Data not found']);
        }
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
        return response()->json([
            'data'   => 'Unauthorized Action',
            'status' => 503,
            'success' => false,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return response()->json([
            'data'   => 'Unauthorized Action',
            'status' => 503,
            'success' => false,
        ]);
    }
}
