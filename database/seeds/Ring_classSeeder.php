<?php

use Illuminate\Database\Seeder;

class Ring_classSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Ring_classes')->insert([
          [
            'seq' => 1,
            'name' => 'エントリー',
          ],
          [
            'seq' => 2,
            'name' => 'クチコミ',
          ],
          [
            'seq' => 3,
            'name' => '正式応募',
          ],
          [
            'seq' => 4,
            'name' => 'ギフト券',
          ],
          [
            'seq' => 5,
            'name' => 'その他',
          ],
        ]);
    }
}
