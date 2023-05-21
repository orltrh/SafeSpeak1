@extends('layout.admin')
@section('title', 'Self Awareness')
<style>
  body {
    margin: 0;
  }

  td,
  p {
    font-size: 13px;
    color: #878787;
  }

  ul {
    margin: 0 0 10px 25px;
    padding: 0;
  }

  li {
    margin: 0 0 3px 0;
  }

  h1,
  h2 {
    color: black;
  }

  h1 {
    font-size: 25px;
  }

  h2 {
    font-size: 20px;
  }

  a {
    color: #2F82DE;
    font-weight: bold;
    text-decoration: none;
  }

  .entire-page {
    width: 100%;
    padding: 20px 0;
    font-family: 'Lucida Grande', 'Lucida Sans Unicode', Verdana, sans-serif;
    line-height: 1.5;
  }

  .email-body {
    max-width: 1500px;
    min-width: 320px;
    margin: 0 auto;
    background: #eeeeee;
    border-collapse: collapse;
  }

  .email-body img {
    max-width: 100%;
  }

  .email-header {
    background: rgb(0, 94, 255);
    padding: 30px;
  }

  .news-section {
    padding: 2px 150px;
  }

  @media (max-width: 767.98px) {
    .news-section {
      padding: 2px 15px;
    }
  }

  @media (max-width: 575.98px) {
    .news-section {
      padding: 2px 5px;
    }
  }

</style>
@section('content')
@parent

<section id="hero" style="overflow-y: auto;">
  <div class="container">
    <div class="row">
      <div class="col">
        <table class="entire-page">

          <tr>

            <td>

              <table class="email-body">
                <tr>
                  <td class="email-header">
                    <div class="text-center pt-2">
                      <h1 style="color:#eee; word-spacing: 20px;">EMOTIONAL INTELLIGENCE</h1>
                    </div>
                  </td>
                </tr>

                <tr>

                  <td class="news-section">
                    <div class="text-center" style="padding-top: 10px;">
                      <h1>{{ $data->judul }}</h1>
                    </div>
                    <div style="display: flex; justify-content: center; padding-bottom:100px;">
                      <img style="height:500px; width:1000px" src="{{ asset('storage/' . $data->image) }}">
                    </div>
                  </td>
                </tr>

                <tr>
                  <td class="news-section">
                    <p style="text-indent: 50px; text-align:justify;">{{ $data->paragraf1 }}</p>
                  </td>
                </tr>

                <tr>
                  <td class="news-section">
                    <p style="text-indent: 50px; text-align:justify;">{{ $data->paragraf2 }}</p>
                  </td>
                </tr>
                <tr>
                  <td class="news-section">
                    <p style="text-indent: 50px; text-align:justify;">{{ $data->paragraf3 }}</p>
                  </td>
                </tr>
                <tr>
                  <td class="news-section">
                    <p style="text-indent: 50px; text-align:justify;">{{ $data->paragraf4 }}</p>
                  </td>
                </tr>
                <tr>
                  <td class="news-section">
                    <p style="text-indent: 50px; text-align:justify;">{{ $data->paragraf5 }}</p>
                  </td>
                </tr>
              </table>

            </td>

          </tr>

        </table>
      </div>
    </div>
  </div>

</section>
@endsection
