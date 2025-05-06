<?= $this->include('penulis/layout/header') ?>

<h2>Update Artikel</h2>
<form action="<?= base_url('penulis/update/' . $post['id']) ?>" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label>Judul</label>
        <input type="text" name="title" class="form-control" value="<?= esc($post['title']) ?>" required>
    </div>
    <div class="mb-3">
        <label>Gambar Utama</label>
        <?php if ($post['featured_image']): ?>
            <img src="<?= base_url('uploads/' . $post['featured_image']) ?>" width="200" class="mb-2">
        <?php endif ?>
        <input type="file" name="featured_image" class="form-control">
    </div>
    <div class="mb-3">
        <label>Konten</label>
        <textarea name="content" class="form-control" rows="10" required><?= esc($post['content']) ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
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