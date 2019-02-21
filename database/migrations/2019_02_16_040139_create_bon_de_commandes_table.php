<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBonDeCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bon_de_commandes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero');
            $table->text('commentaire')->nullable();
            $table->string('pour_compte');
            $table->string('imputation')->nullable();
            $table->string('devise');
            $table->string('precision');
            $table->datetime('date_suppression')->nullable();
            $table->boolean('archive')->default(0);
            $table->unsignedInteger('societe_id');
            $table->unsignedInteger('fournisseur_id');
            $table->unsignedInteger('facture_id');
            $table->foreign('societe_id')->references('id')->on('societes');
            $table->foreign('fournisseur_id')->references('id')->on('fournisseurs');
            $table->foreign('facture_id')->references('id')->on('factures');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bon_de_commandes');
    }
}
