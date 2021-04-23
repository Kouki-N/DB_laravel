<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PiyoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'piyo',
            'age' => 10,
        ];
        DB::table('piyos')->insert($param);
    }
}
