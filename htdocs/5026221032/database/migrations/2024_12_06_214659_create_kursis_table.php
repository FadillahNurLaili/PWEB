public function up()
{
    Schema::create('kursi', function (Blueprint $table) {
        $table->id('kodekursi');
        $table->string('merkkursi', 30);
        $table->integer('stockkursi');
        $table->char('tersedia', 1);
        $table->timestamps();
    });
}
