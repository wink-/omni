<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('customer', function(Blueprint $table) {
                $table->increments('ID');
                $table->string('CUSTCODE');
                $table->string('CUSTNAME');
                $table->string('ADDRESS1')->nullable()->default(null);
                $table->string('ADDRESS2')->nullable()->default(null);
                $table->string('ADDRESS3')->nullable()->default(null);
                $table->string('CITY')->nullable()->default(null);
                $table->string('STATE')->nullable()->default(null);
                $table->string('ZIP')->nullable()->default(null);
                $table->string('SHIPTO')->nullable()->default(null);
                $table->integer('destination_id')->nullable()->default(null);
                $table->string('SHIPVIA')->nullable()->default(null);
                $table->integer('carrier_id')->nullable()->default(null);
                $table->string('DEFFREIGHT')->nullable()->default(null);
                $table->string('CONTACT1')->nullable()->default(null);
                $table->string('PHONE1')->nullable()->default(null);
                $table->string('EXTENSION1')->nullable()->default(null);
                $table->string('CONTACT2')->nullable()->default(null);
                $table->string('PHONE2')->nullable()->default(null);
                $table->string('EXTENSION2')->nullable()->default(null);
                $table->string('FAX')->nullable()->default(null);
                $table->string('EMAIL')->nullable()->default(null);
                $table->boolean('COD')->nullable()->default(null);
                $table->string('TAXIDEN')->nullable()->default(null);
                $table->string('REMARKS')->nullable()->default(null);
                $table->dateTime('TimeStamp');

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
        Schema::drop('customer');
    }

}
