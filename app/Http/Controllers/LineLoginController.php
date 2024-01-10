<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LineLogin;

class LineLoginController extends Controller
{
    public function store(Request $request)
    {
        $line_user_id = $request->input('line_user_id');
    
        $existingData = LineLogin::where('line_user_id', $line_user_id)->first();
    
        if ($existingData) {
            return response()->json(['message' => 'Line login data already exists']);
        }
    
        $data = $request->validate([
            'line_user_id' => 'required|unique:line_logins,line_user_id',
            'display_name' => 'required',
            'picture_url' => 'nullable',
        ]);
    
        LineLogin::create($data);
    
        return response()->json(['message' => 'Line login data stored successfully']);
    }
    

    public function show($line_user_id)
    {
        $existingData = LineLogin::where('line_user_id', $line_user_id)->first();

        return response()->json($existingData);
    }
}


