<?php

use Illuminate\Database\Seeder;

class ForbiddenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $restrictions = [
            "porn", "sex", "xxx", "fuck", "suck", "redtube", "video-one", "xvideos", "spankbang", "xhamster", "xnxx",
            "cur.lv", "tinyurl", "chaturbate", "bazoocam", "jizz", "taboo", "sis", "sister", "brother",
            "appleid", "x.co", "goo.gl", "bitly", "tiny", "bit.do", "login-account", "security", "verify"
        ];

        foreach ($restrictions as $string) {
            DB::table('forbidden')->insert([
                'contains' => $string,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
        }
    }
}
