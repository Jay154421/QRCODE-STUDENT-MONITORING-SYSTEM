
<button onclick="openModal('updateModal{{ $student->id }}')"
    class="bg-blue-500 text-white rounded-md px-2 py-2 hover:bg-blue-300 transition">
    Update
</button>

<div id="updateModal{{ $student->id }}"
    class="fixed hidden z-50 inset-0 bg-gray-900 bg-opacity-60 overflow-y-auto h-full w-full px-4">
    <div class="relative top-5 mx-auto shadow-xl rounded-md bg-white w-[600px]">
        <div class="flex justify-end p-2">
            <button onclick="closeModal('updateModal{{ $student->id }}')" type="button"
                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <form action="{{ route('students.update', $student->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="flex flex-col">
                <div class="mx-4">
                    <h3 class="text-2xl font-normal text-gray-500 mt-4 mb-4">Update Student Information</h3>
                </div>
                <div class="flex flex-row justify-between">
                    <div class="mx-4 mb-2">
                        <p class="text-md">Id number</p>
                        <input type="text" name="idnumber" value="{{ $student->idnumber }}"
                            class="w-[270px] px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500">
                    </div>
                    <div class="mx-4 mb-2">
                        <p class="text-md">Name</p>
                        <input type="text" name="name" value="{{ $student->name }}"
                            class="w-[270px] px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500">
                    </div>
                </div>
                <div class="mx-4 mb-2">
                    <p class="text-md">Gender</p>
                    <input type="text" name="gender" value="{{ $student->gender }}"
                        class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500">
                </div>
                <div class="mx-4 mb-2">
                    <p class="text-md">Age</p>
                    <input type="text" name="age" value="{{ $student->age }}"
                        class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500">
                </div>
                <div class="mx-4 mb-2">
                    <p class="text-md">Year</p>
                    <input type="text" name="year" value="{{ $student->year }}"
                        class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500">
                </div>
                <div class="mx-4 mb-2">
                    <p class="text-md">Course</p>
                    <input type="text" name="course" value="{{ $student->course }}"
                        class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500">
                </div>
                <div class="mx-4 mb-2">
                    <p class="text-md">Address</p>
                    <input type="text" name="address" value="{{ $student->address }}"
                        class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500">
                </div>
                <div class="mx-4 mb-2">
                    <p class="text-md">Parent</p>
                    <input type="text" name="parent" value="{{ $student->parent }}"
                        class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500">
                </div>
                <div class="flex justify-center mb-2">
                    <button type="submit"
                        class="mt-4 text-white bg-indigo-600 hover:bg-indigo-700 focus:ring-4 focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Update
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    function openModal(modalId) {
        document.getElementById(modalId).style.display = 'block';
        document.getElementsByTagName('body')[0].classList.add('overflow-y-hidden');
    }

    function closeModal(modalId) {
        document.getElementById(modalId).style.display = 'none';
        document.getElementsByTagName('body')[0].classList.remove('overflow-y-hidden');
    }
</script>
