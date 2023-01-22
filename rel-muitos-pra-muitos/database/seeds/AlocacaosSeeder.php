<?php

use Illuminate\Database\Seeder;

class AlocacaosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alocacaos')->insert([ 'projeto_id' => 1, 'desenvolvedor_id' => 1, 'horas_semanais' => 11]);
        DB::table('alocacaos')->insert([ 'projeto_id' => 1, 'desenvolvedor_id' => 2, 'horas_semanais' => 12]);
        DB::table('alocacaos')->insert([ 'projeto_id' => 2, 'desenvolvedor_id' => 2, 'horas_semanais' => 13]);
        DB::table('alocacaos')->insert([ 'projeto_id' => 2, 'desenvolvedor_id' => 3, 'horas_semanais' => 22]);
        DB::table('alocacaos')->insert([ 'projeto_id' => 3, 'desenvolvedor_id' => 1, 'horas_semanais' => 22]);
        DB::table('alocacaos')->insert([ 'projeto_id' => 3, 'desenvolvedor_id' => 2, 'horas_semanais' => 33]);
        DB::table('alocacaos')->insert([ 'projeto_id' => 3, 'desenvolvedor_id' => 3, 'horas_semanais' => 5]);
    }
}
