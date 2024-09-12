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
                    <form action="{{ route('intakes.store') }}" method="POST">
                        @csrf
                        <div>
                            <div class="flex justify-center flex-wrap space-x-4">
                                <!-- Energy Select -->
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
                                    <label for="energy_level"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Energy_Level</label>
                                    <select id="energy_level" name="energy_level" required
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">

                                        @for ($i = 1; $i <= 10; $i++)
                                            <option value="{{$i}}">level{{$i}}</option>
                                        @endfor
                                    </select>
                                </div>
                                <!-- Energy Select -->
                                <div>
                                    <label for="stress_level"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Stress_Level</label>
                                    <select id="stress_level" name="stress_level" required
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">

                                        @for ($i = 1; $i <= 10; $i++)
                                            <option value="{{$i}}">level{{$i}}</option>
                                        @endfor
                                    </select>
                                </div>
                                <!-- Body Discomfort -->
                                <div>
                                    <label for="body_discomfort"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Body
                                        Discomfort</label>
                                    <select id="body_discomfort" name="body_discomfort" required
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">

                                        @for ($i = 1; $i <= 10; $i++)
                                            <option value="{{$i}}">level{{$i}}</option>
                                        @endfor
                                    </select>
                                </div>
                                <!-- Weight Input -->
                                <div>
                                    <label for="weight"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Weight
                                    </label>
                                    <input type="text" name="weight" id="weight"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="Enter weight" required>
                                </div>


                                <!-- <fieldset>
                                    <legend class="sr-only">Checking items</legend>

                                    <div class="flex items-center mb-4">
                                        <input checked id="checkbox-1" type="checkbox" value=""
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-1"
                                            class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Waking up exhausted tired
                                        </label>
                                    </div>

                                    <div class="flex items-center mb-4">
                                        <input id="checkbox-2" type="checkbox" value=""
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-2"
                                            class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Waking up lightheaded
                                        </label>
                                    </div>

                                    <div class="flex items-center mb-4">
                                        <input id="checkbox-3" type="checkbox" value=""
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-3"
                                            class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Difficulty arising from bed in the morning
                                        </label>
                                    </div>

                                    <div class="flex mb-4">
                                        <div class="flex items-center h-5">
                                            <input id="helper-checkbox" aria-describedby="helper-checkbox-text"
                                                type="checkbox" value=""
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        </div>
                                        <div class="ms-2 text-sm">
                                            <label for="helper-checkbox"
                                                class="font-medium text-gray-900 dark:text-gray-300">Free shipping via
                                                Flowbite</label>
                                            <p id="helper-checkbox-text"
                                                class="text-xs font-normal text-gray-500 dark:text-gray-400">For orders
                                                shipped from $25 in books or $29 in other categories</p>
                                        </div>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="international-shipping-disabled" type="checkbox" value=""
                                            class="w-4 h-4 border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800"
                                            disabled>
                                        <label for="international-shipping-disabled"
                                            class="ms-2 text-sm font-medium text-gray-400 dark:text-gray-500">Eligible
                                            for international shipping (disabled)</label>
                                    </div>
                                </fieldset> -->


                                <!-- <div class="sm:col-span-2">
                                    <label for="description"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                                    <textarea id="description" rows="8"
                                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="Your description here"></textarea>
                                </div> -->
                            </div>
                        </div>
                        <button type="submit"
                            class="inline-flex justify-center items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                            Create Intake
                        </button>
                    </form>
                </div>
            </section>
        </div>
    </div>
</x-app-layout>