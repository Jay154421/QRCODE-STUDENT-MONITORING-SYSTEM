<!-- Modal toggle -->
<button data-modal-target="default-modal" data-modal-toggle="default-modal"
    class=" modal-open text-white text-md border rounded-md px-4 py-1 bg-yellow-300 hover:bg-white hover:text-black">Add
    New</button>

<form action="{{ route('schedule.store') }}" method="POST">
    @csrf
    <!--Modal-->
    <div
        class=" z-50 modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center transition-opacity ease-out duration-300">
        <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50 transition-opacity ease-in duration-200">
        </div>

        <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">

            <div
                class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
                <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                    viewBox="0 0 18 18">
                    <path
                        d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                    </path>
                </svg>
                <span class="text-sm">(Esc)</span>
            </div>

            <!-- Add margin if you want to see some of the overlay behind the modal-->
            <div class="modal-content py-4 text-left px-6">
                <!--Title-->
                <div class="flex justify-between items-center pb-3">
                    <p class="tracking-wider text-4xl">Schedule</p>
                    <div class="modal-close cursor-pointer z-50">
                        <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18"
                            height="18" viewBox="0 0 18 18">
                            <path
                                d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                            </path>
                        </svg>
                    </div>
                </div>
                <div class="bg-gray-600"></div>

                <!--Body-->
                <div class="">
                    <div class="mx-8 mb-4 flex flex-col justify-center">
                        <label class=" text-sm">SUBJCODE</label>
                        <input type="Text" name="subjcode" class="rounded-md shadow-md" placeholder="Subjcode">
                    </div>
                    <div class="mx-8 mb-4 flex flex-col justify-center">
                        <label class="text-sm">SECTION</label>
                        <input type="Text" name="section" class="rounded-md shadow-md" placeholder="Section">
                    </div>
                    <div class="mx-8 mb-4 flex flex-col justify-center">
                        <label class="text-sm">DESCRIPTION</label>
                        <input type="Text" name="description" class="rounded-md shadow-md" placeholder="Description">
                    </div>
                    <div class="mx-8 mb-4 flex flex-col justify-center">
                        <label class="text-sm">SCHEDULE</label>
                        <input type="Text" name="schedule" class="rounded-md shadow-md" placeholder="Schedule">
                    </div>
                    <div class="mx-8 mb-4 flex flex-col justify-center">
                        <label class="text-sm">UNIT</label>
                        <input type="Text" name="unit" class="rounded-md shadow-md" placeholder="Unit">
                    </div>
                </div>

                <!--Footer-->
                <div class="flex justify-center pt-2">
                    <button
                        class="item px-6 py-2 text-white font-semibold rounded-lg bg-red-900 border hover:border-red-900">Submit</button>
                </div>

            </div>
        </div>
    </div>
</form>

<script>
    var openmodal = document.querySelectorAll('.modal-open')
    for (var i = 0; i < openmodal.length; i++) {
        openmodal[i].addEventListener('click', function(event) {
            event.preventDefault()
            toggleModal()
        })
    }

    const overlay = document.querySelector('.modal-overlay')
    overlay.addEventListener('click', toggleModal)

    var closemodal = document.querySelectorAll('.modal-close')
    for (var i = 0; i < closemodal.length; i++) {
        closemodal[i].addEventListener('click', toggleModal)
    }

    document.onkeydown = function(evt) {
        evt = evt || window.event
        var isEscape = false
        if ("key" in evt) {
            isEscape = (evt.key === "Escape" || evt.key === "Esc")
        } else {
            isEscape = (evt.keyCode === 27)
        }
        if (isEscape && document.body.classList.contains('modal-active')) {
            toggleModal()
        }
    };


    function toggleModal() {
        const body = document.querySelector('body')
        const modal = document.querySelector('.modal')
        modal.classList.toggle('opacity-0')
        modal.classList.toggle('pointer-events-none')
        body.classList.toggle('modal-active')
    }
</script>
