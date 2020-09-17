<?php

use Illuminate\Database\Seeder;
use App\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Rodando data base com Seeder
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name'=>'Professor',
                'email'=>'professor@scaffold.com',
                'is_admin'=>'1',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'Aluno',
                'email'=>'aluno@scaffold.com',
                'is_admin'=>'0',
                'password'=> bcrypt('123456'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
