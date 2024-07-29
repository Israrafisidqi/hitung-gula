<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kalkulator</title>
    @vite('resources/css/app.css')
</head>

<body>
    <!--Navbar-->
    <x-components>

    </x-components>

    <!--Tutup Navbar-->

    <main class="h-screen flex  items-center justify-center bg-white">
        <div class="w-full sm:w-9/12">
            <div class="bg-white p-8 rounded-lg shadow-sm mb-6">
                <div class="text-center">
                    <h1 class="text-2xl font-bold">Hitung Gula</h1>
                    <p class="text-sm">Hitung Nilai Gula pada Minuman Kemasan</p>
                </div>

                <form action="{{ route('sugar.calculation.result') }}" method="POST">
                    @csrf
                    <div class="mb-4 gap-1 flex flex-col">
                        <label for="gula" class="text-sm font-medium text-gray-700">Gula (g):</label>
                        <input type="text" id="gula" name="gula" required
                            value="{{ old('gula', (session()->getOldInput('gula') !== null ? session()->getOldInput('gula') : $errors->has('gula')) ? '' : '') }}"
                            class="mt-1 p-2 w-full border @error('gula') border-red-500 @enderror rounded-md  focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                        @error('gula')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4 gap-1 flex flex-col">
                        <label for="takaran_saji" class="text-sm font-medium text-gray-700">Takaran Saji (ml):</label>
                        <input type="text" id="takaran_saji" name="takaran_saji" required
                            value="{{ old('takaran_saji', (session()->getOldInput('takaran_saji') !== null ? session()->getOldInput('takaran_saji') : $errors->has('takaran_saji')) ? '' : '') }}"
                            class="mt-1 p-2 w-full border @error('takaran_saji') border-red-500 @enderror rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                        @error('takaran_saji')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-6 gap-1 flex flex-col">
                        <label for="sajian_per_kemasan" class="text-sm font-medium text-gray-700">Sajian Per
                            Kemasan:</label>
                        <input type="text" id="sajian_per_kemasan" name="sajian_per_kemasan" required
                            value="{{ old('sajian_per_kemasan', (session()->getOldInput('sajian_per_kemasan') !== null ? session()->getOldInput('sajian_per_kemasan') : $errors->has('sajian_per_kemasan')) ? '' : '') }}"
                            class="mt-1 p-2 w-full border @error('sajian_per_kemasan') border-red-500 @enderror rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                        @error('sajian_per_kemasan')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="text-center">
                        <button type="submit"
                            class="bg-green-700 text-white w-full sm:w-fit sm:flex py-2 sm:px-8 rounded-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-50">
                            Calculate
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>
