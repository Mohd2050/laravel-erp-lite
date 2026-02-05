@extends('layouts.app')

@section('content')
    <div class="max-w-6xl mx-auto bg-white p-6 rounded shadow">

        {{-- Header --}}
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-xl font-semibold">Products</h1>

            <a href="{{ route('products.create') }}"
               class="rounded bg-blue-600 px-4 py-2 text-white hover:bg-blue-700">
                Add Product
            </a>
        </div>

        {{-- Table --}}
        <div class="overflow-x-auto">
            <table class="w-full border border-gray-200 text-sm">
                <thead class="bg-gray-100">
                <tr>
                    <th class="border px-3 py-2 text-left">#</th>
                    <th class="border px-3 py-2 text-left">Name</th>
                    <th class="border px-3 py-2 text-left">SKU</th>
                    <th class="border px-3 py-2 text-left">Price</th>
                    <th class="border px-3 py-2 text-center w-40">Actions</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($products as $product)
                    <tr class="hover:bg-gray-50">
                        <td class="border px-3 py-2">{{ $product->id }}</td>
                        <td class="border px-3 py-2">{{ $product->name }}</td>
                        <td class="border px-3 py-2">{{ $product->sku }}</td>
                        <td class="border px-3 py-2">
                            {{ number_format($product->price, 2) }}
                        </td>
                        <td class="border px-3 py-2 text-center space-x-1">
                            <a href="{{ route('products.edit', $product) }}"
                               class="inline-block rounded bg-yellow-500 px-2 py-1 text-white hover:bg-yellow-600">
                                Edit
                            </a>

                            <form action="{{ route('products.destroy', $product) }}"
                                  method="POST"
                                  class="inline"
                                  onsubmit="return confirm('Delete this product?')">
                                @csrf
                                @method('DELETE')

                                <button
                                    class="rounded bg-red-600 px-2 py-1 text-white hover:bg-red-700">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5"
                            class="border px-3 py-6 text-center text-gray-500">
                            No products found
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
