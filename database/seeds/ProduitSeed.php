<?php

use Illuminate\Database\Seeder;

class ProduitSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(App\Produit::class, 100) ->create();
    }
}
