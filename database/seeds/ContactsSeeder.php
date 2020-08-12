<?php

use Illuminate\Database\Seeder;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')
            ->insert([
                'name' => 'Tamir',
                'surname' => 'Akanov',
                'phone' => '87777777777',
                'email' => 'email@email.com',
                'address' => 'Address'
            ]);

        DB::table('contacts')
            ->insert([
                'name' => 'Tamir1',
                'surname' => 'Akanov1',
                'phone' => '877777777771',
                'email' => 'email1@email.com',
                'address' => 'Address1'
            ]);
    }
}
