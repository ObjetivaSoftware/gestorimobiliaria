<?php

declare (strict_types = 1);

namespace App\Controllers\Vendas_E_Crm;

use App\Controllers\Middlewares\Controller;

class Vendas_E_CrmController extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index(): void
    {
        echo $this->render('Vendas_e_crm_controlador.Index', [
            'title' => 'Transformação Digital para Imobiliárias | Sistema Integrado - Objetiva Software',
            'description' => 'Descubra o poder da transformação digital para sua imobiliária com um sistema integrado e inovador. Atraia mais clientes, gerencie eficientemente imóveis e impulsione seus resultados com a Objetiva Software.',
        ]);
        exit;
    }
}

