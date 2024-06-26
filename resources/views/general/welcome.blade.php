@extends('../general/layouts/main')

@section('contents')
    <section id="sections1" class="">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 lg:p-20 p-4 bg-transparent">

            <div class="col-span-1">


                <h5 class=" text-color-gold text-3xl py-4 font-montserrat font-bold">{{ $section1->title_head }}
                </h5>



                <!-- Modal toggle -->
                <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                    class="font-montserrat italic block text-xl font-bold text-white bg-gradient-to-r from-amber-400 via-amber-700 to-amber-900 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-2xl px-5 py-2.5 text-center 
    transform transition-transform duration-300 hover:scale-110"
                    type="button">
                    Cari Tahu Sekarang
                </button>

                <!-- Modal -->
                <div id="crud-modal" tabindex="-1" aria-hidden="true"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 flex justify-center items-center h-screen bg-black bg-opacity-50">
                    <div class="relative w-full max-w-md">
                        <!-- Konten Modal -->
                        <div class="relative bg-white rounded-lg shadow  backdrop-blur-md">
                            <!-- Header Modal -->
                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
                                <h3 class="text-lg font-semibold text-gray-900  font-montserrat">
                                    Masukkan Nama & Email Kamu
                                </h3>
                                <button type="button" class="close-button" data-modal-close>
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Body Modal -->
                            <form class="p-4 md:p-5" method="post" action="/">
                                @csrf
                                <div class="grid gap-4 mb-4">
                                    <div>
                                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Nama
                                            Kamu</label>
                                        <input type="text" name="name" id="name"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                                            placeholder="Masukkan Nama Kamu" required="">
                                    </div>
                                    <div>
                                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Email
                                            Kamu</label>
                                        <input type="email" name="email" id="email"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                                            placeholder="nama@contoh.com" required="">
                                    </div>
                                </div>
                                <button type="submit"
                                    class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
                                    Submit
                                </button>
                            </form>
                        </div>
                    </div>
                </div>



                <br>
                <p class ="block mb-2 text-sm font-medium text-gray-900  font-montserrat">
                    {{ $section1->desc }}</p>
            </div>
            <span class="absolute bottom-0 -z-10">
                <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#EDC967"
                        d="M60.6,-0.5C60.6,29.2,30.3,58.4,-1.5,58.4C-33.3,58.4,-66.5,29.2,-66.5,-0.5C-66.5,-30.3,-33.3,-60.6,-1.5,-60.6C30.3,-60.6,60.6,-30.3,60.6,-0.5Z"
                        transform="translate(100 100)" />
                </svg>
            </span>
            <div class="col-span-1">
                <div class="splide">
                    <div class="splide__arrows">
                        <button class="bg-gray-900 shadow splide__arrow splide__arrow--prev">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </button>
                        <button class="bg-gray-900 shadow splide__arrow splide__arrow--next">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </button>
                    </div>
                    <div class="splide__track  mb-10">
                        <div class="splide__list p-1 mb-10">
                            @foreach ($sectionblog as $item)
                                {{-- @foreach ($listsections4 as $item) --}}
                                <div class="leading-1 rounded-xl shadow splide__slide lg:h-500 w-fit mb-10 ">
                                    <img src="{{ asset('/storage/' . $item->image) }}"
                                        class="w-full object-cover h-300 rounded-t-xl">
                                    <div class="p-4">

                                        <a href="/article/{{ $item->slug }}"
                                            class="hover:text-cyan-600 text-black lg:text-2xl text-xl font-semibold font-montserrat">
                                            {{ $item->title }}
                                        </a>
                                        <p class="text-gray-700 my-2 lg:text-sm text-xs font-medium font-montserrat">
                                            {{ $item->category->name }}

                                        </p>
                                        <div class="inline-flex align-midle place-items-center gap-2">

                                            <p class="text-black text-md font-montserrat">
                                                {{ $item->excerpt }}

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                {{-- @endforeach --}}
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="sections2" class="my-8 bg-gray-100">
        <h5 class="text-center text-black font-bold text-2xl py-10 font-montserrat">{{ $section2->title_head }}</h5>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-0 lg:p-20">
            <div class="col-span-1 grid grid-cols-4 gap-1 border border-gray-500 p-4 ">
                <div class="col-span-1 flex justify-center items-center">
                    <svg class="lg:w-[90px] lg:h-[90px] w-14 h-14 place-content-center place-items-center my-auto text-center content-center object-center text-gray-800 bg-amber-400 rounded-full p-2"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4"
                            d="M11 16v-5.5A3.5 3.5 0 0 0 7.5 7m3.5 9H4v-5.5A3.5 3.5 0 0 1 7.5 7m3.5 9v4M7.5 7H14m0 0V4h2.5M14 7v3m-3.5 6H20v-6a3 3 0 0 0-3-3m-2 9v4m-8-6.5h1" />
                    </svg>
                </div>
                <div class="col-span-3">
                    <h5 class="text-left text-black font-bold text-xl py-4 font-montserrat">{{ $section2->subtitle1 }}</h5>
                    <p class="text-left font-light text-black font-montserrat">{{ $section2->desc1 }}</p>
                </div>
            </div>
            <div
                class="col-span-1 grid grid-cols-4 gap-1 lg:border-l-0 border-l lg:border-t lg:border-b border-r border-gray-500 p-4">
                <div class="col-span-1 flex justify-center items-center">
                    <svg class="lg:w-[90px] lg:h-[90px] w-14 h-14 text-gray-800  bg-amber-400 rounded-full p-2"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4"
                            d="m11.5 11.5 2.071 1.994M4 10h5m11 0h-1.5M12 7V4M7 7V4m10 3V4m-7 13H8v-2l5.227-5.292a1.46 1.46 0 0 1 2.065 2.065L10 17Zm-5 3h14a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z" />
                    </svg>
                </div>
                <div class="col-span-3">
                    <h5 class="text-left text-black font-bold text-xl py-4 font-montserrat">{{ $section2->subtitle2 }}
                    </h5>
                    <p class="text-left font-light text-black font-montserrat">{{ $section2->desc2 }}</p>
                </div>
            </div>
            <div
                class="col-span-1 grid grid-cols-4 lg:gap-1 lg:border-l-0 border-l  border-t border-b border-r border-gray-500 p-4 sm:gap-4">
                <div class="col-span-1 flex justify-center items-center">
                    <svg class="lg:w-[90px] lg:h-[90px] w-14 h-14 text-gray-800 bg-amber-400 rounded-full p-2"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4"
                            d="M4 4v15a1 1 0 0 0 1 1h15M8 16l2.5-5.5 3 3L17.273 7 20 9.667" />
                    </svg>
                </div>
                <div class="col-span-3">
                    <h5 class="text-left text-black font-bold md:text-xl sm:text-sm py-4 font-montserrat">
                        {{ $section2->subtitle3 }}</h5>
                    <p class="text-left font-light text-black font-montserrat">{{ $section2->desc3 }}</p>
                </div>
            </div>
        </div>
    </section>


    <section id="sections6" class="my-8">
        {{-- Sosmed --}}
        <h5 class=" text-center text-black font-bold xl:text-4xl s:text-xl py-10 xl:mx-80 font-montserrat">
            {{ $section3->title_head }}
        </h5>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 p-4 lg:p-20">
            <div class="col-span-1">
                <h5 class="text-left text-black font-bold text-4xl py-4 lg:pt-28">
                    {{ $section3->subtitle1 }}
                </h5>
                <p class="text-left font-light text-black">
                    {{ $section3->desc1 }}
                </p>
            </div>
            <div class="col-span-1">
                <h5 class="text-left text-black font-bold text-4xl py-4 lg:pt-28">
                    {{ $section3->subtitle2 }}
                </h5>
                <p class="text-left font-light text-black"> {{ $section3->desc2 }}
                </p>
            </div>

            <div class="col-span-1">
                <h5 class="text-left text-black font-bold text-4xl py-4 lg:pt-28">
                    {{ $section3->subtitle3 }}
                </h5>
                <p class="text-left font-light text-black">
                    {{ $section3->desc3 }}
                </p>
            </div>
        </div>
    </section>

    <section id="sections6" class="my-8">
        {{-- Kategory --}}
        <h5 class=" text-center text-black font-bold xl:text-4xl s:text-xl py-10 xl:mx-80 font-montserrat">Category</h5>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 p-20">
            @foreach ($sectioncategory as $item)
                <a href="/blog/category/{{ $item->id }}" class="col-span-1">
                    <h5 class="text-center text-black font-bold text-xl bg-slate-200 rounded-lg py-4 hover:bg-slate-300 ">
                        {{ $item->name }}
                    </h5>
                </a>
            @endforeach

        </div>
    </section>
    <section id="sections7">
        <div class="pt-20">
            <h4 class="text-center pb-16 text-black text-4xl font-bold font-montserrat">
                Partner
            </h4>
            <div class="grid grid-cols-1 md:grid-cols-5 gap-4 p-10 mb-20 mx-auto  place-items-center">
                @foreach ($section4 as $item)
                    <img class="h-28" src="{{ asset('/storage/' . $item->image) }}" alt="XplayW3 Partner" />
                @endforeach

            </div>

        </div>
    </section>





    <section id="footer">
        <div class=" bg-zinc-800">
            <div
                class="lg:grid lg:grid-cols-2 lg:gap-24 md:flex md:flex-row md:mx-auto px-1 sm:px-8 lg:gap-x-16 gap-y-8 pt-28">
                <div class="col-span-1 m-auto">

                    <div class="container">

                        <h4 class="font-semibold text-white py-4">Contact Us</h4>
                        <div class="flex items-center">
                            <a href="{{ $contact->youtube }}" target="_blank"
                                class="w-10 h-10 mr-3 rounded-full flex justify-center items-center border
                 border-white text-white hover:bg-slate-800  hover:text-slate-400">
                                <svg role="img" width="23" class="fill-current" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>YouTube</title>
                                    <path
                                        d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                                </svg>
                            </a>
                            <a href="{{ $contact->tiktok }}" target="_blank"
                                class="w-10 h-10 mr-3 rounded-full flex justify-center items-center border
                 border-white text-white hover:bg-slate-800  hover:text-slate-400">
                                <svg role="img" width="23" class="fill-current" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>TikTok</title>
                                    <path
                                        d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z" />
                                </svg>
                            </a>
                            <a href="{{ $contact->linkedin }}" target="_blank"
                                class="w-10 h-10 mr-3 rounded-full flex justify-center items-center border
                 border-white text-white hover:bg-slate-800  hover:text-slate-400">
                                <svg role="img" width="23" class="fill-current" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>Linkedin</title>
                                    <path
                                        d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                                </svg>
                            </a>
                            <a href="{{ $contact->instagram }}" target="_blank"
                                class="w-10 h-10 mr-3 rounded-full flex justify-center items-center border
                 border-white text-white hover:bg-slate-800  hover:text-slate-400">

                                <svg role="img" width="23" class="fill-current" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>Instagram</title>
                                    <path
                                        d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                                </svg>
                            </a>
                            <a href="{{ $contact->telegram }}" target="_blank"
                                class="w-10 h-10 mr-3 rounded-full flex justify-center items-center border
                 border-white text-white hover:bg-slate-800  hover:text-slate-400">

                                <svg role="img" viewBox="0 0 24 24" width="23" class="fill-current"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>Telegram</title>
                                    <path
                                        d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z" />
                                </svg>
                            </a>
                            <a href="{{ $contact->discord }}" target="_blank"
                                class="w-10 h-10 mr-3 rounded-full flex justify-center items-center border
                 border-white text-white hover:bg-slate-800  hover:text-slate-400">

                                <svg role="img" width="23" viewBox="0 0 24 24" class="fill-current"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>Discord</title>
                                    <path
                                        d="M20.317 4.3698a19.7913 19.7913 0 00-4.8851-1.5152.0741.0741 0 00-.0785.0371c-.211.3753-.4447.8648-.6083 1.2495-1.8447-.2762-3.68-.2762-5.4868 0-.1636-.3933-.4058-.8742-.6177-1.2495a.077.077 0 00-.0785-.037 19.7363 19.7363 0 00-4.8852 1.515.0699.0699 0 00-.0321.0277C.5334 9.0458-.319 13.5799.0992 18.0578a.0824.0824 0 00.0312.0561c2.0528 1.5076 4.0413 2.4228 5.9929 3.0294a.0777.0777 0 00.0842-.0276c.4616-.6304.8731-1.2952 1.226-1.9942a.076.076 0 00-.0416-.1057c-.6528-.2476-1.2743-.5495-1.8722-.8923a.077.077 0 01-.0076-.1277c.1258-.0943.2517-.1923.3718-.2914a.0743.0743 0 01.0776-.0105c3.9278 1.7933 8.18 1.7933 12.0614 0a.0739.0739 0 01.0785.0095c.1202.099.246.1981.3728.2924a.077.077 0 01-.0066.1276 12.2986 12.2986 0 01-1.873.8914.0766.0766 0 00-.0407.1067c.3604.698.7719 1.3628 1.225 1.9932a.076.076 0 00.0842.0286c1.961-.6067 3.9495-1.5219 6.0023-3.0294a.077.077 0 00.0313-.0552c.5004-5.177-.8382-9.6739-3.5485-13.6604a.061.061 0 00-.0312-.0286zM8.02 15.3312c-1.1825 0-2.1569-1.0857-2.1569-2.419 0-1.3332.9555-2.4189 2.157-2.4189 1.2108 0 2.1757 1.0952 2.1568 2.419 0 1.3332-.9555 2.4189-2.1569 2.4189zm7.9748 0c-1.1825 0-2.1569-1.0857-2.1569-2.419 0-1.3332.9554-2.4189 2.1569-2.4189 1.2108 0 2.1757 1.0952 2.1568 2.419 0 1.3332-.946 2.4189-2.1568 2.4189Z" />
                                </svg>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="col-span-1  ">
                    <a target="blank" href="https://mail.google.com/mail/u/0/?fs=1&tf=cm&to={{ $contact->email }}"
                        class="flex items-center font-montserrat text-white py-4"><ion-icon class="text-xl"
                            name="mail-outline"></ion-icon>{{ $contact->email }}</a>

                </div>

            </div>
            <div class=" relative flex pb-5 items-center pt-16">
                <span class=" h-0.5  flex-grow bg-white lg:w-1/3"></span>

                <h4 class="text-center font-light text-xl mx-4 text-white">Copyright Xplay W3 All Right Reserved </h4>
                <span class=" h-0.5 flex-grow bg-white lg:w-1/3"></span>
            </div>
        </div>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.2/dist/js/splide.min.js"></script>
    <script>
        var splide = new Splide('.splide', {
            type: 'loop',
            autoplay: true,
        });

        splide.mount();
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const modalToggle = document.querySelector("[data-modal-toggle]");
            const modalTarget = document.getElementById(modalToggle.getAttribute("data-modal-target"));
            const closeModalButton = modalTarget.querySelector("[data-modal-close]");
            const closeButton = modalTarget.querySelector(".close-button");

            modalToggle.addEventListener("click", function() {
                modalTarget.classList.toggle("hidden");
                modalTarget.setAttribute("aria-hidden", modalTarget.classList.contains("hidden"));
            });

            closeModalButton.addEventListener("click", function() {
                modalTarget.classList.add("hidden");
                modalTarget.setAttribute("aria-hidden", "true");
            });

            closeButton.addEventListener("click", function() {
                modalTarget.classList.add("hidden");
                modalTarget.setAttribute("aria-hidden", "true");
            });
        });
    </script>
@endsection
