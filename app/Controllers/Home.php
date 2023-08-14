<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function __construct(){
		helper(['url', 'reports_helper', 'filesystem']);
	}

    public function index(): string
    {
        return view('welcome_message');
    }

    public function reports()
    {
        $params = [
            'nombre_movimiento' => 'Reporte uno',
            'autoriza' => '',
            'cargo' => '',
        ];
        $data['pdf'] = reporte(1, 'Codeigniter/reporteuno', $params, 'pdf');
        return view('reports', $data);
    }
}
