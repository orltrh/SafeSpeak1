@extends('layout.admin')
@section('title', 'Panduan')
@section('menuadPanduan', 'active')

@section('content')
<section style="height:100vh; overflow-y: auto; padding-top: 200px;">
  <div class="container">
    <div class="row">

      <div class="col-lg-4 col-md-4" data-aos="fade-up">
        <div class="card" style="width: 18rem;">
          <div class="card-header text-center" style="color:dodgerblue">
            Panduan SafeSpeaks
          </div>
          <div class="card-body">
            <ul class="list-group list-group-flush">
              <div class="btn-group">
                <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  Tracking Position
                </button>
                <ul class="dropdown-menu">
                <div style="height:65px; width:300px; text-align:center; ">Fitur ini memungkinkan Anda untuk melacak posisi secara real-time. </div>
                </ul>
              </div>
            </ul>
          </div>

          <div class="card-body">
            <ul class="list-group list-group-flush">
              <div class="btn-group">
                <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  Edukasi
                </button>
                <ul class="dropdown-menu">
                <div style="height:65px; width:300px; text-align:center;">Fitur ini menyediakan materi tentang Emotional Intelligence.</div>
                </ul>
              </div>
            </ul>
          </div>
          <div class="card-body">
            <ul class="list-group list-group-flush">
              <div class="btn-group">
                <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  Forum 
                </button>
                <ul class="dropdown-menu">
                <div style="height:65px; width:300px; text-align:center">Fitur ini merupakan wadah interaksi, diskusi, dan sharing antar pengguna.</div>
                </ul>
              </div>
            </ul>
          </div>

        </div>
      </div>

      <div class="col-lg-4 col-md-4" data-aos="zoom-out">
        <div class="card" style="width: 18rem;">
          <div class="card-header text-center" style="color:dodgerblue">
            Pengaduan Satgas
          </div>

          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <ul class="list-group list-group-flush">
                <div class="btn-group">
                  <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Mengumpulkan bukti
                  </button>
                  <ul class="dropdown-menu">
                  <div style="height:65px; width:350px; text-align:center;">Kumpulkan semua bukti yang mendukung laporan Anda</div>
                  </ul>
                </div>
              </ul>
            </li>
            <li class="list-group-item">
              <ul class="list-group list-group-flush">
                <div class="btn-group">
                  <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Menghubungi Satgas PPKS
                  </button>
                  <ul class="dropdown-menu">
                  <div style="height:75px; width:310px; text-align:center;">Cari tahu informasi kontak resmi Satgas PPKS melalui situs web atau sumber terpercaya.</div>
                  </ul>
                </div>
              </ul>
            </li>
            <li class="list-group-item">
              <ul class="list-group list-group-flush">
                <div class="btn-group">
                  <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Memberikan Informasi
                  </button>
                  <ul class="dropdown-menu">
                  <div style="height:75px; width:350px; text-align:center;">Sampaikan secara jelas dan rinci kejadian kekerasan seksual atau bullying yang terjadi.</div>
                  </ul>
                </div>
              </ul>
            </li>
            <li class="list-group-item">
              <ul class="list-group list-group-flush">
                <div class="btn-group">
                  <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Memberikan Bukti
                  </button>
                  <ul class="dropdown-menu">
                  <div style="height:75px; width:310px; text-align:center;">Jika memungkinkan, berikan bukti yang telah Anda kumpulkan kepada Satgas PPKS.</div>
                  </ul>
                </div>
              </ul>
            </li>
            <li class="list-group-item">
              <ul class="list-group list-group-flush">
                <div class="btn-group">
                  <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Identifikasi Pelaku
                  </button>
                  <ul class="dropdown-menu">
                  <div style="height:75px; width:350px; text-align:center;">Jika Anda dapat mengidentifikasi pelaku, berikan deskripsi yang jelas dan rinci kepada Satgas PPKS.</div>
                  </ul>
                </div>
              </ul>
            </li>
            <li class="list-group-item">
              <ul class="list-group list-group-flush">
                <div class="btn-group">
                  <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Ikuti Instruksi
                  </button>
                  <ul class="dropdown-menu">
                  <div style="height:60px; width:300px; text-align:center;">Patuhi petunjuk dan instruksi yang diberikan oleh petugas Satgas PPKS.</div>
                  </ul>
                </div>
              </ul>
            </li>
            <li class="list-group-item">
              <ul class="list-group list-group-flush">
                <div class="btn-group">
                  <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Dukungan & Bantuan
                  </button>
                  <ul class="dropdown-menu">
                  <div style="height:75px; width:350px; text-align:center;">Jangan ragu untuk meminta bantuan dari keluarga, teman, atau organisasi yang berkaitan.</div>
                  </ul>
                </div>
              </ul>
            </li>
            <li class="list-group-item">
              <ul class="list-group list-group-flush">
                <div class="btn-group">
                  <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Tetap Terhubung
                  </button>
                  <ul class="dropdown-menu">
                  <div style="height:75px; width:310px; text-align:center;">Tetap terhubung dengan Satgas PPKS untuk memperoleh pembaruan tentang perkembangan laporan Anda.</div>
                  </ul>
                </div>
              </ul>
            </li>
          </ul>
        </div>
      </div>

      <div class="col-lg-4 col-md-4" data-aos="fade-down">
        <div class="card" style="width: 18rem;">
          <div class="card-header text-center" style="color:dodgerblue">
            Pengaduan Polisi
          </div>

          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <ul class="list-group list-group-flush">
                <div class="btn-group">
                  <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Mengumpulkan bukti
                  </button>
                  <ul class="dropdown-menu">
                  <div style="height:65px; width:350px; text-align:center;">Kumpulkan semua bukti yang mendukung laporan Anda</div>
                  </ul>
                </div>
              </ul>
            </li>
            <li class="list-group-item">
              <ul class="list-group list-group-flush">
                <div class="btn-group">
                  <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Temui Polisi
                  </button>
                  <ul class="dropdown-menu">
                  <div style="height:75px; width:300px; text-align:center;">Kunjungi kantor polisi terdekat di wilayah Anda atau kantor polisi yang memiliki yurisdiksi atas kasus Anda.</div>
                  </ul>
                </div>
              </ul>
            </li>
            <li class="list-group-item">
              <ul class="list-group list-group-flush">
                <div class="btn-group">
                  <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Laporkan Kejadian
                  </button>
                  <ul class="dropdown-menu">
                  <div style="height:75px; width:350px; text-align:center;">Sampaikan secara jelas dan rinci kejadian kekerasan seksual atau bullying yang telah terjadi kepada petugas polisi.</div>
                  </ul>
                </div>
              </ul>
            </li>
            <li class="list-group-item">
              <ul class="list-group list-group-flush">
                <div class="btn-group">
                  <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Memberikan Bukti
                  </button>
                  <ul class="dropdown-menu">
                  <div style="height:85px; width:400px; text-align:center;">Serahkan bukti yang telah Anda kumpulkan kepada petugas polisi. Berikan salinan dokumen dan tangkapan layar jika memungkinkan.</div>
                  </ul>
                </div>
              </ul>
            </li>
            <li class="list-group-item">
              <ul class="list-group list-group-flush">
                <div class="btn-group">
                  <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Saksi & Identifikasi
                  </button>
                  <ul class="dropdown-menu">
                  <div style="height:75px; width:350px; text-align:center;">Jika ada saksi, berikan nama dan kontak mereka jika berkenan. Berikan deskripsi yang jelas tentang pelaku kepada polisi.</div>
                  </ul>
                </div>
              </ul>
            </li>
            <li class="list-group-item">
              <ul class="list-group list-group-flush">
                <div class="btn-group">
                  <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Catat Nomor Laporan
                  </button>
                  <ul class="dropdown-menu">
                  <div style="height:65px; width:300px; text-align:center;">Pastikan Anda mencatat nomor laporan polisi yang diberikan kepada Anda.</div>
                  </ul>
                </div>
              </ul>
            </li>
            <li class="list-group-item">
              <ul class="list-group list-group-flush">
                <div class="btn-group">
                  <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Ikuti Prosedur
                  </button>
                  <ul class="dropdown-menu">
                  <div style="height:75px; width:320px; text-align:center;">Tanyakan kepada petugas polisi tentang prosedur lebih lanjut yang harus Anda ikuti.</div>
                  </ul>
                </div>
              </ul>
            </li>
            <li class="list-group-item">
              <ul class="list-group list-group-flush">
                <div class="btn-group">
                  <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Dukungan & Bantuan
                  </button>
                  <ul class="dropdown-menu">
                  <div style="height:75px; width:300px; text-align:center;">Jangan ragu untuk meminta bantuan dari keluarga, teman, atau organisasi yang berkaitan.</div>
                  </ul>
                </div>
              </ul>
            </li>
            <li class="list-group-item">
              <ul class="list-group list-group-flush">
                <div class="btn-group">
                  <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Tindak Lanjut
                  </button>
                  <ul class="dropdown-menu">
                  <div style="height:75px; width:300px; text-align:center;">Tetap terhubung dengan kepolisian dan periksa secara berkala tentang perkembangan laporan Anda.</div>
                  </ul>
                </div>
              </ul>
            </li>
            <li class="list-group-item">
              <ul class="list-group list-group-flush">
                <div class="btn-group">
                  <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Konsultasi
                  </button>
                  <ul class="dropdown-menu">
                  <div style="height:75px; width:300px; text-align:center;">Pertimbangkan untuk berkonsultasi dengan seorang penasihat hukum untuk mendapatkan nasihat lebih lanjut.</div>
                  </ul>
                </div>
              </ul>
            </li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</section>
@endsection
