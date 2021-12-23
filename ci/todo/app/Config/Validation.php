<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
    //--------------------------------------------------------------------
    // Setup
    //--------------------------------------------------------------------
    public $user = [
		'email' => 'required|valid_email|is_unique[user.email]',
        'username' => 'alpha_numeric|is_unique[user.username]',
        'password' => 'min_length[8]|alpha_numeric_punct',
        'fullname' => 'required'
        // 'confirm' => 'matches[password]'
        ];

    public $user_errors = [
		
            'email' => [
                 'required' => 'Email wajib diisi',
                 'valid_email' => 'Email tidak valid',
                 'is_unique' => 'Email sudah dipakai'
             ],
            'username' => [
                'alpha_numeric' => 'Username hanya boleh mengandung huruf dan angka',
                'is_unique' => 'Username sudah dipakai'
                ],
             'password' => [
                 'min_length' => 'Password harus terdiri dari 8 kata',
                 'alpha_numeric_punct' => 'Password hanya boleh mengandung angka, huruf, dan karakter yang valid'
                 ],
            'confirm' => [
                'matches' => 'Konfirmasi password tidak cocok'
            ],
            'fullname' => [
                'required' => 'Fullname wajid diisi'
            ]

            ];


        public $user_edit = [
            'password' => 'min_length[8]|alpha_numeric_punct',
            'fullname' => 'required'
            ];
    
        public $useredit_errors = [
            
              'password' => [
                        'min_length' => 'Password harus terdiri dari 8 kata',
                        'alpha_numeric_punct' => 'Password hanya boleh mengandung angka, huruf, dan karakter yang valid'
                        ],
                'fullname' => [
                    'required' => 'Fullname wajid diisi'
                ]
    
                ];
    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    //--------------------------------------------------------------------
    // Rules
    //--------------------------------------------------------------------
}
