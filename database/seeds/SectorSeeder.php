<?php

use Illuminate\Database\Seeder;

class SectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sectors')->insert([
            'name' => 'Setor Pai',
            'endereco' => 'Av. Desembargador Moreira 351',
            'telefone' => '(85)3101-3571',
            'responsavel' => 'Juvenal Galeno dos Santos',
            'descricao' => 'Setor que faz isso isso e aquilo',
            'ativo' => true

        ]);
    }
}
