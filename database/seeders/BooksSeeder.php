<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\books;

use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class Book extends \Faker\Provider\Base
{
  public function title($nbWords = 5)
  {
    $sentence = $this->generator->sentence($nbWords);
    return substr($sentence, 0, strlen($sentence) - 1);
  }

  public function ISBN()
  {
    return $this->generator->ean13();
  }
}

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        require_once 'vendor/autoload.php';
        $faker = Faker::create('en_US');
        // $faker = new Faker\Generator();
        // $faker->addProvider(new Faker\Provider\en_US\Person($faker));
        // $faker->addProvider(new Faker\Provider\en_US\Text($faker));
        $faker->addProvider(new Book($faker));


        for ($i = 0; $i < 105; $i++) {
            $kategoriBaca = mt_rand(1, 3);
            $kategoriBaca = $kategoriBaca == 1 ? 'Quicks' : ($kategoriBaca == 2 ? 'Medium' : 'Long');

            DB::table('books')->insert([
                'judul' => $faker->title,
                'gambar' => 'assets/'.mt_rand(1,10).'.jpg',
                'deskripsi' => $faker->text,
                'author' => $faker->name,
                'tanggal' => $faker->date,
                'reading_time' => $kategoriBaca.' Read',
                'isi' => $faker->realText(1000),
                'video' => mt_rand(0,1) == 1 ? 'https://www.youtube-nocookie.com/embed/0-S5a0eXPoc?controls=0' : 'none',
            ]);
        }

    }
}
