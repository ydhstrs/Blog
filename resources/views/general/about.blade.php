@extends('../general/layouts/main')

@section('contents')
    <!-- Inner -->
    <section id="about" class="pt-5 pb-16 bg-white">
        <div class="max-w-xl mx-auto text-center mb-16">
            <h4 class="font-semibold text-3xl text-teal-700 mb-2">Tentang Saya</h4>
            <p class="font-medium text-md text-black"></p>
        </div>

        <div class="lg:flex justify-center sm:flex flex-wrap">
            <div class="w-full self-center lg:w-1/2">
                <h2 class="font-bold text-2xl text-stone-700 mb-5">
                    Esther Simatupang
                </h2>
                <p class="light text-gray-700 mb-10">
                    NIM 217046017<br>
                    Mahasiswa Magister Ilmu Keperawatan- Fakultas Keperawatan.<br>
                    Universitas Sumatera Utara<br>
                </p>
                <p class="light text-gray-700 mb-10">Minat : science, teknoligi, komik. <br>
                    Film favorit : Titanic <br>
                    Musik Favorit : Backstreet boys, Celine Dion, Super junior<br>

                    Buku favorit : komik</p>
                    <p class="text-xl font-bold text-teal-700">
                        Blog saya
Semoga bisa bermanfaat bagi sesama
                    </p>
            </div>
            <div class="max-w-sm w-full px-4">
                <div class="mt-10">
                    <img src="{{ asset('/images/me.jpeg') }}" alt="Me"
                        class="object-none object-center rounded-md h-80 w-80 overflow-hidden" />
                </div>
            </div>
        </div>
        </div>

    </section>

    <!-- Display Container (not part of component) END -->
@endsection
