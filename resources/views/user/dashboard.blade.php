<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-bold mb-4">Welcome User!</h3>
                    <p>This is your user dashboard. Only users with user role can access this page.</p>
                    <div class="mt-4">
                        <p>Your Role: <span class="font-semibold">{{ Auth::user()->role }}</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> 