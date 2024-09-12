<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List of Patients') }}
        </h2>
    </x-slot>
    <div class="flex pt-16 overflow-hidden bg-gray-50 dark:bg-gray-900">
        <div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 dark:bg-gray-900">
            <section class="my-8 bg-white dark:bg-gray-900">
                <div class="w-full py-8 px-4 lg:py-16">
                    <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white text-center">Add a Patient</h2>
                    <form action="{{ route('patients.store') }}" method="POST" id="patient_create">
                        @csrf
                        <div>
                            <div class="flex justify-center flex-wrap space-x-4">
                                <!-- First Name Input -->
                                <!-- <input type="hidden" name="mode" id="mode" value="" /> -->
                                <div>
                                    <label for="first_name"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        First Name
                                    </label>
                                    <input type="text" name="first_name" id="first_name"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="Enter first name" required>
                                </div>
                                <!-- Middle Name Input -->
                                <div>
                                    <label for="middle_name"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Middle Name
                                    </label>
                                    <input type="text" name="middle_name" id="middle_name"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="Enter first name">
                                </div>

                                <!-- Last Name Input -->
                                <div>
                                    <label for="last_name"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Last Name
                                    </label>
                                    <input type="text" name="last_name" id="last_name"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="Enter last name" required>
                                </div>
                                <!-- Date of Birth Input -->
                                <div>
                                    <label for="date_birth"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Date of Birth
                                    </label>
                                    <input type="date" name="date_birth" id="date_birth"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="Enter date of birth">
                                </div>
                                <div>
                                    <label for="address"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Address
                                    </label>
                                    <input type="text" name="address" id="address"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="Enter address" required>
                                </div>
                                <div>
                                    <label for="city"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        City/State/Zip
                                    </label>
                                    <input type="text" name="city" id="city"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="Enter City/State/Zip" required>
                                </div>
                                <div>
                                    <label for="country"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Country
                                    </label>
                                    <input type="text" name="country" id="country"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="Enter country" required>
                                </div>
                                <div>
                                    <label for="phone"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Phone
                                    </label>
                                    <input type="text" name="phone" id="phone"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="Enter phone" required>
                                </div>
                                <!-- Email Input -->
                                <div>
                                    <label for="email"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Email
                                    </label>
                                    <input type="email" name="email" id="email"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="Enter email" required>
                                </div>
                                <div>
                                    <label for="family_info"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Family information
                                    </label>
                                    <input type="text" name="family_info" id="family_info"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="Enter Family information">
                                </div>
                                <!-- Blood Type Select -->
                                <div>
                                    <label for="blood_type"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Blood
                                        Type</label>
                                    <select id="blood_type" required
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                        <!-- <option selected="A">A</option> -->
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="AB">AB</option>
                                        <option value="O">O</option>
                                    </select>
                                </div>
                                <!-- Allergies Input -->
                                <div>
                                    <label for="allergies"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Allergies
                                    </label>
                                    <input type="text" name="allergies" id="allergies"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="Enter allergies">
                                </div>
                                <!-- Dietary Input -->
                                <div>
                                    <label for="dietary"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Dietary Restrictions or Preferences
                                    </label>
                                    <input type="text" name="dietary" id="dietary"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="Enter dietary">
                                </div>
                                <!-- Medications Input -->
                                <div>
                                    <label for="medications"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Medications
                                    </label>
                                    <input type="text" name="medications" id="medications"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="Enter dietary">
                                </div>
                                <!-- Medical conditions Input -->
                                <div>
                                    <label for="medical_cond"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Medical Conditions
                                    </label>
                                    <input type="text" name="medical_cond" id="medical_cond"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="Enter medical conditions">
                                </div>
                                <div>
                                    <label for="Surgeries"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Surgeries
                                    </label>
                                    <input type="text" name="surgeries" id="surgeries"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="Enter surgeries">
                                </div>
                                <div>
                                    <label for="accidents"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Accidents
                                    </label>
                                    <input type="text" name="accidents" id="accidents"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="Enter accidents" required>
                                </div>
                                <div>
                                    <label for="fm_history"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Family Medical History
                                    </label>
                                    <input type="text" name="fm_history" id="fm_history"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="Enter Family Medical History" required>
                                </div>
                                <div>
                                    <label for="ref_name"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Referal name
                                    </label>
                                    <input type="text" name="ref_name" id="ref_name"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="Enter Referal name" required>
                                </div>
                                <div>
                                    <label for="hdyh_about_us"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        How did you hear about us
                                    </label>
                                    <input type="text" name="hdyh_about_us" id="hdyh_about_us"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="Enter How did you hear about us" required>
                                </div>
                                <div>
                                    <label for="goal"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Goal
                                    </label>
                                    <input type="text" name="goal" id="goal"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="Enter Family Medical History" required>
                                </div>
                                <!-- <div class="sm:col-span-2">
                                    <label for="description"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                                    <textarea id="description" rows="8"
                                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="Your description here"></textarea>
                                </div> -->
                            </div>
                        </div>
                        <!-- <button type="submit"
                            class="inline-flex justify-center items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                            Create Patient
                        </button> -->
                        <a href="{{route('patients.index')}}"
                            class="inline-flex justify-center items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                            Previous
                        </a>
                        <button onClick="save_next()"
                            class="inline-flex justify-center items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                            Save and Next
                        </button>
                    </form>
                </div>
            </section>
        </div>
    </div>
    <script>
        function save_next() {
            event.preventDefault();
            // Get the form data
            const form = document.getElementById('patient_create');
            const formData = new FormData(form);

            // Convert FormData to JSON (optional)
            const formDataObj = {};
            formData.forEach((value, key) => {
                formDataObj[key] = value;
            });

            console.log('Form Data:', formDataObj);

            // Now you can send the form data using fetch (AJAX request)
            fetch('/create_patient_next', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content') // Laravel CSRF token
                },
                body: JSON.stringify(formDataObj)
            })
                .then(response => response.json())
                .then(data => {
                    console.log('Success:', data);
                    // Handle success or update the UI
                })
                .then(
                    location.href="{{route('intakes.create')}}"
                )
                .catch(error => {
                    console.error('Error:', error);
                });
        }
    </script>
</x-app-layout>