<?php

namespace App\Controllers;

use App\Models\Contact;

class HomeController
{
    private $contactModel;
    public function __construct()
    {
        $this->contactModel = new Contact();
    }

    public function index()
    {
        global $request;
        $where = ['ORDER' => ['created_at' => "DESC"]];
        $searchKeyWord = $request->input('s');

        if (!is_null($searchKeyWord)) {
            $where['OR'] = [

                "name[~]" => $searchKeyWord,
                "mobile[~]" => $searchKeyWord,
                "email[~]" => $searchKeyWord,
            ];
        }
        $contacts = $this->contactModel->get('*', $where);
        $data = [
            'contacts' => $contacts,
            'searchKeyWord' => $searchKeyWord,
        ];

        views('home.index', $data);
    }
}


  // $faker = \Faker\Factory::create();

        // for ($i = 0; $i < 1000; $i++) {
        //     $this->contactModel->create([
        //         'name' => $faker->name(),
        //         'mobile' => $faker->phoneNumber(),
        //         'email' => $faker->email()
        //     ]);
        // }
