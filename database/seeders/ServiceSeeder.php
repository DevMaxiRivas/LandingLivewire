<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Service::create([
            'title' => 'Cotizacion',
            'short_desc' => 'Solicita una cotizacion',
            'state' => 1,
        ]);
        Service::create([
            'title' => 'Retiro de Materiales',
            'short_desc' => 'Solicita el retiro de materiales',
            'state' => 1,
        ]);
        Service::create([
            'title' => 'Devolucion de Materiales',
            'short_desc' => 'Solicita la devolucion de materiales',
            'state' => 1,
        ]);
        Service::create([
            'title' => 'Envio de Materiales',
            'short_desc' => 'Solicita el envio de materiales',
            'state' => 1,
        ]);
        Service::create([
            'title' => 'Extravío de Materiales',
            'short_desc' => 'Solicita el envío de materiales',
            'state' => 1,
        ]);
        Service::create([
            'title' => 'Medios de Pago',
            'short_desc' => 'Solicita información sobre los medios de pago',
            'state' => 1,
        ]);
        Service::create([
            'title' => 'Sucursales',
            'short_desc' => 'Solicita información sobre nuestras sucursales',
            'state' => 1,
        ]);
        Service::create([
            'title' => 'Otros Servicios',
            'short_desc' => 'Solicita información sobre otros servicios',
            'state' => 1,
        ]);
    }
}