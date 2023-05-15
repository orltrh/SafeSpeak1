@extends('layout.master')
@section('title', 'Forum')
@section('menuForum', 'active')

@section('content')
@parent
<style>
  .card {
  position: relative;
  background: transparent;
  width: 300px;
  height: 300px;
  border: none;
}

.pic1 {
  position: absolute;
  bottom: 10%;
  left: 40%;
  width: 175px;
  height: 175px;
}
.pics1 {
  position: absolute;
  top: -10%;
  left: 10%;
  width: 225px;
  height: 225px;
}
.pic2 {
  position: absolute;
  bottom: 20%;
  left: 40%;
  width: 150px;
  height: 150px;
}
.pics2 {
  position: absolute;
  top: -25%;
  left: 0%;
  width: 225px;
  height: 225px;
}
.pic3 {
  position: absolute;
  bottom: 50%;
  left: 40%;
  width: 125px;
  height: 125px;
}
.pics3 {
  position: absolute;
  top: -30%;
  left: 10%;
  width: 200px;
  height: 200px;
}

.teks1 {
  position: absolute;
  bottom: 20%;
  right: 25%;
  font-size: 15px;
  font-weight: bold;
}
.teks {
  position: absolute;
  bottom: 20%;
  right: 17.5%;
  font-size: 15px;
  font-weight: bold;
}



.card:hover {
  width: 300px;
}

.card .container-image {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background: #2b7cff;
  width: 190px;
  height: 190px;
  cursor: pointer;
  border: none;
  border-radius: 50%;
  box-shadow: 0 0 3px 1px #1818183d, 2px 2px 3px #18181865, inset 2px 2px 2px #2676ff;
  transition: all .3s ease-in-out, opacity .3s;
  transition-delay: .6s, 0s;
}

.card:hover .container-image {
  opacity: 0;
  border-radius: 8px;
  transition-delay: 0s, .6s;
}

.card .container-image .image-circle {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 125px;
  height: auto;
  object-fit: contain;
  filter: drop-shadow(2px 2px 2px #1818188a);
  transition: all .3s ease-in-out;
  transition-delay: .4s;
}

.card:hover .container-image .image-circle {
  opacity: 0;
  transition-delay: 0s;
}

.card .content {
  display: flex;
  justify-content: space-between;
  align-items: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background: #2b7cff;
  padding: 20px;
  width: 190px;
  height: 190px;
  cursor: pointer;
  border: none;
  border-radius: 8px;
  box-shadow: 0 0 3px 1px #1818183d, 2px 2px 3px #18181865, inset 2px 2px 2px #2676ff;
  visibility: hidden;
  transition: .3s ease-in-out;
  transition-delay: 0s;
  z-index: 1;
}

.card:hover .content {
  width: 290px;
  height: 190px;
  visibility: visible;
  transition-delay: .5s;
}

.card .content .detail {
  display: flex;
  flex-direction: column;
  width: 100%;
  height: 100%;
  opacity: 0;
  transition: all .3s ease-in-out;
  transition-delay: 0s;
}

.card:hover .content .detail {
  color: #181818;
  opacity: 100%;
  transition: 1s;
  transition-delay: .3s;
}

.card .content .detail span {
  margin-bottom: 5px;
  font-size: 18px;
  font-weight: 800;
}

.card .content .detail button {
  background: #b8854b;
  margin-top: auto;
  width: 75px;
  height: 25px;
  color: #ffffff;
  font-size: 13px;
  border: none;
  border-radius: 8px;
  transition: .3s ease-in-out;
}

.card .content .detail button:hover {
  background: #d39f63;
}

.card .content .product-image {
  position: relative;
  width: 100%;
  height: 100%;
}

.card .content .product-image .box-image {
  display: flex;
  position: absolute;
  top: 0;
  left: -25%;
  width: 100%;
  height: 115%;
  opacity: 0;
  transform: scale(.5);
  transition: all .5s ease-in-out;
  transition-delay: 0s;
}

.card:hover .content .product-image .box-image {
  top: -25%;
  left: 0;
  opacity: 100%;
  transform: scale(1);
  transition-delay: .3s;
}

.card .content .product-image .box-image .img-product {
  margin: auto;
  width: 7rem;
  height: auto;
}

.fil-shoes1, .fil-shoes2 {
  fill: #333333
}
</style>
<section style="height:77vh ">
  <div class="container">
    <div class="row mt-5 pb-5 justify-content-center justify-content-between">
  <div class="card col-md-4">
    <div class="container-image">
      <div class="pic1"><img src="assets/picture/umum1.png" class="img-fluid" alt=""></div>
      <div class="teks1">Public Forum</div>
    </div>
    <div class="content">
      <div class="detail pt-3">
        <span>click the button below</span>
        <div class="pt-3"><a href="https://t.me/+7_KM4HoVVccxNWY1" class="btn btn-light">Join</a></div>
      </div>
      <div class="product-image">
        <div class="box-image">
          <div class="pics1"><img src="assets/picture/umum1.png" class="img-fluid" alt=""></div>
        </div>
      </div>
    </div>
  </div>

  <div class="card col-md-4">
    <div class="container-image">
      <div class="pic2"><img src="assets/picture/univ1.png" class="img-fluid" alt=""></div>
      <div class="teks">University Forum</div>
    </div>
    <div class="content">
      <div class="detail pt-3">
        <span>click the button below</span>
        <div class="pt-3"><a href="https://t.me/+PDh0eb7hInVhMzE1" class="btn btn-light">Join</a></div>
      </div>
      <div class="product-image">
        <div class="box-image">
          <div class="pics2"><img src="assets/picture/univ1.png" class="img-fluid" alt=""></div>
        </div>
      </div>
    </div>
  </div>

  <div class="card col-md-4">
    <div class="container-image">
      <div class="pic3"><img src="assets/picture/perusahaan1.png" class="img-fluid" alt=""></div>
      <div class="teks">Corporate Forum</div>
    </div>
    <div class="content">
      <div class="detail pt-3">
        <span>click the button below</span>
        <div class="pt-3"><a href="https://t.me/+Jy4OXRoin09kNTE1" class="btn btn-light">Join</a></div>
      </div>
      <div class="product-image">
        <div class="box-image">
          <div class="pics3"><img src="assets/picture/perusahaan1.png" class="img-fluid" alt=""></div>
        </div>
      </div>
    </div>
  </div>
  </div>


  <div class="rowjustify-content-center align-content-center align-items-center">
    <div class="col pt-5 justify-content-center align-content-center align-items-center">
      <div><h2>Ingin Berkonsultasi? Klik tombol pesan dibawah ini</h2></div>
      <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="79922e2e-962d-4026-afde-df91e60ac883";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>

    </div>
  </div>
</div>
</div>

@endsection

