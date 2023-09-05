<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add group') }}
        </h2>
    </x-slot>
    @if (Session::has('success'))
        <div class="text-black absolute bottom-10 right-10 w-max p-4 bg-green-500 rounded-md">
            {{ Session::get('success') }}
        </div>
    @endif
    <div class="py-12">

        <!-- Display the validation errors if any -->
        @if ($errors->any())
            <div class="text-red-600 absolute bottom-10 right-10 w-max p-4 bg-red-200 rounded-md">
                <ul class="list-disc pl-4">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="text-2xl font-semibold mb-4 text-center">Add group </h2>

                    <form action="{{ route('hajji_group.store') }}" method="POST"
                        class="max-w-lg mt-5 mx-auto p-4 bg-white shadow-md">
                        @csrf

                        <div class="flex flex-col mb-4">
                            <label for="group_name" class="mb-2 font-bold text-lg text-gray-900">Group Name</label>
                            <input type="text" name="group_name" id="group_name" value="{{ old('group_name') }}"
                                required class="border border-gray-400 p-2 rounded-md">
                        </div>
                        <div class="flex flex-col mb-4">
                            <label for="group_cnic" class="mb-2 font-bold text-lg text-gray-900">Group CNIC</label>
                            <input type="text" name="group_cnic" id="group_cnic" value="{{ old('group_cnic') }}"
                                required class="border border-gray-400 p-2 rounded-md">
                        </div>
                        <div class="flex flex-col mb-4">
                            <label for="total_group_member" class="mb-2 font-bold text-lg text-gray-900">Total Group
                                Member</label>
                            <input type="number" name="total_group_member" id="total_group_member"
                                value="{{ old('total_group_member') }}" class="border border-gray-400 p-2 rounded-md">
                        </div>
                        <div class="flex justify-center">
                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-md">Create
                                Group</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
