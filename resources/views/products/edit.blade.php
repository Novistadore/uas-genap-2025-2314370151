<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nama Produk</label>
    <input type="text" name="name" value="{{ $product->name }}" required><br>

    <label>Deskripsi</label>
    <textarea name="description" required>{{ $product->description }}</textarea><br>

    <label>Harga</label>
    <input type="number" name="price" value="{{ $product->price }}" required><br>

    <label>Kategori ID</label>
    <input type="number" name="category_id" value="{{ $product->category_id }}" required><br>

    <label>Publish?</label>
    <input type="checkbox" name="is_publish" value="1" {{ $product->is_publish ? 'checked' : '' }}><br>

    <button type="submit">Update</button>
</form>
