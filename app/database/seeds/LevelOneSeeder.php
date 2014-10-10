<?php


class LevelOneSeeder extends Seeder {

    public function run()
    {
        DB::table('levelone')->delete();

        Levelone::create(array(
            'email' => 'mantis@chasenet.net',
            'name' => 'Richard Clifford',
            'password' => md5('ir2leetforthis'),
        ));
    }

}
