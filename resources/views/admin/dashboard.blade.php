<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Statistics Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <div class="text-gray-900 text-xl mb-2">Total Users</div>
                        <div class="text-3xl font-bold">{{ $stats['total_users'] }}</div>
                    </div>
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <div class="text-gray-900 text-xl mb-2">Total Products</div>
                        <div class="text-3xl font-bold">{{ $stats['total_products'] }}</div>
                    </div>
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <div class="text-gray-900 text-xl mb-2">Total Categories</div>
                        <div class="text-3xl font-bold">{{ $stats['total_categories'] }}</div>
                    </div>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                        <div class="space-y-2">
                            <a href="{{ route('admin.users.index') }}" class="block text-blue-600 hover:text-blue-800">Manage Users</a>
                            <a href="{{ route('admin.products.index') }}" class="block text-blue-600 hover:text-blue-800">Manage Products</a>
                            <a href="{{ route('admin.categories.index') }}" class="block text-blue-600 hover:text-blue-800">Manage Categories</a>
                        </div>
                    </div>
                </div>

                <!-- Latest Users -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-4">Latest Users</h3>
                        <div class="space-y-2">
                            @foreach($stats['latest_users'] as $user)
                                <div class="flex justify-between items-center">
                                    <span>{{ $user->name }}</span>
                                    <span class="text-sm text-gray-500">
                                        {{ $user->created_at ? $user->created_at->diffForHumans() : 'N/A' }}
                                    </span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- Latest Products -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h3 class="text-lg font-semibold mb-4">Latest Products</h3>
                    <div class="space-y-2">
                        @foreach($stats['latest_products'] as $product)
                            <div class="flex justify-between items-center">
                                <div>
                                    <span class="font-medium">{{ $product->name }}</span>
                                    <span class="text-sm text-gray-500"> - {{ $product->category->name }}</span>
                                </div>
                                <span class="text-sm text-gray-500">${{ number_format($product->price, 2) }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> 