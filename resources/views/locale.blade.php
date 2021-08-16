
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Languages') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid gap-2 grid-cols-3 overflow-hidden shadow-sm sm:rounded-lg">
                
                
                    <div class="w-1/5 max-w-xs sm:w-full">
                        @if (session()->has('success'))
                        <div class="fixed bg-green-500 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-sm">
                            <p>
                                {{ session()->get('success') }}
                            </p>
                        </div>
                    @endif
                    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" 
                          method="POST" 
                          action="{{ url('languages') }}">
                        @csrf
                      

                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                Name
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                    id="name" 
                                    type="text" 
                                    name="name"
                                    value=""
                                    >
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="slug">
                                Slug
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                    id="slug" 
                                    type="text" 
                                    name="slug"
                                    
                                   >
                        </div>

                      
                        
                          <button class="w-full mt-3 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                             Submit
                          </button>
                        
                    </form>
                        
                    </div>
                
                    <div class="flex-1 col-span-2 primary -ml-5 overflow-x-auto sm:-mx-6 sm:w-full lg:-mx-12">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50 dark:bg-gray-600 dark:text-gray-200">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Id</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Name</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Slug</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Date</th>
                                    <th scope="col" class="relative px-6 py-3">Edit</th>
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr></tr>
                            
                                    <!-- More items... -->
                                    @foreach ($locale as $lang)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $lang->id }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $lang->name }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $lang->slug }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $lang->created_at->diffForHumans() }}</td>
                                            <td class="px-6 py-4 text-center text-sm">
                                                <a href="#" class="m-1 py-2 px-4 bg-green-400 rounded">Edit</a> 
                                                <a href="#" class="m-1 p-2 bg-red-600 rounded text-white">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">id</td>
                                    <td class="px-6 py-4 whitespace-nowrap">Name</td>
                                    <td class="px-6 py-4 whitespace-nowrap">slug</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                     Date
                                    </td>
                                    <td class="px-6 py-4 text-center text-sm">Edit / Delete</td>
                                </tr>
                                <!-- More items... -->
                                </tbody>
                            </table>
                            <div class="m-2 p-2">Pagination</div>
                                 {{ $locale->links() }}
                            </div>
                        </div>
                    </div>
                
            </div>
        </div>

        
    </div>
</x-app-layout>