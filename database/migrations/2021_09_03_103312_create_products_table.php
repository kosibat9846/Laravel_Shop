
<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id')->unsigned();
            $table->integer('subcategory_id')->unsigned();
            $table->string('name');
            $table->string('dimension');
            $table->string('accession_number');
            $table->decimal('gross_price');
            $table->decimal('net_price');
            $table->integer('quantity');
            $table->boolean('availability');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('subcategory_id')->references('id')->on('subcategoris');
        });
    }
    /**
     * Reverse the migrations.
     *php
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
