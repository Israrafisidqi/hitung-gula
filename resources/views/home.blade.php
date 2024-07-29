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
        <!--Container Hitung-->
        <section class="w-11/12 sm:w-9/12 flex flex-col items-center p-4 justify-center">

            <div class="flex flex-col gap-2 bg-slate-50 shadow-md rounded-md w-full p-6">
                <div class="w-full">
                    <h1 class="text-lg font-bold">Hitung Gula</h1>
                    <p>Aplikasi ini dirancang khusus untuk membantu Anda mengetahui kandungan gula.</p>
                </div>
                <div class="flex w-full md:justify-end">
                    <a href="{{ route('sugar.calculation.form') }}"
                        class="text-base font-semibold w-full md:w-fit rounded-md bg-green-700 px-4 py-2 text-white text-center">Hitung</a>
                </div>


            </div>

        </section>
        <!--Container Hitung tutup-->

        <!--Nutri-Grade-->
        <div class="text-center p-4 w-11/12 sm:w-9/12 ">
            <h1 class="uppercase font-sans w-full font-bold text-3xl">Nutri-Grade</h1>
            <div class="flex w-full space-x-4 justify-center p-4">
                <button id="btnGambarA"><img src="{{ asset('gambar/A.png') }}" alt=""></button>
                <button id="btnGambarB"><img src="{{ asset('gambar/B.png') }}" alt=""></button>
                <button id="btnGambarC"><img src="{{ asset('gambar/C.png') }}" alt=""></button>
                <button id="btnGambarD"><img src="{{ asset('gambar/D.png') }}" alt=""></button>
            </div>
        </div>


        <div id="gambarA" class=" w-11/12 sm:w-9/12">
            <div class="p-4  ">
                <div class="flex-col p-4 w-full text-start bg-green-100 rounded-lg sm:rounded-md sm:max-w-4xl">
                    <h1 class="text-3xl font-bold text-[#01803E]">Nilai Nutrisi A</h1>
                    <p>Aman dikonsumsi dalam jumlah banyak. Minuman dengan kandungan gula sangat rendah ini ideal untuk
                        menjaga asupan gula harian tetap minimal.</p>
                </div>

                <div class="container flex justify-center flex-col">
                    <div
                        class="rounded-lg m-2 flex justify-center items-center gap-4 bg-white drop-shadow-md text-center p-6">
                        <div class="grid flex-grow  place-items-center">
                            <h1 class="card font-sans text-[#01803E] font-bold text-lg sm:text-3xl bg-base-300  ">
                                ≤ 0,5 gr</h1>
                            <p class="text-sm">*per 100 ml</p>
                        </div>
                        <div class="divider divider-horizontal  divide-emerald-800">or</div>
                        <div class="grid flex-grow  place-items-center">
                            <h1 class="card font-sans text-[#01803E] font-bold text-lg sm:text-3xl bg-base-300 ">
                                0.0 sdt (Sendok teh)</h1>

                            <p class="text-sm">*Akumulasi Per sendok</p>
                        </div>
                    </div>
                    <p class="text-gray-400 text-xs"><i>*pembulatan sendok teh (sdt) dapat dilihat pada FAQ</i></p>
                </div>

            </div>
        </div>

        <div id="gambarB" style="display: none" class="w-11/12 sm:w-9/12">
            <div class="p-4 ">
                <div class="flex-col p-4 w-full text-start rounded-lg bg-[#ecf8cf] sm:rounded-md sm:max-w-4xl">
                    <h1 class="text-3xl font-bold text-[#86BD24]">Nilai Nutrisi B</h1>
                    <p>Cukup aman dikonsumsi secara moderat. Minuman ini masih cukup rendah gula dan baik untuk
                        dikonsumsi.</p>
                </div>

                <div class="container flex justify-center flex-col">
                    <div
                        class="rounded-lg m-2 flex justify-center items-center gap-4 bg-white drop-shadow-md text-center p-6">
                        <div class="grid flex-grow  place-items-center">
                            <h1 class="card font-sans text-[#86BD24] font-bold text-lg sm:text-3xl bg-base-300  ">
                                > 0,5 - 6 gr</h1>
                            <p class="text-sm">*per 100 ml</p>
                        </div>
                        <div class="divider divider-horizontal  divide-emerald-800">or</div>
                        <div class="grid flex-grow  place-items-center">
                            <h1 class="card font-sans text-[#86BD24] font-bold text-lg sm:text-3xl bg-base-300 ">
                                0.0 - 2 sdt (Sendok teh)</h1>

                            <p class="text-sm">*Akumulasi Per sendok</p>
                        </div>
                    </div>
                    <p class="text-gray-400 text-xs"><i>*pembulatan sendok teh (sdt) dapat dilihat pada FAQ</i></p>
                </div>

            </div>
        </div>

        <div id="gambarC" style="display: none" class="w-11/12 sm:w-9/12">
            <div class="p-4  ">
                <div class="flex-col p-4 w-full text-start rounded-lg bg-[#fff9eb] sm:rounded-md sm:max-w-4xl">
                    <h1 class="text-3xl font-bold text-[#F7A831]">Nilai Nutrisi C</h1>
                    <p>Perhatikan jumlah konsumsi. Minuman dengan kandungan gula sedang ini sebaiknya dikonsumsi dengan
                        lebih hati-hati untuk menghindari asupan gula berlebih.</p>
                </div>

                <div class="container flex justify-center flex-col">
                    <div
                        class="rounded-lg m-2 flex justify-center items-center gap-4 bg-white drop-shadow-md text-center p-6">
                        <div class="grid flex-grow  place-items-center">
                            <h1 class="card font-sans text-[#F7A831] font-bold text-lg sm:text-3xl bg-base-300  ">
                                > 6 - 12 gr</h1>
                            <p class="text-sm">*per 100 ml</p>
                        </div>
                        <div class="divider divider-horizontal  divide-emerald-800">or</div>
                        <div class="grid flex-grow  place-items-center">
                            <h1 class="card font-sans text-[#F7A831] font-bold text-lg sm:text-3xl bg-base-300 ">
                                2 - 3 sdt (Sendok teh)</h1>

                            <p class="text-sm">*Akumulasi Per sendok</p>
                        </div>
                    </div>
                    <p class="text-gray-400 text-xs"><i>*pembulatan sendok teh (sdt) dapat dilihat pada FAQ</i></p>
                </div>

            </div>
        </div>

        <div id="gambarD" style="display: none" class="w-11/12 sm:w-9/12">
            <div class="p-4  ">
                <div class="flex-col p-4 w-full text-start rounded-lg bg-[#fef2f2] sm:rounded-md sm:max-w-4xl">
                    <h1 class="text-3xl font-bold text-[#BB1919]">Nilai Nutrisi D</h1>
                    <p>Jangan berlebihan. Minuman dengan kandungan gula tinggi ini harus dikonsumsi dalam jumlah sangat
                        terbatas untuk menghindari risiko kesehatan seperti obesitas dan diabetes.</p>
                </div>

                <div class="container flex justify-center flex-col">
                    <div
                        class="rounded-lg m-2 flex justify-center items-center gap-4 bg-white drop-shadow-md text-center p-6">
                        <div class="grid flex-grow  place-items-center">
                            <h1 class="card font-sans text-[#BB1919] font-bold text-lg sm:text-3xl bg-base-300  ">
                                > 12 gr</h1>
                            <p class="text-sm">*per 100 ml</p>
                        </div>
                        <div class="divider divider-horizontal  divide-emerald-800">or</div>
                        <div class="grid flex-grow  place-items-center">
                            <h1 class="card font-sans text-[#BB1919] font-bold text-lg sm:text-3xl bg-base-300 ">
                                > 3 sdt (Sendok teh)</h1>

                            <p class="text-sm">*Akumulasi Per sendok</p>
                        </div>
                    </div>
                    <p class="text-gray-400 text-xs"><i>*pembulatan sendok teh (sdt) dapat dilihat pada FAQ</i></p>
                </div>

            </div>

        </div>
        <!--tutup Nutri-Grade-->

        <div class="flex justify-center w-11/12 sm:w-9/12">
            <div class="p-6 flex flex-col w-full justify-start gap-2 ">
                <h1 class="text-2xl font-bold text-green-700">Perhitungan Nilai Gula</h1>
                <p class="text-sm">Aplikasi ini dirancang khusus untuk membantu Anda mengetahui kandungan gula.</p>

                <div class="Box1 flex flex-row gap-2">
                    <div class="place-content-center">
                        <div class="box-border h-8 w-8 bg-green-700  rounded-md"></div>
                    </div>

                    <div class="text flex flex-col">
                        <h2 class="text-md font-semibold text-green-700">
                            <=0.5 gram</h2>
                                <p class="text-sm text-slate-500">Aman dikonsumsi. Ideal untuk menjaga asupan
                                    gula minimal.</p>
                    </div>

                </div>
                <div class="Box2 flex flex-row gap-2">
                    <div class="place-content-center">
                        <div class="box-border h-8 w-8 bg-[#86BD24]  rounded-md"></div>
                    </div>

                    <div class="text flex flex-col">
                        <h2 class="text-md font-semibold text-[#86BD24]">>0.5 - 6 gram</h2>
                        <p class="text-sm text-slate-500">Aman dikonsumsi moderat. Baik untuk dikonsumsi.</p>
                    </div>

                </div>
                <div class="Box3 flex flex-row gap-2">
                    <div class="place-content-center">
                        <div class="box-border h-8 w-8 bg-[#F7A831]  rounded-md"></div>
                    </div>

                    <div class="text flex flex-col">
                        <h2 class="text-md font-semibold text-[#F7A831]">>6 - 12 gram</h2>
                        <p class="text-sm text-slate-500">Konsumsi dengan hati-hati. Hindari asupan gula berlebih.</p>
                    </div>

                </div>
                <div class="Box4 flex flex-row gap-2">
                    <div class="place-content-center">
                        <div class="box-border h-8 w-8 bg-[#BB1919]  rounded-md"></div>
                    </div>

                    <div class="text flex flex-col">
                        <h2 class="text-md font-semibold text-[#BB1919]">>12 gram</h2>
                        <p class="text-sm text-slate-500">Jangan berlebihan. Batasi Konsumsimu untuk menghindari risiko
                            kesehatan.</p>
                    </div>

                </div>
            </div>

        </div>


    </main>

    <!-- Footer -->
    <x-footer>

    </x-footer>













    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"></script>

    <script>
        $(document).ready(function() {
            const btnGambarA = $('#btnGambarA');
            const btnGambarB = $('#btnGambarB');
            const btnGambarC = $('#btnGambarC');
            const btnGambarD = $('#btnGambarD');

            const gambarA = $('#gambarA');
            const gambarB = $('#gambarB');
            const gambarC = $('#gambarC');
            const gambarD = $('#gambarD');

            function hideAll() {
                gambarA.hide()
                gambarB.hide()
                gambarC.hide()
                gambarD.hide()
            }

            btnGambarA.click(function() {
                hideAll();
                gambarA.show()
            })

            btnGambarB.click(function() {
                hideAll()
                gambarB.show()
            })

            btnGambarC.click(function() {
                hideAll()
                gambarC.show()
            })

            btnGambarD.click(function() {
                hideAll()
                gambarD.show()
            })

        })
    </script>

</body>

</html>
