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
                                    Edit Landing Page Content
                                </h3>
                            </div>
                        </div>
                    </div>

                    <div class="block w-full overflow-x-auto p-8">
                        <form method="post" action="/dashboard/landingpage/{{ $item->id }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')

                        <div class="mb-6">
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Title Head</label>
                            <input type="text" value="{{ $item->title_head }}" id="title_head" name="title_head"
                                class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg ">
                        </div>
                      
                        <div class="mb-6">
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Desc
                            </label>
                            <textarea required id="desc" name="desc" class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg "> {{ $item->desc }}</textarea>

                        </div>
                    
                        <div class="mb-6">
                            @if ( $item->subtitle1 == NULL &&  $item->subtitle1 == '')
                            <input type="hidden" value="{{ $item->subtitle1 }}" id="subtitle1" name="subtitle1"
                                class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg " disabled>
                            @else
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Subtitle
                                1</label>
                            <input type="text" value="{{ $item->subtitle1 }}" id="subtitle1" name="subtitle1"
                                class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg " required>    
                            @endif
                        </div>
                        <div class="mb-6">
                            @if ( $item->subtitle2 == NULL &&  $item->subtitle2 == '')
                            <input type="hidden" value="{{ $item->subtitle2 }}" id="subtitle2" name="subtitle2"
                                class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg " disabled>
                            @else
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Subtitle 2</label>
                            <input type="text" value="{{ $item->subtitle2 }}" id="subtitle2" name="subtitle2"
                                class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg " required>
                            @endif
                        </div>
                        <div class="mb-6">
                            @if ( $item->subtitle3 == NULL &&  $item->subtitle3 == '')
                            <input type="hidden" value="{{ $item->subtitle3 }}" id="subtitle3" name="subtitle3"
                                class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg " disabled>
                            @else
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Subtitle
                                3</label>
                            <input type="text" value="{{ $item->subtitle3 }}" id="subtitle3" name="subtitle3"
                                class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg " required>
                            @endif

                        </div>
                        <div class="mb-6">
                            @if ( $item->desc1 == NULL &&  $item->desc1 == '')
                            <input type="hidden" value="{{ $item->desc1 }}" id="desc1" name="desc1"
                                class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg " disabled>
                            @else
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Desc 1 </label>
                            <textarea required id="desc1" name="desc1"   class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg "> {{ $item->desc1 }}</textarea>
                            @endif

                        </div>
                        <div class="mb-6">
                             @if ( $item->desc2 == NULL &&  $item->desc2 == '')
                            <input type="hidden" value="{{ $item->desc2 }}" id="desc2" name="desc2"
                                class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg " disabled>
                            @else
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Desc 2 </label>
                            <textarea required id="desc2" name="desc2"   class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg "> {{ $item->desc2 }}</textarea>
                            @endif

                        </div>
                        <div class="mb-6">
                              @if ( $item->desc3 == NULL &&  $item->desc3 == '')
                            <input type="hidden" value="{{ $item->desc3 }}" id="desc3" name="desc3"
                                class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg " disabled>
                            @else
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Desc 3 </label>
                            <textarea required id="desc3" name="desc3"   class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg "> {{ $item->desc3 }}</textarea>
                            @endif
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
</x-app-layout>
