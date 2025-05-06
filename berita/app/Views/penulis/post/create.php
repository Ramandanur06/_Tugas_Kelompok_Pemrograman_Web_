<?= $this->include('penulis/layout/header') ?>

<h2>Tulis Artikel Baru</h2>
<form action="<?= base_url('penulis/store') ?>" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label>Judul</label>
        <input type="text" name="title" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Gambar Utama</label>
        <input type="file" name="featured_image" class="form-control">
    </div>
    <div class="mb-3">
        <label>Konten</label>
        <textarea name="content" class="form-control" rows="10" required></textarea>
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="<?= base_url('penulis') ?>" class="btn btn-secondary">Kembali</a>
</form>
<script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .then( editor => {
                console.log( 'Classic editor created successfully', editor );
            })
            .catch( error => {
                console.error( 'Error loading CKEditor 5:', error );
            } );
    </script>
    
<?= $this->include('penulis/layout/footer') ?>