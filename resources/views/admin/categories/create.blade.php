<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('admin.categories.index') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white" >Category Index</a>
            </div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                    <form method="POST" action="{{ route('admin.categories.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="grid gap-6 mb-6 lg:grid-cols-2">
                            <div>
                                <label for="name" class="flex-grow px-4 pb-4 md:block md:pb-0 md:overflow-y-auto text-gray-900 dark:text-white">Post Title</label>
                                <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Title" required>
                            </div>
                            <div>
                                <label for="image" class="flex-grow px-4 pb-4 md:block md:pb-0 md:overflow-y-auto text-gray-900 dark:text-white">Post Image</label>
                                <input type="file" id="image" name="image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            </div>
                            <div>
                                <label for="description" class="flex-grow px-4 pb-4 md:block md:pb-0 md:overflow-y-auto text-gray-900 dark:text-white">Description</label>
                                <textarea type="text" id="description" rows="3" name="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Description" required></textarea>
                            </div>  
                            <div class="mt-6 p-4">
                                <button type="submit" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
                
        </div>
    </div>
</x-admin-layout>
