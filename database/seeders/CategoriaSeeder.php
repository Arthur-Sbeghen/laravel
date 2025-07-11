<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categoria::create(['nome' => 'Variedades']);
        
        Categoria::create(['nome' => 'Economia']);
        
        Categoria::create(['nome' => 'Lazer']);

        Categoria::create(['nome' => 'Diversão']);
        
        Categoria::create(['nome' => 'Animais']);
        
        Categoria::create(['nome' => 'Domicílio']);
    }
}
