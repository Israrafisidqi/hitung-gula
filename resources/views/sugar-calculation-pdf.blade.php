<!DOCTYPE html>
<html>

<head>
    <title>Nilai Gula Minuman Kemasan</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .sub-title {
            color: #28a745;
        }

        .section {
            margin-bottom: 20px;
        }

        .header,
        .footer {
            text-align: center;
            padding: 10px 0;
        }

        .header {
            border-bottom: 1px solid #ddd;
        }

        .footer {
            border-top: 1px solid #ddd;
            font-size: 12px;
            color: #777;
        }
    </style>
</head>

<body>
    <div class="container border rounded p-4">
        <!-- Header -->
        <div class="header mb-4">
            <h1 class="h3">Nilai Gula Minuman Kemasan</h1>
        </div>

        <!-- Informasi berdasarkan Label Minuman kemasan -->
        <div class="section">
            <p>Mendapatkan Nilai :<b>{{ $nilai }}</b></p>
            <h2 class="sub-title h5 mb-3">Informasi berdasarkan Label Minuman kemasan</h2>
            <p class="mb-2">Gula: <span class="font-weight-bold">{{ $gula }} g</span></p>
            <p class="mb-2">Takaran Saji: <span class="font-weight-bold">{{ $takaranSaji }} ml</span></p>
            <p class="mb-2">Sajian Per kemasan: <span class="font-weight-bold">{{ $sajianPerKemasan }}</span></p>
        </div>

        <!-- Informasi berdasarkan takaran per 100 ml -->
        <div class="section">
            <h2 class="sub-title h5 mb-3">Informasi berdasarkan takaran per 100 ml</h2>
            <p class="mb-2">Gula: <span class="font-weight-bold">{{ number_format($result, 1) }} g/100 ml</span></p>
            <p class="mb-2">Takaran Saji: <span class="font-weight-bold">100 ml</span></p>
        </div>

        <!-- Informasi berdasarkan Nilai Keseluruhan (1 botol) -->
        <div class="section">
            <h2 class="sub-title h5 mb-3">Informasi berdasarkan Nilai Keseluruhan (1 botol)</h2>
            <p class="mb-2">Gula: <span class="font-weight-bold">{{ $totalGula }} g</span></p>
            <p class="mb-2">Takaran Saji: <span class="font-weight-bold">{{ $totalTakaranSaji }} ml</span></p>

        </div>

        <!-- Footer -->
        <div class="footer">
            <p><b>Perhatian:</b> Laporan ini hanya digunakan untuk tujuan pribadi</p>
        </div>
    </div>
</body>

</html>
