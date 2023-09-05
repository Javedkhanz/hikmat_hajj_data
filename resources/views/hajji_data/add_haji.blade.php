<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add haji') }}
        </h2>
    </x-slot>
    @if (Session::has('success'))
        <div class="succces text-black absolute bottom-10 right-10 w-fit p-4 bg-green-500">
            {{ Session::get('success') }}
        </div>
    @endif
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="text-2xl font-semibold mb-4 text-center">Hajji Data Form</h2>
                    <form action="{{ route('add_hajji.index') }}" method="POST" class="grid grid-cols-2 gap-4"
                        enctype="multipart/form-data">
                        @csrf
                        <!-- Personal Image -->
                        <div class="mb-4">
                            <label for="image" class="block font-semibold text-gray-700">Upload Image</label>
                            <input type="file" name="image" id="image" accept="image/*"
                                onchange="previewImage()">
                        </div>
                        <div id="imagePreview" class="mt-4"></div>

                        <script>
                            function previewImage() {
                                const image = document.getElementById("image");
                                const imagePreview = document.getElementById("imagePreview");

                                if (image.files && image.files[0]) {
                                    const reader = new FileReader();

                                    reader.onload = function(e) {
                                        const img = document.createElement("img");
                                        img.src = e.target.result;
                                        img.style.width = "120px";
                                        img.style.height = "120px";
                                        imagePreview.innerHTML = "";
                                        imagePreview.appendChild(img);
                                    };

                                    reader.readAsDataURL(image.files[0]);
                                }
                            }
                        </script>
                        <!-- Personal Information -->
                        <div class="mb-4 ">
                            <label for="full_name" class="block font-semibold text-gray-700">Full Name</label>
                            <input type="text" name="full_name" id="full_name" class="w-full p-2 border rounded-md">
                        </div>
                        <div class="mb-4 ">
                            <label for="father_name" class="block font-semibold text-gray-700">Father Name</label>
                            <input type="text" name="father_name" id="father_name"
                                class="w-full p-2 border rounded-md">
                        </div>


                        <!-- Hajj Badal Total Money-->
                        <div class="mb-4">
                            <label for="gender" class="block font-semibold text-gray-700">Gender</label>
                            <select name="gender" id="gender" class="w-full p-2 border rounded-md">
                                <option value="">Select Gender</option>
                                <option value="male">male</option>
                                <option value="female">female</option>
                                <option value="others">others</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="husband_name" class="block font-semibold text-gray-700">husband name</label>
                            <input type="text" name="husband_name" id="husband_name"
                                class="w-full p-2 border rounded-md">
                        </div>



                        <!-- cnic Information -->
                        <div class="mb-4 ">
                            <label for="cnic_number" class="block font-semibold text-gray-700">CNIC
                                Number</label>
                            <input type="text" name="cnic_number" id="cnic_number"
                                class="w-full p-2 border rounded-md">
                        </div>
                        <div class="mb-4">
                            <label for="issue_date" class="block font-semibold text-gray-700">CNIC Exp
                                Date</label>
                            <input type="date" name="cnic_expiry_date" id="cnic_expiry_date"
                                class="w-full p-2 border rounded-md">
                        </div>

                        <!-- Passport Information -->
                        <div class="mb-4 ">
                            <label for="passport_number" class="block font-semibold text-gray-700">Passport
                                Number</label>
                            <input type="text" name="passport_number" id="passport_number"
                                class="w-full p-2 border rounded-md">
                        </div>
                        <div class="mb-4">
                            <label for="issue_date" class="block font-semibold text-gray-700">Passport Exp
                                Date</label>
                            <input type="date" name="passport_expiry_date" id="passport_expiry_date"
                                class="w-full p-2 border rounded-md">
                        </div>

                        <!-- Blood Group & DOB -->
                        <div class="mb-4">
                            <label for="dob" class="block font-semibold text-gray-700">Date of Birth</label>
                            <input type="date" name="dob" id="dob" class="w-full p-2 border rounded-md">
                        </div>

                        <div class="mb-4">
                            <label for="blood_group" class="block font-semibold text-gray-700">Blood Group</label>
                            <select name="blood_group" id="blood_group" class="w-full p-2 border rounded-md">
                                <option value="">select gender</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                            </select>
                        </div>

                        <!-- Contact Information -->
                        <div class="mb-4 ">
                            <label for="phone" class="block font-semibold text-gray-700">Phone</label>
                            <input type="tel" name="phone" id="phone"
                                class="w-full p-2 border rounded-md">
                        </div>
                        <div class="mb-4 ">
                            <label for="email" class="block font-semibold text-gray-700">Email</label>
                            <input type="email" name="email" id="email"
                                class="w-full p-2 border rounded-md">
                        </div>

                        <!-- District and Tehsil -->
                        <div class="mb-4">
                            <label for="district" class="block font-semibold text-gray-700">District</label>
                            <input type="text" name="district" id="district"
                                class="w-full p-2 border rounded-md">
                        </div>
                        <div class="mb-4">
                            <label for="tehsil" class="block font-semibold text-gray-700">Tehsil</label>
                            <input type="text" name="tehsil" id="tehsil"
                                class="w-full p-2 border rounded-md">
                        </div>
                        <!-- Address Information -->
                        <div class="mb-4 col-span-2">
                            <label for="address" class="block font-semibold text-gray-700">Address</label>
                            <textarea name="address" id="address" rows="4" class="w-full p-2 border rounded-md"></textarea>
                        </div>

                        <!-- Hajj Badal Total Money-->
                        <div class="mb-4">
                            <label for="hajj_badal" class="block font-semibold text-gray-700">Hajj Badal</label>
                            <select name="hajj_badal" id="hajj_badal" class="w-full p-2 border rounded-md">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>




                        <hr class="col-span-2 bg-black p-[1px] ">


                        <!-- Heir Information -->
                        <div class="mb-4 ">
                            <label for="heir_name" class="block font-semibold text-gray-700">Heir Name</label>
                            <input type="text" name="heir_name" id="heir_name"
                                class="w-full p-2 border rounded-md">
                        </div>
                        <div class="mb-4">
                            <label for="heir_relation" class="block font-semibold text-gray-700">Relation With Heir
                            </label>
                            <input type="text" name="heir_relation" id="heir_relation"
                                class="w-full p-2 border rounded-md">
                        </div>
                        <div class="mb-4">
                            <label for="heir_number" class="block font-semibold text-gray-700">Heir Number</label>
                            <input type="tel" name="heir_number" id="heir_number"
                                class="w-full p-2 border rounded-md">
                        </div>
                        <div class="mb-4">
                            <label for="heir_cnic" class="block font-semibold text-gray-700">Heir CNIC</label>
                            <input type="text" name="heir_cnic" id="heir_cnic"
                                class="w-full p-2 border rounded-md">
                        </div>


                        <hr class="col-span-2 bg-black p-[1px] ">
                        <!-- Emergency Number -->
                        <div class="mb-4">
                            <label for="emergency_number" class="block font-semibold text-gray-700">Emergency
                                Number</label>
                            <input type="tel" name="emergency_number" id="emergency_number"
                                class="w-full p-2 border rounded-md">
                        </div>
                        <div class="mb-4">
                            <label for="account_type" class="block font-semibold text-gray-700">Account Type*</label>
                            <select name="account_type" id="account_type" class="w-full p-2 border rounded-md">
                                <option value="">select account type</option>
                                <option value="Individual">Individual</option>
                                <option value="Group">Group</option>
                            </select>
                        </div>

                         {{-- group --}}
                         <div class="mb-4" id="group_div" style="display: none;">
                            <label for="group" class="block font-semibold text-gray-700">group name</label>
                            <select name="group" id="group" class="w-full p-2 border rounded-md">
                                @if ($groups->isEmpty())
                                    <option value="" disabled selected>Add group first</option>
                                @else
                                    @foreach ($groups as $group)
                                        <option value="">select group name</option>
                                        <option value="{{ $group->id }}">{{ $group->group_name }} </option>
                                    @endforeach
                                @endif
                            </select>
                        </div>

                        {{-- Individual --}}
                        <div class="mb-4" id="individual_div" style="display: none;">
                            <label for="total_money" class="block font-semibold text-gray-700">Total Money</label>
                            <input type="number" name="total_money" id="total_money"
                                class="w-full p-2 border rounded-md">
                        </div>


                        <!-- Submit Button -->
                        <div class="col-span-2 mt-6 jus">
                            <button type="submit"
                                class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>



</x-app-layout>
