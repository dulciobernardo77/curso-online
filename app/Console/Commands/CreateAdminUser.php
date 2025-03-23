<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateAdminUser extends Command
{
    protected $signature = 'make:admin {name} {email} {password}';
    protected $description = 'Cria um novo usuário administrador';

    public function handle()
    {
        $user = User::create([
            'name' => $this->argument('name'),
            'email' => $this->argument('email'),
            'password' => Hash::make($this->argument('password')),
            'role' => 'admin'
        ]);

        $this->info("Usuário admin criado com sucesso!");
        $this->info("Nome: " . $user->name);
        $this->info("Email: " . $user->email);
        $this->info("Role: " . $user->role);
    }
} 