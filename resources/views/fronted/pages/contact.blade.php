@extends("fronted.layout.layout")
@section("content")


    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="{{ route("index") }}">Anasayfa</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">İletişim</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="h3 mb-3 text-black">Bizimle İletişime Geçin</h2>
          </div>

          <div class="col-md-7">
            @if (session()->get("success"))
            <div class="alert alert-success text-center">{{ session()->get("success") }}</div>

            @endif
            @if (count($errors))
            @foreach ($errors->all() as $error)
            <div class="alert alert-warning text-center">{{ $error}}</div>
            @endforeach

            @endif

            <form action="{{ route("contactSave") }}" method="post">
                @csrf

              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="FirstName" class="text-black">Ad <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="firstName" name="firstName">
                  </div>
                  <div class="col-md-6">
                    <label for="LastName" class="text-black">Soyad <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="lastName" name="lastName">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="email" class="text-black">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="subject" class="text-black">Konu </label>
                    <input type="text" class="form-control" id="subject" name="subject">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="message" class="text-black">Mesajınız </label>
                    <textarea name="message" id="message" cols="30" rows="7" class="form-control"></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Mesaj Gönder">
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-5 ml-auto">
            <div class="p-4 border mb-3">
              <span class="d-block text-primary h6 text-uppercase">Ankara</span>
              <p class="mb-0">{{ $settings["adres"] }}</p>
            </div>
            <div class="p-4 border mb-3">
              <span class="d-block text-primary h6 text-uppercase">İstanbul</span>
              <p class="mb-0">{{ $settings["adres"] }}</p>
            </div>
            <div class="p-4 border mb-3">
              <span class="d-block text-primary h6 text-uppercase">İzmir</span>
              <p class="mb-0">{{ $settings["adres"] }}</p>
            </div>

          </div>
        </div>
      </div>
    </div>




@endsection
