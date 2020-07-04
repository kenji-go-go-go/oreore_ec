<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta http-equiv="content-type" charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>ichiIchiban</title>

  <!-- Bootstrap CSS -->
  {{-- CSS --}}
  <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
  <link href="{{ mix('/css/app.css') }}" rel="stylesheet">

  {{-- JavaScript --}}
  <!-- <script src="{{ asset('js/app.js') }}"></script> -->
  <script src="{{ mix('/js/app.js') }}"></script>

  {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}
  {{-- <link href="css/app-id=ff441bcfde2a378020c8.css" rel="stylesheet"> --}}
  {{-- <script src="js/app-id=d27386a8430400704ba4.js"></script> --}}

  {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> --}}
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> --}}
  {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> --}}

  <script language="javascript" type="text/javascript">
  function ToCart(productid, count) {
    $(".quantity").each(function (i, elem) {
      if (count == i) {
        window.location.href = '/cart/' + productid + '/' + $(elem).val();
      }
    });
  }

  function ToCartFromDetail(productid, count) {
    $(".quantityfromdetail").each(function (i, elem) {
      if (count == i) {
        window.location.href = '/cart/' + productid + '/' + $(elem).val();
      }
    });
  }
  </script>
  <script>
  /*
  いつまでに注文するといつまでに届くのかを表示する
  12:00:00:000 ~ 23:59:59:999 の注文の場合は、明日の午前中
  03:00:00:000 ~ 11:59:59:999 の注文の場合は、今日の午後
  00:00:00:000 ~ 02:59:59:999 の注文の場合は、今日の午前中
  */
  function showCountdown() {
    const now = new Date();
    const nowHour = now.getHours();
    var targetDate, targetMessage;

    if (12 <= nowHour && nowHour < 24) {
      targetDate = (new Date()).setHours(23, 59, 59, 999);
      targetMessage = "明日の午前中";
    } else if (3 <= nowHour && nowHour < 12) {
      targetDate = (new Date()).setHours(11, 59, 59, 999);
      targetMessage = "今日の午後";
    } else {
      targetDate = (new Date()).setHours(2, 59, 59, 999);
      targetMessage = "今日の午前中";
    }

    remainTime = targetDate - now.getTime();

    const remainHour = Math.floor(remainTime / (1000 * 60 * 60));
    const remainMinute = Math.floor((remainTime / (1000 * 60)) - (remainHour * 60));
    const remainSeconds = Math.floor(remainTime / 1000) - (remainHour * 60 * 60) - (remainMinute * 60);
    document.getElementById("hour").innerHTML = remainHour < 10 ? '0' + remainHour : remainHour;
    document.getElementById("minute").innerHTML = remainMinute < 10 ? '0' + remainMinute : remainMinute;
    document.getElementById("seconds").innerHTML = remainSeconds < 10 ? '0' + remainSeconds : remainSeconds;
    document.getElementById("targetMessage").innerHTML = targetMessage;
  };

  // 1秒ごとに実行
  setInterval('showCountdown()', 1000);
  </script>

