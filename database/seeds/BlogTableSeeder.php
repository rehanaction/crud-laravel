<?php

use Illuminate\Database\Seeder;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('blog')->insert([
          'title' => "Belajar CRUD laravel 5.4",
          'subject' => "Isi nya tentang Tutorial Crud di laravel",
      ]);
      DB::table('blog')->insert([
          'title' => "Belajar CRUD Seeder",
          'subject' => "Isi nya tentang Tutorial Seeder",
      ]);
    }
}
