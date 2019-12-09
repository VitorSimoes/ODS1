<?php

use Illuminate\Database\Seeder;
use App\User;
use Artesaos\Defender\Role;
use Faker\Factory as FactoryFaker;

class Users extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $faker;

    public function run()
    {
        // Cria usuários demo dados faker
        $this->faker = FactoryFaker::create('pt_BR');
        $this->createUsers();
    }
    private function createUsers()
    {
        $max = $this->faker->numberBetween(1, 50);
        for($i=0; $i < $max; $i++):
            $user = $this->createUser();
        endfor;
        $this->command->info($max . ' demo users created');
    }
    private function createUser()
    {
        return User::create([
            'email' => $this->faker->email,
            'name'  => $this->faker->name,
            'password' => bcrypt(\Illuminate\Support\Str::random(6))
        ]);
    }
}
