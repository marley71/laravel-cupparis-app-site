<?php


return [

    'search' => [
        "fields" => [
            "titolo_it" => [
                'operator' => 'like',
            ]
        ],

    ],
    'list' => [

////        'allowed_actions' => [
////            'csv-export' => true,
////        ],
//
        'actions' => [
            'set' => [
                'allowed_fields' => [
                    'attivo',
                ],
            ],
            //            'csv-export' => [
//                'default' => [
//                    'blacklist' => [
////                        'password'
//                    ],
//                    'whitelist' => [
//                        "codice",
//                        "nome_it",
//
//                ],
//                    'fieldsParams' => [
////                        "istituto|comunenome" => [
////                            'header' => 'Istituto - comune (nome)',
////                            'item' => 'istituto|T_COMUNE_ID',
////                        ],
//                    ],
//                    'separator' => ';',
//                    'endline' => "\n",
//                    'headers' => 'translate',
//                    'decimalFrom' => '.',
//                    'decimalTo' => false,
//                ],
//            ]
//
        ],

        'dependencies' => [
            'search' => 'search',
        ],

        'pagination' => [
            'per_page' => 40,
            'pagination_steps' => [10, 20, 50],
        ],

        'fields' => [
            "id" => [

            ],
            "titolo_it" => [

            ],
            'attivo' => [

            ],
            'type' => [

            ],
            'cup_site_page_id' => []
        ],
        'relations' => [

        ],
        'params' => [

        ],
    ],


    'edit' => [
        'fields' => [
            'id' => [

            ],
            "descrizione_it" => [],
            "titolo_it" => [],
            'data' => [],
            "attivo" => [],
            //'cup_site_page_id' => []
        ],
        'relations' => [

        ],
        'params' => [

        ],
    ],
    'insert' => [
        'fields' => [
            'id' => [

            ],
            "descrizione_it" => [],
            "titolo_it" => [

            ],
            "attivo" => [],
            'data' => [],
            //'cup_site_page_id' => []
        ],
        'relations' => [

        ],
        'params' => [

        ],
    ],
//    'insert' => [
//
//    ],

];
