<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFstatementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fstatement', function (Blueprint $table) {
            $table->unsignedInteger('company_id');
            $table->date('fisical_year')->comment('決算日');
            $table->integer('bs_current_assets')->default(0)->comment('流動資産（百万円）');
            $table->integer('bs_fixed_assets')->default(0)->comment('固定資産（百万円）');
            $table->integer('bs_deferred_assets')->default(0)->comment('繰延資産（百万円）');
            $table->integer('bs_current_liabilities')->default(0)->comment('流動負債（百万円）');
            $table->integer('bs_fixed_liabilities')->default(0)->comment('固定負債（百万円）');
            $table->integer('bs_net_assets')->default(0)->comment('純資産（百万円）');
            $table->integer('pl_gross_sales')->default(0)->comment('総売上（百万円）');
            $table->integer('pl_gross_profit')->default(0)->comment('売上総利益（百万円）');
            $table->integer('pl_operating_profit')->default(0)->comment('営業利益（百万円）');
            $table->integer('pl_ordinary_income')->default(0)->comment('経常利益（百万円）');
            $table->integer('pl_income_before_tax')->default(0)->comment('税引前当期純利益（百万円）');
            $table->integer('pl_net_income')->default(0)->comment('当期純利益（百万円）');
            $table->integer('cf_operating')->default(0)->comment('営業ＣＦ（百万円）');
            $table->integer('cf_investment')->default(0)->comment('投資ＣＦ（百万円）');
            $table->integer('cf_finance')->default(0)->comment('財務ＣＦ（百万円）');
            $table->timestamps();

            $table->foreign('company_id')->references('id')->on('companies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fstatement');
    }
}
