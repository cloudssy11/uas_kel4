@extends('dashboard.layouts.main')

@section('container')
  
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h2 class="mb-3">Ini jenis {{ $category->name }}</h2>

            <a href="/dashboard/categories" class="btn btn-success"><span data-feather="arrow-left" class="align-text-bottom"></span> Back to data jenis</a>
            <a href="/dashboard/categories/{{ $category->slug }}/edit" class="btn btn-warning"><span data-feather="edit" class="align-text-bottom"></span> Edit</a>
            <form action="/dashboard/categories/{{ $category->slug }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="x-circle" class="align-text-bottom"></span> Delete</button>
            </form>

            <article class="my-3 fs-5">
                <p>Jenis wisata adalah klasifikasi atau kategori yang digunakan untuk menggambarkan berbagai jenis pengalaman perjalanan yang dapat dinikmati oleh wisatawan. Berikut ini adalah beberapa contoh jenis wisata yang umum:</p>
                <ol>
                    <li>Wisata Alam: Jenis wisata ini mencakup kunjungan ke taman nasional, hutan, pegunungan, dan daerah alam lainnya. Wisatawan dapat menikmati keindahan alam, melakukan kegiatan luar ruangan seperti hiking, camping, mendaki gunung, atau menjelajahi sungai dan danau.</li>
                    <li>Wisata Religi: Jenis wisata ini melibatkan perjalanan ke tempat-tempat suci, seperti kuil, gereja, masjid, atau tempat ibadah lainnya. Wisatawan dapat mempelajari dan mengalami praktik keagamaan, mengamati arsitektur religius, atau berpartisipasi dalam upacara keagamaan.</li>
                    <li>Wisata bahari merujuk pada jenis wisata yang berfokus pada kegiatan dan destinasi yang terkait dengan laut, pantai, dan ekosistem maritim. Ini melibatkan kunjungan ke tujuan wisata yang terletak di sepanjang garis pantai, pulau, atau wilayah perairan. Wisatawan dapat menikmati berbagai aktivitas di lingkungan bahari dan mengeksplorasi kekayaan alam yang dimiliki oleh laut dan pantai.</li>
                </ol>
            </article>
        </div>
    </div>
</div>


@endsection