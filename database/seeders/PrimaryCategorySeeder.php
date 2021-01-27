<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PrimaryCategory;

class PrimaryCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\PrimaryCategory::factory(PrimaryCategory::class)->create([
            'id'      => 1,
            'name'    => 'レディース',
            'sort_no' => 1,
        ]);
        \App\Models\PrimaryCategory::factory(PrimaryCategory::class)->create([
            'id'      => 2,
            'name'    => 'メンズ',
            'sort_no' => 2,
        ]);
        \App\Models\PrimaryCategory::factory(PrimaryCategory::class)->create([
            'id'      => 3,
            'name'    => 'ベビー・キッズ',
            'sort_no' => 3,
        ]);
        \App\Models\PrimaryCategory::factory(PrimaryCategory::class)->create([
            'id'      => 4,
            'name'    => 'その他',
            'sort_no' => 4,
        ]);
    }
}
