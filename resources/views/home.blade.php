<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wirjawan Notes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container" style="border-bottom: 1px solid black">
          <a class="navbar-brand" href="/">
            <img src="assets/logo.png" alt="" style="width: 350px; margin-left: -12px">
            
          </a>
        </div>
    </nav>

    <div class="container hover" onclick="window.location.href = '/detail/' + {{ $highlight[0]->id }}">
        <div class="row" style="height: 250px">
            <div class="col-4 overflow-hidden d-flex flex-column justify-content-center">
                <div class="img-wrapper d-flex flex-column justify-content-center" style="overflow: hidden; height: 225px; width: 100%;">
                    <img style="height: 225px" class="w-2" src="{{ $highlight[0]->gambar }}" alt="">
                </div>
            </div>
            <div class="col-8">
                <div class="d-flex flex-column pt-3">
                    <div class="sec-1" style="font-weight:800; width: fit-content; font-family: Montserrat; border-bottom: 2px solid black">
                        IT REALLY COUNTS
                    </div>
                    <div class="judul-highlight mt-4">
                        <h1 style="font-family: 'Times New Roman', Times, serif; font-weight: 800">
                            {{ $highlight[0]->judul }}
                        </h1>
                    </div>
                    <div class="isi-hightlight mt-4">
                        <p style="font-family: 'Times New Roman', Times, serif; font-weight: 400">
                            {{ $highlight[0]->deskripsi }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="sec-1" style="font-weight:800; width: fit-content; font-family: Montserrat; border-bottom: 2px solid black">
            LATEST BOOK REVIEWS
        </div>

        <div class="mt-4 row container d-flex flex-row justify-content-between">
            @foreach($latest as $item)
            <div class="hover col-3 p-0 m-0" onclick="window.location.href = '/detail/' + {{ $item->id }}" style="width: 220px">
                <div class="" style="width:220px; height:220px; overflow:hidden">
                    <img src="{{ $item->gambar }}" alt="" style="width: inherit; height: inherit; object-fit: cover">
                </div>

                <h5 class="mt-2 m-0 p-0" style="font-weight: 700; font-family:'Times New Roman', Times, serif">
                    {{ $item->judul }}
                </h5>
                <div style="font-size: 12px">
                    {{ $item->deskripsi }}
                </div> 
            </div>
            @endforeach
            
        </div>
    </div>
    <div class="bg-black mt-4 py-4">
        <div class="container">
            <div class="sec-2 text-light" style="font-weight:800; width: fit-content; font-family: Montserrat; border-bottom: 2px solid white">
                Book Series Review
            </div>
    
            <div class="mt-4 row">
                
                @foreach($books as $item)
                <div class="col-4 p-0 ">
                    <div class="container ">
                        <div class="" style="width:100%; height:220px; overflow:hidden">
                            <img src="{{ $item->gambar }}" alt="" style="width: inherit; height: inherit; object-fit: cover">
                        </div>
        
                        <h5 class="m-0 p-0 text-light mt-2" style="font-weight: 700;">
                            {{ $item->judul }}
                        </h5>
                        <a href="/detail/{{ $item->id }}"  type="button" class="mt-2 px-3 py-1 btn btn-outline-light">Read Post</a>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="d-flex justify-content-end bg-black">
                {{ $books->links() }}
            </div>
        </div>
    </div>

</body>
</html>