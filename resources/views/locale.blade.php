<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Languages') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="w-full max-w-xs">
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
                </div>
            </div>
        </div>
    </div>
</x-app-layout>