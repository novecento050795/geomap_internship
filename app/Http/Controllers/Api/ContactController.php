<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Contact;

class ContactController extends Controller
{
    public function createContact(Request $request) {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'surname' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
        ]);

        if ($validator->fails()) {
            return response($validator->errors());   
        }

        Contact::create($request->only([
            'name',
            'surname',
            'phone',
            'email',
            'address',
        ]));

        return response('created');

    }

    public function contactList() {

        return response(
            Contact::all()
        );
    }

    public function contactInfo($id) {
        
        return response(
            Contact::find($id)
        );
    }

    public function updateContact(Request $request, $id) {

        $contact = Contact::find($id);

        if ($contact) {

            $request_fields = $request->only([
                'name',
                'surname',
                'phone',
                'email',
                'address',
            ]);

            foreach ($request_fields as $field => $value) {
                $contact->{$field} = $value;
            }

            $contact->save();

            return response('updated');

        }
        else {
            return response('Contact '.$id.' not found');
        }
    }

    public function deleteContact($id) {
        
        $contact = Contact::find($id);

        if ($contact) {
            $contact->delete();
            return response('deleted');
        }
        else {
            return response('Contact '.$id.' not found');
        }

    }
}
