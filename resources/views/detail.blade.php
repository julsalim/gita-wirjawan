<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wirjawan Notes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container" style="border-bottom: 1px solid black">
          <a class="navbar-brand" href="/">
            <img src="../assets/logo.png" alt="" style="width: 350px; margin-left: -12px">
            
          </a>
        </div>
    </nav>

    <div class="mt-4 container">
        
        <div class="sec-1" style="font-weight:800; width: fit-content; font-family: Montserrat; border-bottom: 2px solid black">
            IT REALLY COUNTS
        </div>

        <div class="mt-4" style="font-size: 50px; font-family: 'Times New Roman', Times, serif; font-weight: 800;" >
            {{ $books -> judul }}
        </div>

        <div class="mt-4" style="font-size: 20px;">
            {{ $books -> deskripsi }}
        </div>
        <div class="mt-2 d-flex flex-row align-items-center">
            @php
            
            @endphp
            <div>
                By <b>{{ $books->author }}</b> | {{ $books->tanggal }}
            </div>
            <div class="mx-2 px-2 py-1 bg-primary-subtle" style="width: fit-content; border-radius: 4px">{{ $books->reading_time }}</div>
        </div>

        <div class="mt-4 img-cover" style="width: 100%; height: 450px; overflow:hidden">
            <img src="../{{ $books->gambar }}" alt="" style="width: inherit; height: inherit; object-fit: cover  ">
        </div>
        
        <div class="mt-3 share d-flex flex-row">
            <button class="bg-primary-subtle d-flex flex-row justify-content-center align-items-center border-0" style="border-radius: 100%; width: 40px; height: 40px;">
                <i class="bi bi-linkedin"></i>
            </button>
            <button class="mx-2 bg-primary-subtle d-flex flex-row justify-content-center align-items-center border-0" style="border-radius: 100%; width: 40px; height: 40px;">
                <i class="bi bi-twitter"></i>
            </button>
            <button class="bg-primary-subtle d-flex flex-row justify-content-center align-items-center border-0" style="border-radius: 100%; width: 40px; height: 40px;">
                <i class="bi bi-facebook"></i>
            </button>
            <button class="mx-2 bg-primary-subtle d-flex flex-row justify-content-center align-items-center border-0" style="border-radius: 100%; width: 40px; height: 40px;">
                <i class="bi bi-instagram"></i>
            </button>
        </div>

        <div class="contents mt-4 mb-4">
           {{ $books->isi }}
        </div>
        
        <div class="fs-5 mt-4">
            Video Section
        </div>
        <iframe width="100%" height="500" src="{{ $books->video }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        
    </div>

</body>
</html>