</head>
<body>
  <nav class="navbar sticky-top navbar-expand-sm navbar-green mb-3">
    <a class="navbar-brand" href="index.html">IchiIchiban</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav4" aria-controls="navbarNav4" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"><i class="material-icons icon-white">dehaze</i></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav4">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="login.html" class="nav-link"><i class="material-icons md-light cartColor">receipt</i>注文履歴</a>
        </li>
        <li class="nav-item">
          <a href="cart.html" class="nav-link"><i class="material-icons md-light cartColor">shopping_cart</i>カートに行く</a>
        </li>
        <li class="nav-item">
          <a href="login.html" class="nav-link"><i class="material-icons md-light cartColor">input</i>ログイン</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="flex-center position-ref full-height">
    @if (Route::has('login'))
    <div class="top-right links">
      @auth
      <a href="{{ url('/home') }}">Home</a>
      @else
      <a href="{{ route('login') }}">Login</a>

      @if (Route::has('register'))
      <a href="{{ route('register') }}">Register</a>
      @endif
      @endauth
    </div>
    @endif

    <div class="container">
      <div class="product-index">
        <div class="text-center py-3">
          <div>あと<span class="hour" id="hour"></span>時間<span class="minute" id="minute"></span>分<span class="seconds"
            id="seconds"></span>秒以内に
          </div>
          <div>ご注文いただくと<span id="targetMessage"></span>に届きます！</div>
        </div>
        <section class="jumbotron text-center">
          <div class="container">
            <h1 class="jumbotron-heading">『新鮮な野菜を市場から素早く配達』</h1>
            <p class="lead text-muted">
              食事をするとき、その食材を誰がどこでどのように作ったか、意識することは少ないと思います。しかし、そんなストーリーが見えれば、食事をするときにまた違った思いを感じるかもしれません。</p>
            </div>
          </section>

          <div class="py-5 bg-light">
            <div class="container">
              <div class="row">

                <div class="col-md-4">
                  <div class="card mb-4 box-shadow">
                    <img
                    class="card-img-top btn fly"
                    src="https://ichiichiban.s3-ap-northeast-1.amazonaws.com/products/1_thumbnail.jpg"
                    alt="tomato"
                    style="height: 225px; width: 100%; display: block;"
                    data-toggle="modal"
                    data-target="#productModal1"
                    data-whatever="productTomato"
                    >
                    <div class="card-body">
                      <p class="card-text">フレッシュで甘いトマト</p>
                      <div class="text-right">
                        <small class="text-muted">¥900</small>
                      </div>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="input-group col-sm-5">
                          <input type="text" class="form-control quantity"
                          aria-label="Dollar amount (with dot and two decimal places)">
                          <div class="input-group-append">
                            <span class="input-group-text">個</span>
                          </div>
                        </div>
                        <button type="button" class="btn col-sm-5 btn-sm btn-outline-danger"
                        onclick="ToCart(1, 0);">カートに追加
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                  <img
                  class="card-img-top btn fly"
                  src="https://ichiichiban.s3-ap-northeast-1.amazonaws.com/products/2_thumbnail.jpg"
                  alt="tomato"
                  style="height: 225px; width: 100%; display: block;"
                  data-toggle="modal"
                  data-target="#productModal2"
                  data-whatever="productTomato"
                  >
                  <div class="card-body">
                    <p class="card-text">とてもフレッシュ</p>
                    <div class="text-right">
                      <small class="text-muted">¥100</small>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="input-group col-sm-5">
                        <input type="text" class="form-control quantity"
                        aria-label="Dollar amount (with dot and two decimal places)">
                        <div class="input-group-append">
                          <span class="input-group-text">個</span>
                        </div>
                      </div>
                      <button type="button" class="btn col-sm-5 btn-sm btn-outline-danger"
                      onclick="ToCart(2, 1);">カートに追加
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img
                class="card-img-top btn fly"
                src="https://ichiichiban.s3-ap-northeast-1.amazonaws.com/products/3_thumbnail.jpg"
                alt="tomato"
                style="height: 225px; width: 100%; display: block;"
                data-toggle="modal"
                data-target="#productModal3"
                data-whatever="productTomato"
                >
                <div class="card-body">
                  <p class="card-text">フレッシュ極まれリ</p>
                  <div class="text-right">
                    <small class="text-muted">¥200</small>
                  </div>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="input-group col-sm-5">
                      <input type="text" class="form-control quantity"
                      aria-label="Dollar amount (with dot and two decimal places)">
                      <div class="input-group-append">
                        <span class="input-group-text">個</span>
                      </div>
                    </div>
                    <button type="button" class="btn col-sm-5 btn-sm btn-outline-danger"
                    onclick="ToCart(3, 2);">カートに追加
                  </button>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      </div>

      <!-- Modal -->

      <div class="modal fade" id="productModal1" tabindex="-1" role="dialog"
      aria-labelledby="myLargeModalLabel">
      <!-- //モーダルウィンドウの縦表示位置を調整・画像を大きく見せる -->
      <div class="modal-dialog modal-lg modal-middle">
      <div class="modal-content">
        <div class="modal-body">
          <img
          src="https://ichiichiban.s3-ap-northeast-1.amazonaws.com/products/1_image1.jpg"
          alt="tomato"
          style=" width: 100%;"
          class="aligncenter size-full wp-image-425"/>
        </div>
        <form>
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-md-4">フレッシュで甘いトマト！まさにフレッシュフレッシュフレッシュ</div>
              <div class="col-md-4 ml-auto text-right">1箱10個入り</div>
            </div>
            <div class="row mb-2">
              <div class="input-group">
                <input type="text" class="form-control col-md-4 quantityfromdetail"
                aria-label="Dollar amount (with dot and two decimal places)">
                <div class="input-group-append">
                  <span class="input-group-text">個</span>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-ash" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-danger"
            onclick="ToCartFromDetail(1, 0);">カートに追加
          </button>
        </div>
      </div>
      </div>
      </div>

      <div class="modal fade" id="productModal2" tabindex="-1" role="dialog"
      aria-labelledby="myLargeModalLabel">
      <!-- //モーダルウィンドウの縦表示位置を調整・画像を大きく見せる -->
      <div class="modal-dialog modal-lg modal-middle">
      <div class="modal-content">
      <div class="modal-body">
        <img
        src="https://ichiichiban.s3-ap-northeast-1.amazonaws.com/products/2_image1.jpg"
        alt="tomato"
        style=" width: 100%;"
        class="aligncenter size-full wp-image-425"/>
      </div>
      <form>
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-md-4">とてもフレッシュ！まさにフレッシュフレッシュフレッシュ</div>
            <div class="col-md-4 ml-auto text-right">1箱20個入り</div>
          </div>
          <div class="row mb-2">
            <div class="input-group">
              <input type="text" class="form-control col-md-4 quantityfromdetail"
              aria-label="Dollar amount (with dot and two decimal places)">
              <div class="input-group-append">
                <span class="input-group-text">個</span>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-ash" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-danger"
          onclick="ToCartFromDetail(2, 1);">カートに追加
        </button>
      </div>
      </div>
      </div>
      </div>

      <div class="modal fade" id="productModal3" tabindex="-1" role="dialog"
      aria-labelledby="myLargeModalLabel">
      <!-- //モーダルウィンドウの縦表示位置を調整・画像を大きく見せる -->
      <div class="modal-dialog modal-lg modal-middle">
      <div class="modal-content">
      <div class="modal-body">
        <img
        src="https://ichiichiban.s3-ap-northeast-1.amazonaws.com/products/3_image1.jpg"
        alt="tomato"
        style=" width: 100%;"
        class="aligncenter size-full wp-image-425"/>
      </div>
      <form>
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-md-4">フレッシュ極まれリ！まさにフレッシュフレッシュフレッシュ</div>
            <div class="col-md-4 ml-auto text-right">1箱30個入り</div>
          </div>
          <div class="row mb-2">
            <div class="input-group">
              <input type="text" class="form-control col-md-4 quantityfromdetail"
              aria-label="Dollar amount (with dot and two decimal places)">
              <div class="input-group-append">
                <span class="input-group-text">個</span>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-ash" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-danger"
          onclick="ToCartFromDetail(3, 2);">カートに追加
        </button>
      </div>
      </div>
      </div>
      </div>

      </div>
    </div>
  </div>
  <footer class="container pt-5 pb-3">
    <div class="row">
      <div class="col-12 text-center text-muted">
        Copyright(C)2019 個人名or会社名,Allright Reserved.
      </div>
    </div>
  </footer>
</body>
</html>
