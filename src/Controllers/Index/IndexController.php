<?php

declare (strict_types = 1);

namespace App\Controllers\Index;

use App\Controllers\Middlewares\Controller;

class IndexController extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index(): void
    {
        echo $this->render(
            bladeTemplate: 'Index.Index', 
            variableCustom: [
                'title' => 'Soluções Inovadoras em TI para Gestão Imobiliária - Objetiva Software',
                'description' => 'Descubra como o Sistema Gestor Imobiliário da Objetiva Software oferece soluções inovadoras em TI para otimizar a gestão e rentabilidade no setor imobiliário. Conheça nossos serviços!',
            ]
        );
        exit;
    }
}

