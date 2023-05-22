@extends('layout.updateUsers')
@section('title', 'Edukasi')
@section('menuEdukasi', 'active')

<style>
  .card {
  position: relative;
  width: 250px;
  height: 250px;
  color: #2e2d31;
  background: #131313;
  overflow: hidden;
  border-radius: 20px;
}

.temporary_text {
  font-weight: bold;
  font-size: 24px;
  padding: 6px 12px;
  color: #f8f8f8;
}

.card_title {
  font-weight: bold;
}

.card_content {
  position: absolute;
  left: 0;
  bottom: 0;
    /* edit the width to fit card */
  width: 100%;
  padding: 20px;
  background: #f2f2f2;
  border-top-left-radius: 20px;
    /* edit here to change the height of the content box */
  transform: translateY(150px);
  transition: transform .25s;
}

.card_content::before {
  content: '';
  position: absolute;
  top: -47px;
  right: -45px;
  width: 100px;
  height: 100px;
  transform: rotate(-175deg);
  border-radius: 50%;
  box-shadow: inset 48px 48px #f2f2f2;
}

.card_title {
  color: #131313;
  line-height: 15px;
}

.card_subtitle {
  display: block;
  font-size: 12px;
  margin-bottom: 10px;
}

.card_description {
  font-size: 14px;
  opacity: 0;
  transition: opacity .5s;
}

.card:hover .card_content {
  transform: translateY(0);
}

.card:hover .card_description {
  opacity: 1;
  transition-delay: .25s;
}


</style>
@section('content')
<section style="height:100vh; overflow-y: auto;">
  <div class="container" style="padding-top:70px;">
    <div class="row pb-2 justify-content-center">
        <article class="card col-lg-4 col-md-9">
          <div class="temporary_text">
            <img src="{{ url('assets/images/fixsa.jpg') }}" class="card-img-top" style="height:250px; width:500px;" alt="...">
          </div>
          <div class="card_content">
            <h5 class="card_title">Self Awareness</h5>
            <p class="card_description">Self Awareness adalah kemampuan seseorang untuk memahami
              dan mengenali emosinya sendiri, kelebihan dan kekurangan yang dimilikinya, serta bagaimana
              perilakunya dapat mempengaruhi orang lain.</p>
              <a href="{{ route('users.SubMateri', $data = "Self Awareness") }}" class="btn btn-primary">Yuk Belajar</a>

          </div>
        </article>
        <article class="card col-lg-4 col-md-9">
          <div class="temporary_text">
            <img src="{{ url('assets/images/fixsm.jpg') }}" class="card-img-top" style="height:250px; width:500px;" alt="...">
          </div>
          <div class="card_content">
            <h5 class="card_title">Self Motivation</h5>
            <p class="card_description">Self Motivation adalah kemampuan untuk memotivasi dirinya sendiri.
               Orang yang memiliki kemampuan memotivasi diri cenderung memiliki tujuan hidup yang jelas dan
               berorientasi pada pencapaian tujuan tersebut.</p>
               <a href="{{ route('users.SubMateri', $data = "Self Motivation") }}" class="btn btn-primary">Yuk Belajar</a>

          </div>
        </article>
        <article class="card col-lg-4 col-md-9">
          <div class="temporary_text">
            <img src="{{ url('assets/images/fixsr.jpg') }}" class="card-img-top" style="height:250px; width:500px;" alt="...">
          </div>
          <div class="card_content">
            <h5 class="card_title">Self Regulation</h5>
            <p class="card_description">Self Regulation adalah kemampuan untuk mengendalikan dan mengatur emosi
              sehingga dapat menyesuaikan diri. Hal ini sangat penting karena dapat membantu seseorang untuk
              menghindari reaksi emosional yang tidak tepat.</p>
              <a href="{{ route('users.SubMateri', $data = "Self Regulation") }}" class="btn btn-primary">Yuk Belajar</a>

          </div>
        </article>
    </div>

    <div class="row pt-2 justify-content-center">
      <article class="card col-lg-4 col-md-9 ">
        <div class="temporary_text">
          <img src="{{ url('assets/images/fixsc.jpg') }}" class="card-img-top" style="height:250px; width:500px;" alt="...">
        </div>
        <div class="card_content">
          <h5 class="card_title">Social Skills</h5>
          <p class="card_description">Social Skills adalah kemampuan untuk berinteraksi dan berkomunikasi dengan
            orang lain secara efektif, untuk membangun hubungan yang baik,  memecahkan masalah secara kolektif,
            juga membantu orang yang membutuhkan.</p>
            <a href="{{ route('users.SubMateri', $data = "Social Skills") }}" class="btn btn-primary">Yuk Belajar</a>
          </div>
      </article>
      <article class="card col-lg-4 col-md-9">
        <div class="temporary_text">
          <img src="{{ url('assets/images/fixsad.jpg') }}" class="card-img-top" style="height:250px; width:500px;" alt="...">
        </div>
        <div class="card_content">
          <h5 class="card_title">Self Adjustment</h5>
          <p class="card_description">Self Adjustment adalah kemampuan untuk beradaptasi dengan perubahan situasi
             dan lingkungan yang ada sehingga lebih fleksibel dalam menghadapi perubahan dan dapat beradaptasi
             dengan situasi yang baru.</p>
             <a href="{{ route('users.SubMateri', $data = "Self Adjustment") }}" class="btn btn-primary">Yuk Belajar</a>
            </div>
      </article>
      <article class="card col-lg-4 col-md-9">
        <div class="temporary_text">
          <img src="{{ url('assets/images/fixe.jpg') }}" class="card-img-top" style="height:250px; width:500px;" alt="...">
        </div>
        <div class="card_content">
          <h5 class="card_title">Empathy</h5>
          <p class="card_description">Empathy adalah kemampuan seseorang untuk memahami dan merasakan emosi orang lain.
            Seseorang dapat lebih memahami kebutuhan dan perspektif orang lain, serta  membangun
            hubungan yang lebih baik dengan orang lain.</p>
            <a href="{{ route('users.SubMateri', $data = "Empathy") }}" class="btn btn-primary">Yuk Belajar</a>
          </div>
      </article>
    </div>
  </div>
</section>


@endsection
