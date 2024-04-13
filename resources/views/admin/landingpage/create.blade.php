<x-app-layout>
    @if (session('status'))
        <div class="card-body">
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        </div>
    @endif
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="rounded-t mb-0 px-4 py-3 border-0">
                        <div class="flex flex-wrap items-center">
                            <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                                <h3 class="font-semibold text-lg text-blueGray-700">
                                    Add Landing Page Content
                                </h3>
                            </div>
                        </div>
                    </div>

                    <div class="block w-full overflow-x-auto p-8">
                        <form method="post" action="/dashboard/landingpage" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" id="typelanding" name="typelanding" value="barbekoe"
                                class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg ">
                            <div class="mb-6">
                                <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Section
                                    Number
                                </label>
                                <input type="number" id="section_number" name="section_number"
                                    class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg ">
                            </div>
                            <div class="mb-6">
                                <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Title Head
                                </label>
                                <input type="text" id="title_head" name="title_head"
                                    class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg ">
                            </div>
                            <div class="mb-6">
                                <label for="text"
                                    class="block mb-2 text-sm font-medium text-gray-900">Description</label>
                                <textarea id="desc" name="desc"
                                    class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg "></textarea>
                            </div>
                          
                            <div class="mb-6">
                                <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Subtitle
                                    1</label>
                                <input type="text" id="subtitle1" name="subtitle1"
                                    class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg ">
                            </div>
                            <div class="mb-6">
                                <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Subtitle
                                    2</label>
                                <input type="text" id="subtitle2" name="subtitle2"
                                    class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg ">
                            </div>
                            <div class="mb-6">
                                <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Subtitle
                                    3</label>
                                <input type="text" id="subtitle3" name="subtitle3"
                                    class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg ">
                            </div>
                            <div class="mb-6">
                                <label for="text" class="block mb-2 text-sm font-medium text-gray-900">SubDesc 1
                                </label>
                                <textarea id="desc1" name="desc1"
                                    class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg "></textarea>
                            </div>
                            <div class="mb-6">
                                <label for="text" class="block mb-2 text-sm font-medium text-gray-900">SubDesc 2
                                </label>
                                <textarea id="desc2" name="desc2"
                                    class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg "></textarea>
                            </div>
                            <div class="mb-6">
                                <label for="text" class="block mb-2 text-sm font-medium text-gray-900">SubDesc 3
                                </label>
                                <textarea id="desc3" name="desc3"
                                    class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg "></textarea>
                            </div>
{{-- 
                            <div class="mb-6">
                                <img class="img-preview2 w-56">
                                <label class="block mb-2 text-sm font-medium text-gray-900" for="file_input">Upload
                                    Image 2</label>
                                <input
                                    class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:placeholder-gray-400 @error('image2') is-invalid @enderror"
                                    aria-describedby="file_input_help" id="image2" name="image2" type="file"
                                    onchange="previewImage2()">
                                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG,
                                    PNG,
                                    JPG
                                    (MAX. 800x400px).</p>
                                @error('image')
                                    <div class="text-red-500">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div> --}}




                            <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>

<script>
    function previewImage1() {
        const image = document.querySelector('#image1');
        const imgPreview = document.querySelector('.img-preview1');

        imgPreview.style.display = 'block';
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);
        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result
        }
    }
</script>
<script>
    function previewImage2() {
        const image = document.querySelector('#image2');
        const imgPreview = document.querySelector('.img-preview2');

        imgPreview.style.display = 'block';
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);
        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result
        }
    }
</script>
