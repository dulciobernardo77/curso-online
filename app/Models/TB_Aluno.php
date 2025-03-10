<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TB_Aluno extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('alunos')->insert([
            [
                'nome' => '',
                'email' => '',
                'telefone' => '',
                'curso_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
                ]
            ]);
       

       }

       }
