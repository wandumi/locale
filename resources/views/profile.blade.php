<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('profile.Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid gap-2 grid-cols-3 overflow-hidden shadow-sm sm:rounded-lg">
                
                
                    <div class="w-1/5 max-w-xs sm:w-full">
                            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" 
                                method="POST" 
                                action="{{ route('profile.update', ['profile' => $User->id] ) }}"
                                >
                                @csrf
                                @method('PUT') 
    
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                                        {{ __('form.Username')}}
                                    </label>
                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                            id="username" 
                                            type="text" 
                                            name="username"
                                            value="{{ $User->name }}"
                                            >
                                </div>
    
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                                        {{ __('profile.Email') }}
                                    </label>
                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                            id="email" 
                                            type="email" 
                                            name="email"
                                            value="{{ $User->email }}"
                                        >
                                </div>

                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                                        {{ __('Password') }}
                                    </label>
                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                            id="password" 
                                            type="password" 
                                            name="password"
                                            value=""
                                        >
                                </div>

    
                                <div class="inline-block relative w-64">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                                        {{__('profile.Language')}}
                                    </label>
                                    <select name="locale" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                        <option value="" disabled selected>Choose your language</option>
                                        @foreach ($Locale as $label)
                                            <option class="mx-auto" value="{{ $label->slug }}" {{$label->slug == $User->locale  ? 'selected' : ''}}>{{ $label->name }}</option>
                                        @endforeach
                                    </select>
                                    
                                </div>
                                
                                <button class="w-full mt-3 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                    {{__('profile.Update')}}
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
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Email</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Language</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Date</th>
                                    <th scope="col" class="relative px-6 py-3">Edit</th>
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr></tr>
                            
                                    <!-- More items... -->
                                    @foreach ($Users as $person)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $person->id }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $person->name }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $person->email }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $person->locale }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $person->created_at->diffForHumans() }}</td>
                                            <td class="px-6 py-4 text-center text-sm">
                                                <a href="#" class="m-1 py-2 px-4 bg-green-400 rounded">Edit</a> 
                                                <a href="#" class="m-1 p-2 bg-red-600 rounded text-white">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">id</td>
                                    <td class="px-6 py-4 whitespace-nowrap">Name</td>
                                    <td class="px-6 py-4 whitespace-nowrap">Email</td>
                                    <td class="px-6 py-4 whitespace-nowrap">Language</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                     Date
                                    </td>
                                    <td class="px-6 py-4 text-center text-sm">Edit / Delete</td>
                                </tr>
                                <!-- More items... -->
                                </tbody>
                            </table>
                            <div class="m-2 p-2">Pagination</div>
                            </div>
                        </div>
                    </div>
                
            </div>
        </div>

        
    </div>
</x-app-layout>