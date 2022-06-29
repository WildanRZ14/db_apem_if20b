<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation extends BaseConfig
{
    //--------------------------------------------------------------------
    // Setup
    //--------------------------------------------------------------------

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
    public $medis = [
        'nama_pelapor' => [
        'rules' => 'required',
        ],
        'telpon_pelapor' => [
        'rules' => 'required',
        ],
        'lokasi_kejadian' => [
        'rules' => 'required'
        ],
        'tanggal_kejadian' => [
        'rules' => 'required'
        ],
        'isi_laporan' => [
        'rules' => 'required',
        ],
        ];
    public $update_medis = [
        'nama_pelapor' => [
        'rules' => 'required',
        ],
        'telpon_pelapor' => [
        'rules' => 'required',
        ],
        'lokasi_kejadian' => [
        'rules' => 'required'
        ],
        'tanggal_kejadian' => [
        'rules' => 'required'
        ],
        'isi_laporan' => [
        'rules' => 'required',
        ],
        ];
    public $sar = [
        'nama_pelapor' => [
        'rules' => 'required'
        ],
        'telpon_pelapor' => [
        'rules' => 'required'
        ],
        'lokasi_kejadian' => [
        'rules' => 'required'
        ],
        'tanggal_kejadian' => [
        'rules' => 'required'
        ],
        'isi_laporan' => [
        'rules' => 'required'
        ],
        ]; 
    public $update_sar = [
        'nama_pelapor' => [
        'rules' => 'required'
        ],
        'telpon_pelapor' => [
        'rules' => 'required'
        ],
        'lokasi_kejadian' => [
        'rules' => 'required'
        ],
        'tanggal_kejadian' => [
        'rules' => 'required'
        ],
        'isi_laporan' => [
        'rules' => 'required'
        ],
        ];  
    public $pemadam = [
        'nama_pelapor' => [
        'rules' => 'required',
        ],
        'telpon_pelapor' => [
        'rules' => 'required',
        ],
        'lokasi_kejadian' => [
        'rules' => 'required'
        ],
        'tanggal_kejadian' => [
        'rules' => 'required'
        ],
        'isi_laporan' => [
        'rules' => 'required',
        ],
        ];
    public $update_pemadam = [
        'nama_pelapor' => [
        'rules' => 'required',
        ],
        'telpon_pelapor' => [
        'rules' => 'required',
        ],
        'lokasi_kejadian' => [
        'rules' => 'required',
        ],
        'tanggal_kejadian' => [
        'rules' => 'required',
        ],
        'isi_laporan' => [
        'rules' => 'required',
        ],
        ]; 
    public $police = [
        'nama_pelapor' => [
        'rules' => 'required',
        ],
        'telpon_pelapor' => [
        'rules' => 'required'
        ],
        'lokasi_kejadian' => [
        'rules' => 'required',
        ],
        'tanggal_kejadian' => [
        'rules' => 'required',
        ],
        'isi_laporan' => [
        'rules' => 'required',
        ],
        ];           
    public $update_police = [
        'nama_pelapor' => [
        'rules' => 'required',
        ],
        'telpon_pelapor' => [
        'rules' => 'required'
        ],
        'lokasi_kejadian' => [
        'rules' => 'required',
        ],
        'tanggal_kejadian' => [
        'rules' => 'required',
        ],
        'isi_laporan' => [
        'rules' => 'required',
        ],
        ];               
    public $register = [
        'username' => [
        'rules' => 'required|is_unique[users.username]',
        ],
        'email' => [
        'rules' => 'required',
        ],
        'password' => [
        'rules' => 'required',
        ],
        ];
        public $update_user = [
        'username' => [
        'rules' => 'required|is_unique[users.username]',
        ],
        'email' => [
        'rules' => 'required',
        ],
        'password' => [
        'rules' => 'required',
        ],
        'mode' => [
        'rules' => 'user',
        ],
        ];
       }