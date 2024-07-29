<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    <!--Navbar-->
    <x-components>

    </x-components>

    <!--Tutup Navbar-->

    <main class="Main flex flex-col justify-center items-center bg-slate-100">

        <div class="flex justify-center w-11/12 sm:w-9/12">
            <div class="p-6 flex flex-col w-full justify-start gap-2 ">
                <h1 class="text-2xl font-bold text-green-700">Pengantar Aplikasi</h1>
                <p class="text-sm">Selamat datang di website kalkulator gula kami. Aplikasi ini dirancang untuk membantu
                    Anda menghitung kandungan gula pada minuman kemasan berdasarkan label informasi nilai gizi, sehingga
                    Anda dapat membuat pilihan yang lebih sehat.</p>


            </div>
        </div>

        <div class="flex justify-center w-11/12 sm:w-9/12">
            <div class="p-6 flex flex-col w-full justify-start gap-2 ">
                <h1 class="text-2xl font-bold text-green-700">Cara menggunakan kalkulator Gula</h1>
                <p class="text-sm">Langkah-langkah penggunaan kalkulator gula:
                    <li>Minuman kemasan pada label Informasi Nilai Gizi (ING) terdapat Gula (gram), Masukkan jumlah Gula
                        (gram) pada Halaman "calculator Sugar", bisa dilihat contoh gambar dibawah ini :</li>
                    <img class="sm:w-3/6" src="{{ asset('gambar/Gula.png') }}" alt="">

                    <li>Selanjutnya, Masukkan Jumlah takaran saji (ml) pada Halaman "calculator Sugar". bisa dilihat
                        contoh gambar
                        dibawah ini :</li>
                    <img class="sm:w-3/6" src="{{ asset('gambar/Takaran Saji.png') }}" alt="">
                    <li>dan Masukkan jumlah takaran saji per kemasan pada Halaman "calculator Sugar". bisa dilihat
                        contoh gambar dibawah
                        ini :</li>
                    <img class="sm:w-3/6" src="{{ asset('gambar/Sajian Perkemasan.png') }}" alt="">
                    <li>Maka akan keluar hasil dari minuman kemasan tersebut.</li>
                </p>


            </div>
        </div>

        <div class="flex justify-center w-11/12 sm:w-9/12">
            <div class="p-6 flex flex-col w-full justify-start gap-2 ">
                <h1 class="text-2xl font-bold text-green-700">Klasifikasi Kandungan Gula pada minuman kemasan</h1>
                <p class="text-sm">Aplikasi ini dirancang khusus untuk membantu Anda mengetahui kandungan gula.</p>

                <div class="Box1 flex flex-row gap-2">
                    <div class="place-content-center">
                        <div class="box-border h-8 w-8 bg-green-700  rounded-md"></div>
                    </div>

                    <div class="text flex flex-col">
                        <h2 class="text-md font-semibold text-green-700">
                            <=0.5 gram</h2>
                                <p class="text-sm text-slate-500">Aman dikonsumsi dalam jumlah banyak. Minuman dengan
                                    kandungan gula sangat rendah ini ideal untuk menjaga asupan gula harian tetap
                                    minimal.</p>
                    </div>

                </div>
                <div class="Box2 flex flex-row gap-2">
                    <div class="place-content-center">
                        <div class="box-border h-8 w-8 bg-[#86BD24]  rounded-md"></div>
                    </div>

                    <div class="text flex flex-col">
                        <h2 class="text-md font-semibold text-[#86BD24]">> 0,5 - 6 gram </h2>
                        <p class="text-sm text-slate-500">Cukup aman dikonsumsi secara moderat. Minuman ini masih cukup
                            rendah gula dan baik untuk dikonsumsi.</p>
                    </div>

                </div>
                <div class="Box3 flex flex-row gap-2">
                    <div class="place-content-center">
                        <div class="box-border h-8 w-8 bg-[#F7A831]  rounded-md"></div>
                    </div>

                    <div class="text flex flex-col">
                        <h2 class="text-md font-semibold text-[#F7A831]">> 6 - 12 gram </h2>
                        <p class="text-sm text-slate-500">Perhatikan jumlah konsumsi. Minuman dengan kandungan gula
                            sedang ini sebaiknya dikonsumsi dengan lebih hati-hati untuk menghindari asupan gula
                            berlebih.</p>
                    </div>

                </div>
                <div class="Box4 flex flex-row gap-2">
                    <div class="place-content-center">
                        <div class="box-border h-8 w-8 bg-[#BB1919]  rounded-md"></div>
                    </div>

                    <div class="text flex flex-col">
                        <h2 class="text-md font-semibold text-[#BB1919]">> 12 gram </h2>
                        <p class="text-sm text-slate-500">Jangan berlebihan. Minuman dengan kandungan gula tinggi ini
                            harus dikonsumsi dalam jumlah sangat terbatas untuk menghindari risiko kesehatan seperti
                            obesitas dan diabetes.</p>
                    </div>

                </div>
            </div>
        </div>

        <div class="flex justify-center w-11/12 sm:w-9/12">
            <div class="p-6 flex flex-col w-full justify-start gap-2 ">
                <h1 class="text-2xl font-bold text-green-700">Panduan Konsumsi Gula</h1>
                <p class="text-">Mengatur asupan gula harian sangat penting untuk menjaga kesehatan. Konsumsi gula
                    yang berlebihan dapat meningkatkan risiko berbagai penyakit seperti diabetes, obesitas, dan penyakit
                    jantung. Oleh karena itu, instansi pemerintah telah menetapkan panduan dan rekomendasi untuk
                    membantu masyarakat mengontrol konsumsi gula mereka.<br><br>

                    Salah satu regulasi penting di Indonesia adalah Permenkes Nomor 30 Tahun 2013. Peraturan ini
                    mengatur tentang pencantuman informasi kandungan gula, garam, dan lemak serta pesan kesehatan pada
                    pangan siap saji dan pangan olahan. Pesan kesehatan ini sering kali dapat ditemukan pada kemasan
                    makanan ringan yang dibeli di supermarket. Pesan tersebut sangat penting untuk diperhatikan karena
                    berhubungan langsung dengan kesehatan kita.<br>
                    <br>
                    Menurut Permenkes Nomor 30 Tahun 2013, anjuran konsumsi gula per orang per hari adalah tidak lebih
                    dari 10% dari total energi yang dibutuhkan, yaitu sekitar 200 kkal. Ini setara dengan konsumsi gula
                    sebanyak 4 sendok makan atau 50 gram per orang per hari. Dengan mengikuti anjuran ini, Anda dapat
                    membantu mengurangi risiko terkena penyakit terkait konsumsi gula berlebih.
                </p>
            </div>
        </div>

        <div class="flex justify-center w-11/12 sm:w-9/12">
            <div class="p-6 flex flex-col w-full justify-start gap-2 ">
                <h1 class="text-2xl font-bold text-green-700">Rekomendasi dari Instansi Pemerintah</h1>
                <p class="text-sm">
                <ul type="1">
                    <img class="sm:w-3/6" src="{{ asset('gambar/kemenkes.png') }}" alt="Rekomendasi asupan gula">
                    <i class="text-xs">Sumber: http://p2ptm.kemkes.go.id/</i><br>
                    <li>Kementerian Kesehatan (Kemenkes) Indonesia: Kemenkes merekomendasikan untuk
                        membatasi konsumsi gula harian maksimal hingga 50 gram atau sekitar 4 sendok makan per hari. Hal
                        ini
                        sejalan dengan upaya untuk menurunkan prevalensi penyakit tidak menular di masyarakat.</li><br>
                    <li>Organisasi Kesehatan Dunia (WHO): WHO juga memberikan panduan serupa, menyarankan agar
                        konsumsi
                        gula tambahan tidak melebihi 10% dari total asupan energi harian. WHO menambahkan bahwa
                        pengurangan
                        lebih lanjut hingga di bawah 5% dari total energi (sekitar 25 gram atau 6 sendok teh per hari)
                        akan
                        memberikan manfaat kesehatan tambahan.</li><br>
                    <li>HealthHub Singapura: Di Singapura, klasifikasi minuman berdasarkan kandungan gula diterapkan
                        untuk membantu konsumen membuat pilihan yang lebih sehat. Minuman dengan kandungan gula rendah
                        (kurang dari 1 gram per 100 ml) direkomendasikan untuk konsumsi harian, sedangkan minuman dengan
                        kandungan gula tinggi (lebih dari 10 gram per 100 ml) disarankan untuk dikonsumsi dalam jumlah
                        terbatas.</li>
                </ul>



                </p>
            </div>
        </div>

        <div class="flex justify-center w-11/12 sm:w-9/12">
            <div class="p-6 flex flex-col w-full justify-start gap-2 rounded-sm bg-green-100">
                <h1 class="text-2xl font-bold text-green-700">Sumber dan Referensi</h1>
                <p class="text-sm">
                    <li>World Health Organization. "Guideline: Sugars Intake for Adults and Children." World Health
                        Organization, 2015.</li>
                    <li>HealthHub. "Know Your Sugar." Health Promotion Board, Singapore.</li>
                    <li>Kementerian Kesehatan Republik Indonesia. "Peraturan Menteri Kesehatan Republik Indonesia Nomor
                        30 Tahun 2013 tentang Pencantuman Informasi Kandungan Gula, Garam, dan Lemak serta Pesan
                        Kesehatan pada Pangan Olahan dan Pangan Siap Saji."</li>
                    <li>superindo.co.id. article "Indikator Kandungan Gula"</li>
                </p>


            </div>
        </div>

        <div class="flex justify-center w-11/12 sm:w-9/12">
            <div class="p-6 flex flex-col w-full justify-start gap-2 ">
                <h1 class="text-2xl font-bold text-green-700">FAQ.</h1>
                <!-- FAQ Section -->
                <div class="lg:w-8/12 w-full mx-auto">
                    <!-- Question 1 -->
                    <hr class="w-full lg:mt-10 md:mt-12 md:mb-8 my-8" />

                    <div class="w-full md:px-6">
                        <div id="mainHeading" class="flex justify-between items-center w-full">
                            <div class="">
                                <p
                                    class="flex justify-center items-center  font-medium text-base leading-6 md:leading-4 text-gray-800">
                                    <span
                                        class="lg:mr-6 mr-4 lg:text-2xl md:text-xl text-lg leading-6 md:leading-5 lg:leading-4 font-semibold text-green-700">Q1.</span>
                                    Bagaimana menghitung jika takaran saji pada label berbeda dengan takaran saji pada
                                    satu botol?
                                </p>
                            </div>
                            <button aria-label="toggler"
                                class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-200 focus:rounded-md"
                                data-menu>
                                <img class="transform light:hidden "
                                    src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2.svg" alt="toggler">
                                <img class="transform light:block hidden "
                                    src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2dark.svg"
                                    alt="toggler">
                            </button>
                        </div>
                        <div id="menu" class="hidden mt-6 w-full">
                            <p class="text-base leading-6 text-gray-600 dark:text-gray-300 font-normal">Jika takaran
                                saji pada label berbeda dengan ukuran botol, kalikan jumlah gula per takaran saji dengan
                                jumlah total sajian dalam botol untuk mendapatkan jumlah total gula.</p>
                        </div>
                    </div>

                    <!-- Question 2 -->

                    <hr class="w-full lg:mt-10 my-8" />

                    <div class="w-full md:px-6">
                        <div id="mainHeading" class="flex justify-between items-center w-full">
                            <div class="">
                                <p
                                    class="flex justify-center items-center font-medium text-base leading-6 lg:leading-4 text-gray-800">
                                    <span
                                        class="lg:mr-6  mr-4 lg:text-2xl md:text-xl text-lg leading-6 md:leading-5 lg:leading-4 font-semibold text-green-700">Q2.</span>
                                    Apa yang harus saya lakukan jika tidak ada informasi nilai gizi pada label?
                                </p>
                            </div>
                            <button aria-label="toggler"
                                class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-200 focus:rounded-md"
                                data-menu>
                                <img class="transform light:hidden "
                                    src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2.svg" alt="toggler">
                                <img class="transform light:block hidden "
                                    src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2dark.svg"
                                    alt="toggler">
                            </button>
                        </div>
                        <div id="menu" class="hidden mt-6 w-full">
                            <p class="text-base leading-6 text-gray-600  font-normal">Jika informasi nilai gizi tidak
                                tersedia, Anda dapat mencari informasi produk tersebut secara online atau menghubungi
                                produsen untuk mendapatkan detail nilai gizi.</p>
                        </div>
                    </div>

                    <!-- Question 3 -->

                    <hr class="w-full lg:mt-10 my-8" />

                    <div class="w-full md:px-6">
                        <div id="mainHeading" class="flex justify-between items-center w-full">
                            <div class="">
                                <p
                                    class="flex justify-center items-center font-medium text-base leading-6 lg:leading-4 text-gray-800">
                                    <span
                                        class="lg:mr-6  mr-4 lg:text-2xl md:text-xl text-lg leading-6 md:leading-5 lg:leading-4 font-semibold text-green-700">Q3.</span>
                                    Bagaimana cara menghitung jumlah gula jika saya hanya minum setengah dari kemasan?
                                </p>
                            </div>
                            <button aria-label="toggler"
                                class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-200 focus:rounded-md"
                                data-menu>
                                <img class="transform light:hidden "
                                    src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2.svg" alt="toggler">
                                <img class="transform light:block hidden "
                                    src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2dark.svg"
                                    alt="toggler">
                            </button>
                        </div>
                        <div id="menu" class="hidden mt-6 w-full">
                            <p class="text-base leading-6 text-gray-600  font-normal">Hitung jumlah gula per sajian
                                dari label, lalu kalikan dengan jumlah takaran saji yang Anda konsumsi (misalnya,
                                setengah dari total sajian).</p>
                        </div>
                    </div>

                    <!-- Question 4 -->

                    <hr class="w-full lg:mt-10 my-8" />

                    <div class="w-full md:px-6">
                        <div id="mainHeading" class="flex justify-between items-center w-full">
                            <div class="">
                                <p
                                    class="flex justify-center items-center  font-medium text-base leading-6 lg:leading-4 text-gray-800">
                                    <span
                                        class="lg:mr-6  mr-4 lg:text-2xl md:text-xl text-lg leading-6 md:leading-5 lg:leading-4 font-semibold text-green-700">Q4.</span>
                                    Mengapa hasil perhitungan gula saya berbeda dari yang tertulis pada kemasan?
                                </p>
                            </div>
                            <button aria-label="toggler"
                                class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-200 focus:rounded-md"
                                data-menu>
                                <img class="transform light:hidden "
                                    src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2.svg" alt="toggler">
                                <img class="transform light:block hidden "
                                    src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2dark.svg"
                                    alt="toggler">
                            </button>
                        </div>
                        <div id="menu" class="hidden mt-6 w-full">
                            <p class="text-base leading-6 text-gray-600  font-normal">Perbedaan bisa terjadi karena
                                perbedaan takaran saji yang Anda gunakan dibandingkan dengan yang tertera di label atau
                                karena variasi dalam proses produksi.</p>
                        </div>
                    </div>

                    <!-- Question 5 -->

                    <hr class="w-full lg:mt-10 my-8" />

                    <div class="w-full md:px-6">
                        <div id="mainHeading" class="flex justify-between items-center w-full">
                            <div class="">
                                <p
                                    class="flex justify-center items-center  font-medium text-base leading-6 lg:leading-4 text-gray-800">
                                    <span
                                        class="lg:mr-6  mr-4 lg:text-2xl md:text-xl text-lg leading-6 md:leading-5 lg:leading-4 font-semibold text-green-700">Q5.</span>
                                    Apakah aplikasi ini dapat digunakan untuk menghitung gula pada makanan padat?
                                </p>
                            </div>
                            <button aria-label="toggler"
                                class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-200 focus:rounded-md"
                                data-menu>
                                <img class="transform light:hidden"
                                    src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2.svg" alt="toggler">
                                <img class="transform light:block hidden "
                                    src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2dark.svg"
                                    alt="toggler">
                            </button>
                        </div>
                        <div id="menu" class="hidden mt-6 w-full">
                            <p class="text-base leading-6 text-gray-600  font-normal">Aplikasi ini dirancang khusus
                                untuk minuman kemasan. Namun, prinsip perhitungan bisa diaplikasikan pada makanan padat
                                dengan data nilai gizi yang sesuai.</p>
                        </div>
                    </div>

                    <!-- Question 6 -->

                    <hr class="w-full lg:mt-10 my-8" />

                    <div class="w-full md:px-6">
                        <div id="mainHeading" class="flex justify-between items-center w-full">
                            <div class="">
                                <p
                                    class="flex justify-center items-center  font-medium text-base leading-6 lg:leading-4 text-gray-800">
                                    <span
                                        class="lg:mr-6  mr-4 lg:text-2xl md:text-xl text-lg leading-6 md:leading-5 lg:leading-4 font-semibold text-green-700">Q6.</span>
                                    Bagaimana saya dapat membandingkan gula dari berbagai produk minuman?
                                </p>
                            </div>
                            <button aria-label="toggler"
                                class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-200 focus:rounded-md"
                                data-menu>
                                <img class="transform light:hidden"
                                    src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2.svg" alt="toggler">
                                <img class="transform light:block hidden "
                                    src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2dark.svg"
                                    alt="toggler">
                            </button>
                        </div>
                        <div id="menu" class="hidden mt-6 w-full">
                            <p class="text-base leading-6 text-gray-600  font-normal">Masukkan data nilai gizi dari
                                masing-masing produk ke kalkulator kami, lalu bandingkan hasil perhitungan total gula
                                dan per sajian.</p>
                        </div>
                    </div>

                    <!-- Question 7 -->

                    <hr class="w-full lg:mt-10 my-8" />

                    <div class="w-full md:px-6">
                        <div id="mainHeading" class="flex justify-between items-center w-full">
                            <div class="">
                                <p
                                    class="flex justify-center items-center  font-medium text-base leading-6 lg:leading-4 text-gray-800">
                                    <span
                                        class="lg:mr-6  mr-4 lg:text-2xl md:text-xl text-lg leading-6 md:leading-5 lg:leading-4 font-semibold text-green-700">Q7.</span>
                                    berapa gram pada 1 sdt yang digunakan di web ini?
                                </p>
                            </div>
                            <button aria-label="toggler"
                                class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-200 focus:rounded-md"
                                data-menu>
                                <img class="transform light:hidden"
                                    src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2.svg" alt="toggler">
                                <img class="transform light:block hidden "
                                    src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2dark.svg"
                                    alt="toggler">
                            </button>
                        </div>
                        <div id="menu" class="hidden mt-6 w-full">
                            <p class="text-base leading-6 text-gray-600  font-normal">1 sdt (sendok teh) setara dengan
                                4
                                gram gula.</p>
                        </div>
                    </div>

                    <!-- Question 8 -->

                    <hr class="w-full lg:mt-10 my-8" />

                    <div class="w-full md:px-6">
                        <div id="mainHeading" class="flex justify-between items-center w-full">
                            <div class="">
                                <p
                                    class="flex justify-center items-center  font-medium text-base leading-6 lg:leading-4 text-gray-800">
                                    <span
                                        class="lg:mr-6  mr-4 lg:text-2xl md:text-xl text-lg leading-6 md:leading-5 lg:leading-4 font-semibold text-green-700">Q8.</span>
                                    apakah ada pembulatan pada perhitungan berdasarkan sdt (sendok teh) ?
                                </p>
                            </div>
                            <button aria-label="toggler"
                                class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-200 focus:rounded-md"
                                data-menu>
                                <img class="transform light:hidden"
                                    src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2.svg" alt="toggler">
                                <img class="transform light:block hidden "
                                    src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2dark.svg"
                                    alt="toggler">
                            </button>
                        </div>
                        <div id="menu" class="hidden mt-6 w-full">
                            <p class="text-base leading-6 text-gray-600  font-normal"><b>Ada. </b>takaran sendok teh
                                sebesar
                                1,1-1.3 sdt, maka
                                pencantuman sdt dibulatkan menjadi 1 sdt. Jika 1,4 - 1,6, maka
                                pencantuman sdt dibulatkan menjadi 1,5 sdt. Jika 1,7-1,9, maka
                                pencantuman sdt dibulatkan menjadi 2 sdt </p>
                        </div>
                    </div>

                    <hr class="w-full lg:mt-10 my-8" />
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <x-footer>

    </x-footer>
</body>
<script>
    let elements = document.querySelectorAll("[data-menu]");
    for (let i = 0; i < elements.length; i++) {
        let main = elements[i];

        main.addEventListener("click", function() {
            let element = main.parentElement.parentElement;
            let indicators = main.querySelectorAll("img");
            let child = element.querySelector("#menu");
            let h = element.querySelector("#mainHeading>div>p");

            h.classList.toggle("font-semibold");
            child.classList.toggle("hidden");
            // console.log(indicators[0]);
            indicators[0].classList.toggle("rotate-180");
        });
    }
</script>

</html>
