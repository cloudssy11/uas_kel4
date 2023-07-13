<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />

    <!-- Tittle Icons -->

    <!-- CSS KU -->
    <link rel="stylesheet" href="my.css" />
    <title>Wisata Kota Depok | {{ $title }}</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container">
          <a class="navbar-brand fw-bold"  href="/">Wisata Kota Depok</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link {{ ($active === "home") ? 'active' : '' }}" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($active === "blog") ? 'active' : '' }}" href="/blog">Tempat Wisata</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($active === "categories") ? 'active' : '' }}" href="/categories">Jenis Wisata</a>
              </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                  @auth
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Welcome back! {{ auth()->user()->name }}
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                          <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                          </form>
                        </li>
                      </ul>
                    </li>
    
                  @else
                    <li class="nav-item">
                      <a class="nav-link {{ ($active === "home") ? 'active' : '' }}" href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                    </li>
                  @endauth
            </ul>
          </div>
        </div>
      </nav>
    <!-- Akhir Navbar -->

    <!-- Hero -->
    <section id="home" class=" text-center mt-5">
      <div class="container justify-content-center">
        <div style="max-height: 400px; overflow: hidden;" class="mb-3">
            <img class="img-fluid rounded" src="{{ asset('img/depok.jpg') }}" alt="jpg" />
        </div>
        <h1 class="display-5 mb-3">Selamat Datang di Kota Depok</h1>
        <div class="row">
          <div class="col">
            <p class="lead">
                Kota Depok bermula dari sebuah Kecamatan yang berada di lingkungan Kawedanan (Pembantu Bupati) wilayah Parung Kabupaten Bogor. Pada tahun 1976 perumahan mulai dibangun baik oleh Perum Perumnas maupun pengembang yang kemudian diikuti dengan dibangunnya kampus Universitas Indonesia (UI), serta meningkatnya perdagangan dan jasa yang semakin pesat sehingga diperlukan kecepatan pelayanan.

                Perkembangan Depok yang begitu cepat menjadi perhatian bagi Pemerintah Orde Baru. Menteri Dalam Negeri kala itu, Amir Machmud, mulai mengkaji peningkatan status Kecamatan Depok menjadi Kota Administratif. Peningkatan status Kota Depok dilakukan agar pembangunan lebih tertata dan terarah sebagai kota masa depan, ketimbang dikelola sepenuhnya oleh Kota Bogor yang hanya sebagai kecamatan yang dipimpin oleh Camat.
                
                Pembentukan Kota Administratif Depok dilakukan oleh Menteri Dalam Negeri Amir Machmud sekaligus melantik Wali Kota Administratif yang pertama, yaitu Mochammad Rukasah Suradimadja oleh Gubernur Jawa Barat, Aang Kunaefi.
            </p>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#9cd0fc"
          fill-opacity="1"
          d="M0,128L40,138.7C80,149,160,171,240,154.7C320,139,400,85,480,101.3C560,117,640,203,720,240C800,277,880,267,960,245.3C1040,224,1120,192,1200,202.7C1280,213,1360,267,1400,293.3L1440,320L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Hero -->

    <!-- Jenis Wisata -->
    <section id="jenis" style="background-color: #9cd0fc">
        <h1 class="mb-5 text-center" >Jenis Wisata</h1>
        <div class="container">
            <div class="row d-flex justify-content-between">
                @foreach ($categories as $category)
                <div class="col-md-4">
                    <a href="/blog?category={{ $category->slug }}">
                    <div class="card bg-dark text-white">
                        <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                        <div class="card-img-overlay d-flex align-items-center p-0">
                        <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0, 0, 0, 0.7)">{{ $category->name }}</h5>
                        </div>
                    </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#fff"
          fill-opacity="1"
          d="M0,256L40,245.3C80,235,160,213,240,213.3C320,213,400,235,480,240C560,245,640,235,720,202.7C800,171,880,117,960,112C1040,107,1120,149,1200,181.3C1280,213,1360,235,1400,245.3L1440,256L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Jenis Wisata -->

    <!-- Tempat Wisata -->
    <section id="tempat">
        <h1 class="mb-5 text-center" >Tempat Wisata</h1>
        <div class="container">
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)"><a class="text-decoration-none text-white" href="/blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a></div>
                            @if ($post->image)
                                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="card-img-top">
                            @else
                                <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                            @endif
                            <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p>
                                {{-- <small>
                                    By: <a class="text-decoration-none" href="/blog?user={{ $post->user->username }}">{{ $post->user->name }}</a> {{ $post->created_at->diffForHumans() }}
                                </small> --}}
    
                                <small>
                                    Kecamatan {{ $post->kecamatan->name }} | {{ $post->created_at->diffForHumans() }}
                                </small>
                            </p>
                            <p class="card-text">{{ $post->excerpt }}</p>
                            <a href="/blog/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#9cd0fc"
          fill-opacity="1"
          d="M0,192L30,181.3C60,171,120,149,180,133.3C240,117,300,107,360,138.7C420,171,480,245,540,245.3C600,245,660,171,720,160C780,149,840,203,900,218.7C960,235,1020,213,1080,213.3C1140,213,1200,235,1260,218.7C1320,203,1380,149,1410,122.7L1440,96L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Tempat Wisata -->

    <!-- Footer -->
    <footer style="background-color: #9cd0fc" class="text-center pb-4">
      <p>Created with <i class="bi bi-heart-fill text-danger"></i> by <span class="text-black fw-bold">Jawir</span></p>
    </footer>
    <!-- Akhir Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
