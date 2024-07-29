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


    <div class="Hero">
        <div class="Text-button flex flex-col p-4 h-screen justify-between">
            <div class="Text-image text-center space-y-6">
                <div class="gambar flex justify-center  rounded-lg">
                    <img class="w-full sm:w-6/12 md:w-2/6" src="{{ asset('gambar/sugar.jpg') }}" alt="">
                </div>
                <div class="Text flex flex-col space-y-2  ">
                    <h1 class="text-2xl font-bold text-[#0fa968]">Hitung Nilai Gula</h1>
                    <p class="text-sm sm:text-md text-slate-500">Selamat datang di website kalkulator gula kami.</p>
                </div>
            </div>
            <div class="sm:flex sm:justify-center">
                <div class="button flex flex-col sm:flex-row text-center gap-2">
                    <a href="{{ route('sugar.calculation.form') }}"
                        class="rounded-md min-w-full sm:min-w-6 sm:py-4 sm:px-12 bg-[#0fa968]  py-3 text-base font-semibold text-white shadow-sm hover:bg-[#108554] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Hitung</a>
                    <a href="{{ route('home') }}"
                        class="rounded-md min-w-full sm:min-w-6 sm:py-4 sm:px-12 py-2.5  text-base font-semibold text-[#108554] shadow-sm  focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 ">Home</a>
                </div>
            </div>

        </div>

    </div>

</body>

</html>
