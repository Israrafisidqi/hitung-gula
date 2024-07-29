<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sugar Calculation Result</title>
    @vite('resources/css/app.css')

</head>

<body>
    <!--Navbar-->
    <x-components>

    </x-components>

    <!--Tutup Navbar-->
    <main class="Main flex flex-col justify-center items-center bg-slate-100">

        <div class="flex justify-center mt-3 bg-white rounded-lg w-11/12 sm:w-9/12">
            <div class="p-6 flex flex-col w-full justify-start gap-2 text-center font-[inter]">
                <p>Mendapatkan Nilai</p>
                <h1 class="text-5xl font-bold text-green-700">{{ $nilai }}</h1>
                <div class="mb-4">
                    <p class="text-lg font-sans">Persentase :</p>
                    <div class="relative w-full h-6 bg-slate-300 rounded-full">

                        <div id="percentage-bar" class="h-full rounded"></div>
                    </div>
                    <p class="text-xl text-green-700 mt-2">{{ number_format($persentase, 1) }}%</p>
                </div>

                <!--Informasi Perhitungan-->
                <div class="flex flex-col gap-6 xl:flex-row xl:justify-center">
                    <div class="flex flex-col gap-2">
                        <h1 class="text-md font-semibold text-[#757575] divide-gray-800">Informasi per 100 ml
                        </h1>
                        <div
                            class="flex flex-col sm:items-center gap-2 text-center flex-wrap font-medium text-[#404040] ">

                            <div class="bg-gray-100 px-4 sm:min-w-96 py-3 rounded-md max-w-lg text-md">
                                <div class="flex flex-row justify-between">
                                    <p>Gula :</p>
                                    <p class="font-semibold text-green-600">{{ number_format($result, 1) }} g</p>
                                </div>
                            </div>
                            <div class="bg-gray-100 px-4 sm:min-w-96 py-3 rounded-md max-w-lg text-md">
                                <div class="flex flex-row justify-between">
                                    <p>setara dengan :</p>
                                    <p class="font-semibold text-green-600">{{ number_format($sendokGulaperml, 1) }}
                                        sdt
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col gap-2">
                        <h1 class="text-md font-reguler text-[#757575]"><b>Informasi Keseluruhan</b><br>(Seluruh Sajian
                            kemasan)
                            :</h1>
                        <div
                            class="flex flex-col sm:items-center gap-2 text-center flex-wrap font-medium text-[#404040] ">

                            <div class="bg-gray-100 px-4 sm:min-w-96 py-3 rounded-md max-w-lg text-md">
                                <div class="flex flex-row justify-between">
                                    <p>Gula :</p>
                                    <p class="font-semibold text-green-600">{{ $totalGula }} g</p>
                                </div>
                            </div>
                            <div class="bg-gray-100 px-4 sm:min-w-96 py-3 rounded-md max-w-lg text-md">
                                <div class="flex flex-row justify-between">
                                    <p>Takaran Saji :</p>
                                    <p class="font-semibold text-green-600">{{ $totalTakaranSaji }} ml
                                    </p>
                                </div>
                            </div>
                            <div class="bg-gray-100 px-4 sm:min-w-96 py-3 rounded-md max-w-lg text-md">
                                <div class="flex flex-row justify-between">
                                    <p>setara dengan :</p>
                                    <p class="font-semibold text-green-600">{{ number_format($sendokGula, 1) }} sdt
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="flex justify-center items-center">
                    <div
                        class="flex bg-blue-200 px-4 py-3 justify-around items-center rounded-lg max-w-lg text-sm font-[inter] gap-4">
                        <div class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                            </svg>

                            <p class="sm:text-center font-light">unduh dan gunakan laporan ini untuk referensi kamu
                            </p>
                        </div>
                        <a href="{{ route('sugar.calculation.download-pdf', $allData) }}" class="text-red-700">Unduh</a>
                    </div>
                </div>

                <div class="fixed-bottom flex space-x-4 justify-center w-full">
                    <a href="{{ route('sugar.calculation.form') }}"
                        class="flex items-center bg-green-600 text-white py-3 px-6 rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-50">

                        Cek Ulang
                    </a>
                </div>
            </div>

        </div>



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
            var percentage = {{ $persentase }};
            var result = {{ $result }};
            var containerWidth = $('.relative').width();
            var arrowPosition = (containerWidth * percentage) / 12;

            $('#arrow').css('left', arrowPosition + 'px');

            var barColorClass;
            var arrowColorClass;
            if (result <= 1) {
                barColorClass = 'bg-green-700 rounded-full';
                arrowColorClass = 'text-green-800';
            } else if (result > 1 && result <= 6) {
                barColorClass = 'bg-[#86BD24] rounded-full';
                arrowColorClass = 'text-green-400';
            } else if (result > 6 && result < 12) {
                barColorClass = 'bg-[#F7A831]  rounded-full';
                arrowColorClass = 'text-yellow-400';
            } else {
                barColorClass = 'bg-[#BB1919] rounded-full';
                arrowColorClass = 'text-red-600';
            }

            $('#percentage-bar').addClass(barColorClass).css('width', (percentage * 100 / 12) + '%');
            $('#arrow svg').addClass(arrowColorClass);
        });
    </script>
</body>

</html>
