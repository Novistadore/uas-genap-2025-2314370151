<form action="{{ route('products.store') }}" method="POST">
    @csrf

    <label>Nama Produk</label>
    <input type="text" name="name" required><br>

    <label>Deskripsi</label>
    <textarea name="description" required></textarea><br>

    <label>Harga</label>
    <input type="number" name="price" required><br>

    <label>Kategori ID</label>
    <input type="number" name="category_id" required><br>

    <label>Publish?</label>
    <input type="checkbox" name="is_publish" value="1"><br>

    <button type="submit">Simpan</button>
</form>
