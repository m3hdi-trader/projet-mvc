<?php

namespace App\Controllers;

use App\Models\Contact;

class ContactController
{
    private $contactModel;
    public function __construct()
    {
        $this->contactModel = new Contact();
    }

    public function add()
    {
        global $request;
        $data['alreadyExists'] = false;
        #chek if contact number already exists
        $count = $this->contactModel->count(['mobile' => $request->input('mobile')]);

        if ($count) {
            $data['alreadyExists'] = true;
            views("contact.addResult", $data);
            die();
        }
        #creat new contact
        $contactId = $this->contactModel->create([
            'name' => $request->input('name'),
            'mobile' => $request->input('mobile'),
            'email' => $request->input('email'),
        ]);

        $data['contactId'] = $contactId;

        views("contact.addResult", $data);
    }

    public function delete()
    {
        global $request;
        $id = $request->getRouteParam('id');
        $data['deletedCount'] = $this->contactModel->delete(['id' => $id]);
        views("contact.deleteResult", $data);
    }
}
