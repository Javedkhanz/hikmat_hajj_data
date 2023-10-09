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
                    <!-- In your blade file -->
                    @if ($errors->any())
                        <div class="bg-red-100 border border-red-400 text-red-700 p-3 rounded">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form autocomplete="off" action="{{ route('HajiData.index') }}" method="POST"
                        class="grid grid-cols-2 gap-4" enctype="multipart/form-data">
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

                        <!-- Full Name -->
                        <div class="mb-4">
                            <label for="full_name" class="block font-semibold text-gray-700">Full Name*</label>
                            <input type="text" required name="full_name" id="full_name"
                                class="w-full p-2 border rounded-md @error('full_name') border-red-500 @enderror"
                                value="{{ old('full_name') }}">
                            @error('full_name')
                                <p class="text-red-500 mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Father Name -->
                        <div class="mb-4">
                            <label for="father_name" class="block font-semibold text-gray-700">Father Name</label>
                            <input type="text" name="father_name" id="father_name"
                                class="w-full p-2 border rounded-md @error('father_name') border-red-500 @enderror"
                                value="{{ old('father_name') }}">
                            @error('father_name')
                                <p class="text-red-500 mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Gender -->
                        <div class="mb-4">
                            <label for="gender" class="block font-semibold text-gray-700">Gender</label>
                            <select name="gender" id="gender"
                                class="w-full p-2 border rounded-md @error('gender') border-red-500 @enderror">
                                <option value="">Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="others">Others</option>
                            </select>
                            @error('gender')
                                <p class="text-red-500 mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Husband Name -->
                        <div class="mb-4">
                            <label for="husband_name" class="block font-semibold text-gray-700">Husband Name</label>
                            <input type="text" name="husband_name" id="husband_name"
                                class="w-full p-2 border rounded-md @error('husband_name') border-red-500 @enderror"
                                value="{{ old('husband_name') }}">
                            @error('husband_name')
                                <p class="text-red-500 mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- CNIC Number -->
                        <div class="mb-4">
                            <label for="cnic_number" class="block font-semibold text-gray-700">CNIC Number*</label>
                            <input type="text" required name="cnic_number" id="cnic_number"
                                class="w-full p-2 border rounded-md @error('cnic_number') border-red-500 @enderror"
                                value="{{ old('cnic_number') }}">
                            @error('cnic_number')
                                <p class="text-red-500 mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- CNIC Expiry Date -->
                        <div class="mb-4">
                            <label for="cnic_expiry_date" class="block font-semibold text-gray-700">CNIC Expiry
                                Date</label>
                            <input type="date" name="cnic_expiry_date" id="cnic_expiry_date"
                                class="w-full p-2 border rounded-md @error('cnic_expiry_date') border-red-500 @enderror"
                                value="{{ old('cnic_expiry_date') }}">
                            @error('cnic_expiry_date')
                                <p class="text-red-500 mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Passport Number -->
                        <div class="mb-4">
                            <label for="passport_number" class="block font-semibold text-gray-700">Passport
                                Number</label>
                            <input type="text" name="passport_number" id="passport_number"
                                class="w-full p-2 border rounded-md @error('passport_number') border-red-500 @enderror"
                                value="{{ old('passport_number') }}">
                            @error('passport_number')
                                <p class="text-red-500 mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Passport Expiry Date -->
                        <div class="mb-4">
                            <label for="passport_expiry_date" class="block font-semibold text-gray-700">Passport Expiry
                                Date</label>
                            <input type="date" name="passport_expiry_date" id="passport_expiry_date"
                                class="w-full p-2 border rounded-md @error('passport_expiry_date') border-red-500 @enderror"
                                value="{{ old('passport_expiry_date') }}">
                            @error('passport_expiry_date')
                                <p class="text-red-500 mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Date of Birth -->
                        <div class="mb-4">
                            <label for="dob" class="block font-semibold text-gray-700">Date of Birth</label>
                            <input type="date" name="dob" id="dob"
                                class="w-full p-2 border rounded-md @error('dob') border-red-500 @enderror"
                                value="{{ old('dob') }}">
                            @error('dob')
                                <p class="text-red-500 mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Blood Group -->
                        <div class="mb-4">
                            <label for="blood_group" class="block font-semibold text-gray-700">Blood Group</label>
                            <select name="blood_group" id="blood_group"
                                class="w-full p-2 border rounded-md @error('blood_group') border-red-500 @enderror">
                                <option value="">Select Blood Group</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                            </select>
                            @error('blood_group')
                                <p class="text-red-500 mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Contact Information -->
                        <div class="mb-4">
                            <label for="phone" class="block font-semibold text-gray-700">Phone</label>
                            <input type="tel" name="phone" id="phone"
                                class="w-full p-2 border rounded-md @error('phone') border-red-500 @enderror"
                                value="{{ old('phone') }}">
                            @error('phone')
                                <p class="text-red-500 mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="email" class="block font-semibold text-gray-700">Email</label>
                            <input type="email" name="email" id="email"
                                class="w-full p-2 border rounded-md @error('email') border-red-500 @enderror"
                                value="{{ old('email') }}">
                            @error('email')
                                <p class="text-red-500 mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- District and Tehsil -->
                        <div class="mb-4">
                            <label for="district" class="block font-semibold text-gray-700">District</label>
                            <input type="text" name="district" id="district"
                                class="w-full p-2 border rounded-md @error('district') border-red-500 @enderror"
                                value="{{ old('district') }}">
                            @error('district')
                                <p class="text-red-500 mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="tehsil" class="block font-semibold text-gray-700">Tehsil</label>
                            <input type="text" name="tehsil" id="tehsil"
                                class="w-full p-2 border rounded-md @error('tehsil') border-red-500 @enderror"
                                value="{{ old('tehsil') }}">
                            @error('tehsil')
                                <p class="text-red-500 mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Address Information -->
                        <div class="mb-4 col-span-2">
                            <label for="address" class="block font-semibold text-gray-700">Address</label>
                            <textarea name="address" id="address" rows="4"
                                class="w-full p-2 border rounded-md @error('address') border-red-500 @enderror">{{ old('address') }}</textarea>
                            @error('address')
                                <p class="text-red-500 mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Hajj Badal -->
                        <div class="mb-4">
                            <label for="hajj_badal" class="block font-semibold text-gray-700">Hajj Badal</label>
                            <select name="hajj_badal" id="hajj_badal"
                                class="w-full p-2 border rounded-md @error('hajj_badal') border-red-500 @enderror">
                                <option value="">Select Type</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                            @error('hajj_badal')
                                <p class="text-red-500 mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <hr class="col-span-2 bg-black p-[1px]">

                        <!-- Heir Information -->
                        <div class="mb-4">
                            <label for="heir_name" class="block font-semibold text-gray-700">Heir Name</label>
                            <input type="text" name="heir_name" id="heir_name"
                                class="w-full p-2 border rounded-md @error('heir_name') border-red-500 @enderror"
                                value="{{ old('heir_name') }}">
                            @error('heir_name')
                                <p class="text-red-500 mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="heir_relation" class="block font-semibold text-gray-700">Relation With
                                Heir</label>
                            <input type="text" name="heir_relation" id="heir_relation"
                                class="w-full p-2 border rounded-md @error('heir_relation') border-red-500 @enderror"
                                value="{{ old('heir_relation') }}">
                            @error('heir_relation')
                                <p class="text-red-500 mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="heir_number" class="block font-semibold text-gray-700">Heir Number</label>
                            <input type="tel" name="heir_number" id="heir_number"
                                class="w-full p-2 border rounded-md @error('heir_number') border-red-500 @enderror"
                                value="{{ old('heir_number') }}">
                            @error('heir_number')
                                <p class="text-red-500 mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="heir_cnic" class="block font-semibold text-gray-700">Heir CNIC</label>
                            <input type="text" name="heir_cnic" id="heir_cnic"
                                class="w-full p-2 border rounded-md @error('heir_cnic') border-red-500 @enderror"
                                value="{{ old('heir_cnic') }}">
                            @error('heir_cnic')
                                <p class="text-red-500 mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <hr class="col-span-2 bg-black p-[1px]">

                        <!-- Emergency Number -->
                        <div class="mb-4">
                            <label for="emergency_number" class="block font-semibold text-gray-700">Emergency
                                Number</label>
                            <input type="tel" name="emergency_number" id="emergency_number"
                                class="w-full p-2 border rounded-md @error('emergency_number') border-red-500 @enderror"
                                value="{{ old('emergency_number') }}">
                            @error('emergency_number')
                                <p class="text-red-500 mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <hr class="col-span-2 bg-black p-[1px]">

                        <!-- Account Type -->
                        <div class="mb-4" id="account_type_dev">
                            <label for="account_type" class="block font-semibold text-gray-700">Account Type*</label>
                            <select name="account_type" id="account_type"
                                class="w-full p-2 border rounded-md @error('account_type') border-red-500 @enderror">
                                <option value="">Select Account Type</option>
                                <option value="Individual">Individual</option>
                                <option value="Group">Group</option>
                            </select>
                            @error('account_type')
                                <p class="text-red-500 mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Group --}}
                        <div class="mb-4 hidden" id="group_dev">
                            <label for="group_id" class="block font-semibold text-gray-700">Group Name*</label>
                            <select name="group_id" id="group_id"
                                class="w-full p-2 border rounded-md @error('group_id') border-red-500 @enderror">
                                @if ($groups->isEmpty())
                                    <option value="" disabled selected>Add Group First</option>
                                @else
                                    <option value="" selected>Select Group Name</option>
                                    @foreach ($groups as $group)
                                        <option value="{{ $group->id }}">{{ $group->group_name }}</option>
                                    @endforeach
                                @endif
                            </select>
                            @error('group')
                                <p class="text-red-500 mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Individual --}}
                        <div class="mb-4 hidden" id="total_money_dev">
                            <label for="total_money" class="block font-semibold text-gray-700">Total Money*</label>
                            <input type="number" name="total_money" id="total_money"
                                class="w-full p-2 border rounded-md @error('total_money') border-red-500 @enderror"
                                value="{{ old('total_money') }}" oninput="convertToEnglishWords(this.value)">
                            @error('total_money')
                                <p class="text-red-500 mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div id="englishNumber"></div>

                        <!-- Submit Button -->
                        <div class="col-span-2 mt-6 justify-self-center">
                            <button type="submit"
                                class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">Submit</button>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
    <script>
        // Get the select element with the id "account_type"
        var account_type = document.getElementById("account_type");

        // Add an onchange event listener to the select element
        account_type.addEventListener("change", function() {
            // Get the value of the selected option
            var value = account_type.value;

            // Get the div elements with the ids "group" and "total_money"
            var group = document.getElementById("group_dev");
            var total_money = document.getElementById("total_money_dev");

            // Show or hide the div elements based on the value
            if (value == "Individual") {
                // Show the div element with the id "total_money"
                total_money.style.display = "block";
                // Hide the div element with the id "group"
                group.style.display = "none";
                group.value = "";


                // Add the required attribute for the element with the id "total_money"
                total_money.setAttribute("required", "required");

                // Remove the required attribute for the element with the id "group"
                group.removeAttribute("required");

            } else if (value == "Group") {
                // Show the div element with the id "group"
                group.style.display = "block";
                // Hide the div element with the id "total_money"
                total_money.style.display = "none";
                total_money.value = "";

                group.setAttribute("required", "required");

                // Remove the required attribute for the element with the id "total_money"
                total_money.removeAttribute("required");

            } else {
                // Hide both div elements
                group.style.display = "none";
                total_money.style.display = "none";
                group.value = "";
                total_money.value = "";
                account_type.value = "";

                // Remove the required attribute for both elements
                group.removeAttribute("required");
                total_money.removeAttribute("required");
            }
        });

        // A function that converts numbers to words in English
        function numberToWords(num) {
            // Define the arrays for the words
            const englishNumbers = ['', 'One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine'];
            const englishTens = ['', ' Ten', ' Twenty', ' Thirty', ' Forty', ' Fifty', ' Sixty', ' Seventy', ' Eighty',
                ' Ninety'
            ];
            const englishHundreds = ['', ' Hundred', ' Two Hundred', ' Three Hundred', ' Four Hundred', ' Five Hundred',
                ' Six Hundred', ' Seven Hundred', ' Eight Hundred', ' Nine Hundred'
            ];
            const englishThousands = ['', ' Thousand', ' Million', ' Billion'];

            // Handle some special cases
            if (num === 0) return "Zero"; // Return zero if the number is zero
            if (num < 0) return "Negative " + numberToWords(-num); // Add negative prefix if the number is negative

            // Initialize an array to store the words
            let words = [];

            // Loop through the groups of three digits from right to left
            for (let i = 0; num > 0; i++) {
                // Get the current group of three digits
                let group = num % 1000;

                // Convert the group to words if it is not zero
                if (group > 0) {
                    // Get the word for the group's position
                    let position = englishThousands[i];

                    // Get the word for the hundreds place
                    let hundreds = englishHundreds[Math.floor(group / 100)];

                    // Get the word for the tens and ones place
                    let tensAndOnes = "";
                    let remainder = group % 100;
                    if (remainder < 10) {
                        // Use the englishNumbers array if the remainder is less than 10
                        tensAndOnes = englishNumbers[remainder];
                    } else if (remainder < 20) {
                        // Use a switch statement if the remainder is between 10 and 19
                        switch (remainder) {
                            case 10:
                                tensAndOnes = "Ten";
                                break;
                            case 11:
                                tensAndOnes = "Eleven";
                                break;
                            case 12:
                                tensAndOnes = "Twelve";
                                break;
                            case 13:
                                tensAndOnes = "Thirteen";
                                break;
                            case 14:
                                tensAndOnes = "Fourteen";
                                break;
                            case 15:
                                tensAndOnes = "Fifteen";
                                break;
                            case 16:
                                tensAndOnes = "Sixteen";
                                break;
                            case 17:
                                tensAndOnes = "Seventeen";
                                break;
                            case 18:
                                tensAndOnes = "Eighteen";
                                break;
                            case 19:
                                tensAndOnes = "Nineteen";
                                break;
                        }
                    } else {
                        // Use the englishTens and englishNumbers arrays if the remainder is between 20 and 99
                        let tens = englishTens[Math.floor(remainder / 10)];
                        let ones = englishNumbers[remainder % 10];
                        tensAndOnes = tens + ones;
                    }

                    // Join the words for the group with spaces and trim any extra spaces
                    let groupWords = (hundreds + tensAndOnes + position).trim();

                    // Add the group words to the beginning of the words array
                    words.unshift(groupWords);
                }

                // Divide the number by 1000 to move to the next group
                num = Math.floor(num / 1000);
            }

            // Join the words array with spaces and return the result
            return words.join(" ");
        }

        // A function that updates the englishNumber div with the input value in words
        function convertToEnglishWords(value) {
            // Get the div element by id
            let div = document.getElementById("englishNumber");

            // Convert the input value to a number and call numberToWords function
            let num = Number(value);
            let words = numberToWords(num);

            // Update the div innerHTML with the words and add a currency suffix
            div.innerHTML = words + " Rupees";
        }
    </script>

</x-app-layout>
