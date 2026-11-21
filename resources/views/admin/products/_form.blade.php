@csrf

<div class="mb-4">
    <label class="block text-sm font-medium text-gray-700">Kategori</label>
    <select name="category_id" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
        <option value="">Pilih Kategori</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ old('category_id', $product->category_id ?? '') == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select>
    @error('category_id')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
</div>

<div class="mb-4">
    <label class="block text-sm font-medium text-gray-700">SKU</label>
    <input type="text" name="sku" value="{{ old('sku', $product->sku ?? '') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
    @error('sku')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
</div>

<div class="mb-4">
    <label class="block text-sm font-medium text-gray-700">Nama Produk</label>
    <input type="text" name="name" value="{{ old('name', $product->name ?? '') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
    @error('name')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
</div>

<div class="mb-4">
    <label class="block text-sm font-medium text-gray-700">Deskripsi</label>
    <textarea name="description" rows="3" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">{{ old('description', $product->description ?? '') }}</textarea>
    @error('description')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
</div>

<div class="mb-4">
    <label class="block text-sm font-medium text-gray-700">Harga (Rp)</label>
    <input type="number" step="0.01" name="price" value="{{ old('price', $product->price ?? '') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
    @error('price')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
</div>

<div class="mb-4">
    <label class="block text-sm font-medium text-gray-700">Gambar Produk</label>
    @isset($product->image)
        @if ($product->image)
            <div class="my-2">
                <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}" class="w-24 h-24 object-cover rounded border">
                <p class="text-xs text-gray-500 mt-1">Gambar saat ini (biarkan kosong jika tidak ingin mengubah)</p>
            </div>
        @endif
    @endisset
    <input type="file" name="image" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
    @error('image')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
</div>

<div class="mb-4 flex items-center">
    <input type="hidden" name="is_active" value="0">
    <input type="checkbox" name="is_active" value="1" {{ old('is_active', $product->is_active ?? true) ? 'checked' : '' }} class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
    <label class="ml-2 block text-sm text-gray-900">Aktifkan Produk</label>
</div>