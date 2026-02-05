@extends('layouts.app')

@section('content')
    <div class="max-w-xl mx-auto bg-white p-6 rounded shadow">
        <h1 class="text-xl font-semibold mb-4">Add Product</h1>

        @if ($errors->any())
            <div class="mb-4 rounded border border-red-300 bg-red-50 p-3 text-red-700">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('products.store') }}" class="space-y-4">
            @csrf

            <div>
                <label class="block mb-1 font-medium">Name</label>
                <input
                    type="text"
                    name="name"
                    value="{{ old('name') }}"
                    class="w-full rounded border px-3 py-2 @error('name') border-red-500 @enderror"
                >
            </div>

            <div>
                <label class="block mb-1 font-medium">SKU</label>
                <input
                    type="text"
                    name="sku"
                    value="{{ old('sku') }}"
                    class="w-full rounded border px-3 py-2 @error('sku') border-red-500 @enderror"
                >
            </div>

            <div>
                <label class="block mb-1 font-medium">Price</label>
                <input
                    type="number"
                    step="0.01"
                    name="price"
                    value="{{ old('price') }}"
                    class="w-full rounded border px-3 py-2 @error('price') border-red-500 @enderror"
                >
            </div>

            <div class="flex gap-2">
                <button class="rounded bg-green-600 px-4 py-2 text-white hover:bg-green-700">
                    Save
                </button>
                <a href="{{ route('products.index') }}"
                   class="rounded bg-gray-300 px-4 py-2 hover:bg-gray-400">
                    Cancel
                </a>
            </div>
        </form>
    </div>
@endsection
