public function up(): void
{
    Schema::create('mahasiswas', function (Blueprint $table) {
        $table->id();
        $table->string('nim')->unique();
        $table->string('nama_mahasiswa');
        $table->string('tempat_lahir');
        $table->date('tanggal_lahir');
        $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
        $table->text('alamat');
        $table->string('program_studi');
        $table->string('nomor_hp');
        $table->string('email')->unique();
        $table->timestamps();
    });
}