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
                                    Add Blog
                                </h3>
                            </div>
                        </div>
                    </div>

                    <div class="block w-full overflow-x-auto p-8">
                        <form method="post" action="/dashboard/post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-6">
                                <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Name
                                </label>
                                <input type="text" id="title" name="title"
                                    class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg ">
                            </div>
                            <div class="mb-6">
                                <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Slug
                                </label>
                                <input type="text" id="slug" name="slug"
                                    class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg ">
                            </div>
                            <div class="mb-6">
                                <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Category
                                </label>
                                <select
                                    class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg "
                                    name="category_id" id="category_id">
                                    @foreach ($categories as $item)
                                        @if (old('category_id', $item->category_id) == $item->id)
                                            <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                                        @else
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-6">
                                <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Label 1
                                </label>
                                <select
                                    class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg "
                                    name="label_id1" id="label_id1">
                                            <option value=""></option>
                                    @foreach ($labels as $item)
                                        @if (old('label_id1', $item->label_id1) == $item->id)
                                            <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                                        @else
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-6">
                                <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Label 2
                                </label>
                                <select
                                    class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg "
                                    name="label_id2" id="label_id2">
                                    <option value=""></option>
                                    @foreach ($labels as $item)
                                        @if (old('label_id2', $item->label_id2) == $item->id)
                                            <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                                        @else

                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-6">
                                <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Label 3
                                </label>
                                <select
                                    class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg "
                                    name="label_id3" id="label_id3">
                                    <option value=""></option>
                                    @foreach ($labels as $item)
                                        @if (old('category_id', $item->label_id3) == $item->id)
                                            <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                                        @else
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-6">
                                <img class="img-preview w-56">
                                <label class="block mb-2 text-sm font-medium text-gray-900" for="file_input">Upload
                                    Image</label>
                                <input
                                    class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:placeholder-gray-400 @error('image') is-invalid @enderror"
                                    aria-describedby="file_input_help" id="image" name="image" type="file"
                                    onchange="previewImage()">
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
                                    <textarea id="editor" class="block w-full mt-1 rounded-md" name="body" rows="3"></textarea>
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
    <script>
        const title = document.querySelector("#title");
        const slug = document.querySelector("#slug");

        title.addEventListener("keyup", function() {
            let preslug = title.value;
            preslug = preslug.replace(/ /g, "-");
            slug.value = preslug.toLowerCase();
        });
    </script>
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
                }
            })
            .catch(error => {
                console.error(error);
            });
    </script>

</x-app-layout>
