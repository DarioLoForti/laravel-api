<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use illuminate\Support\Facades\Mail;

use App\MOdels\Lead;
use App\Mail\NewContact;

class LeadController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'nome'      => 'required|max:50',
            'cognome'   => 'required|max:70',
            'email'     => 'required|max:150',
            'telefono'  => 'required|max:25',
            'messaggio' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors'  => $validator->errors()
            ]);
        }

        $new_lead = new Lead();
        $new_lead->fill($data);

        $new_lead->save();

        Mail::to('info@mail.com')->send(new NewContact($new_lead));

        return response()->json([
            'success'  => true
        ]);
    }
}
