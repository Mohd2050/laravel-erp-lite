@extends('layouts.app')

@section('content')
    <div class="mx-auto max-w-3xl px-4 py-6">

        <h1 class="mb-6 text-2xl font-semibold text-gray-800">
            Edit Product
        </h1>

        {{-- Validation Errors --}}
        @if ($errors->any())
            <div class="mb-6 rounded-lg border border-red-300 bg-red-50 p-4 text-red-800">
                <ul class="list-disc list-inside space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('products.update', $product) }}" class="space-y-5">
            @csrf
            @method('PUT')

            {{-- Name --}}
            <div>
                <label class="block text-sm font-medium text-gray-700">
                    Name
                </label>

                <input
                    type="text"
                    name="name"
                    value="{{ old('name', $product->name) }}"
                    class="mt-1 w-full rounded-md border px-3 py-2
                       @error('name') border-red-500 @else border-gray-300 @enderror"
                >

                @error('name')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            {{-- SKU --}}
            <div>
                <label class="block text-sm font-medium text-gray-700">
                    SKU
                </label>

                <input
                    type="text"
                    name="sku"
                    value="{{ old('sku', $product->sku) }}"
                    class="mt-1 w-full rounded-md border px-3 py-2
                       @error('sku') border-red-500 @else border-gray-300 @enderror"
                >

                @error('sku')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            {{-- Price --}}
            <div>
                <label class="block text-sm font-medium text-gray-700">
                    Price
                </label>

                <input
                    type="number"
                    step="0.01"
                    name="price"
                    value="{{ old('price', $product->price) }}"
                    class="mt-1 w-full rounded-md border px-3 py-2
                       @error('price') border-red-500 @else border-gray-300 @enderror"
                >

                @error('price')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            {{-- Actions --}}
            <div class="flex items-center gap-3 pt-4">
                <button
                    type="submit"
                    class="rounded bg-green-600 px-5 py-2 text-white hover:bg-green-700"
                >
                    Update
                </button>

                <a
                    href="{{ route('products.index') }}"
                    class="rounded bg-gray-500 px-5 py-2 text-white hover:bg-gray-600"
                >
                    Cancel
                </a>
            </div>

        </form>
    </div>
@endsection
