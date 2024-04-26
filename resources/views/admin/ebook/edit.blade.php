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
                                    Edit Ebook
                                </h3>
                            </div>
                        </div>
                    </div>

                    <div class="block w-full overflow-x-auto p-8">
                        <form method="post" action="/dashboard/ebook/{{ $ebook->id }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            <div class="mb-6">
                                <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Title</label>
                                <input type="text" value="{{ $ebook->title }}" id="title" name="title"
                                    class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg ">

                            </div>

                            <div class="mb-6">
                                @if ($ebook->image)
                                    <img src="{{ asset('/' . $ebook->image) }}" class="img-preview w-56">
                                @else
                                    <img class="img-preview w-56">
                                @endif
                                <label class="block mb-2 text-sm font-medium text-gray-900" for="file_input">Upload
                                    file</label>
                                <input type="hidden" name="oldImage" value="{{ $ebook->image }}">
                                <input required
                                    class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:placeholder-gray-400 @error('image') border-red-600 @enderror"
                                    aria-describedby="file_input_help" id="image" name="image" type="file"
                                    onchange="previewImage()">
                                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG,
                                    JPG
                                    (MAX. 800x400px).</p>
                                @error('image')
                                    <div class="text-red-600">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-6">
                                <img class="img-preview w-56">
                                <label class="block mb-2 text-sm font-medium text-gray-900" for="file_input">Upload
                                    Pdf </label>
                                <input required
                                    class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer "
                                    aria-describedby="file_input_help" id="pdf" name="pdf" type="file">
                                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG,
                                    JPG
                                    (MAX. 800x400px).</p>
                                @error('image')
                                    <div class="text-red-500">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-6">
                                <label class="block">
                                    <span class="text-gray-700">Description</span>
                                    <textarea id="editor" class="block w-full mt-1 rounded-md" name="body" rows="3">{{ $ebook->body }}</textarea>
                                </label>
                                @error('body')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';
            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);
            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result
            }
        }
    </script>
<script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'), {
            ckfinder: {
                uploadUrl: '{{ route('image.upload') . '?_token=' . csrf_token() }}',
            },
            toolbar: {
                items: [
                    'heading',
                    '|',
                    'bold',
                    'italic',
                    '|',
                    'bulletedList',
                    'numberedList',
                    '|',
                    'uploadImage',
                    '|',
                    'undo',
                    'redo'
                ]
            },
            language: 'en' // sesuaikan dengan bahasa yang Anda inginkan
        })
        .catch(error => {
            console.error(error);
        });
</script>
</x-app-layout>
