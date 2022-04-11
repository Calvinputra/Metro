<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WebsiteFeedback;
use Validator;

class WebsiteFeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'data'   => 'Unauthorized Action',
            'status' => 503,
            'success' => false,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate rules
        $rules = [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|starts_with:08',
            'message' => 'required',
        ];
        $messages = [
            "first_name.required" => "Nama depan wajib diisi" ,
            "last_name.required" => "Nama belakang wajib diisi" ,
            "email.required" => "Email wajib diisi" ,
            "phone.required" => "Nomor telepon wajib diisi" ,
            "message.required" => "Pesan wajib diisi" 
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return response([
                'success' => false,
                'message' => $validator->errors(),
            ], 200);
        }

        $data = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,

        ];

        WebsiteFeedback::create($data);

        return response([
            'success' => true,
            'message' => ['msg' => ['Terima kasih atas feedback Anda!']],
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json([
            'data'   => 'Unauthorized Action',
            'status' => 503,
            'success' => false,
        ]);
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
