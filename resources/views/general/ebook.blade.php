@extends('../general/layouts/main')


@section('contents')
    <style>
        .full-page-background {
            background-image: url('/media/bg.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            /* Ensure the section takes up the full height of the viewport */
            margin: 0;
            /* Remove default margin */
            padding: 0;
            /* Remove default padding */
        }
    </style>
    <section class="full-page-background">

        <div class="block w-full overflow-x-auto p-8">

            <a href='/'
                class="text-md font-light text-white bg-slate-800 px-5 py-2 ml-4 mb-2 rounded-md hover:bg-slate-600 mt-16">Kembali
            </a>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 p-20 bg">
                <div class="col-span-1">
                    <div class="mb-6">
                        <h1 class="text-3xl text-center font-montserrat font-bold">{{ $ebook->title }}</h1>
                    </div>

                    <div class="m-6 text-gray-800 py-8 ">
                        <article  class="">
                            {!! $ebook->body !!}
                        </article>
                    </div>
                </div>
                <div class="col-span-1">
                    @if ($ebook->image)
                        <div class="grid mx-40 my-10 place-items-center">
                            <img src="{{ asset('/storage/' . $ebook->image) }}" class="rounded w-full">

                        </div>
                    @endif

                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
<script>
    // Inisialisasi CKEditor
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>

@endsection
