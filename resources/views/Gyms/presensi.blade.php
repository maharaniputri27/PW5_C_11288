@extends('dashboard')
@section('content')

<style>
 .card {
      width: 1000px; /* Sesuaikan lebar kartu sesuai kebutuhan */
      margin: 0 auto;
      margin-top: 10px;ransform: translate(-50%, -50%);
  }

  p,h4{
    margin:0px;
  }

  .card.Gold {
     border: 3px solid gold;
}

.card.Silver{
   border: 3px solid silver;
}

.card.Black{
    border: 3px solid black;
}


</style>



<div class="card" style="top: 10px; width: 95%;">
  @forelse($isian as $isi)
    <div class="card-body" style="text-align: left; display: flex; flex-direction: column;">
      <div style="display: flex; align-items: center;">
        <img src="{{$isi['gambar']}}" alt="" style="width: 250px; border-radius: 30px; border: 2px solid black;">
        <div style="margin-left: 10px;">
          <div style="display: flex; align-items: center; justify-content: space-between;">
            <h4>{{$isi['judul']}}</h4>
            <button type="button" class="btn btn-sm btn-primary ms-2" data-bs-toggle="modal" data-bs-target="#staticBack">
              <i class="fa-solid fa-eye" style="color: #ffffff;"></i>
            </button>
            <p class="card-text tanggal-right" style="margin-left: 450px;">Tanggal: {{ date('l, d-M-Y') }}</p>
          </div>
          <p><strong>Instruktur: {{$isi['instruktur']}}</strong></p>
          <p><strong>Ruang  : {{$isi['ruang']}}</strong></p>
          <p><strong>Total Member : {{$isi['total']}}</strong></p>
          
          <p><strong>Rating: <span style="color:gold;">
            @for($i = 0; $i < $isi['rating']; $i++)
              <i class="fas fa-star fa-xs"></i>
            @endfor
          </span></strong></p>
        </div>
      </div>
    </div>
      <div class="modal fade" id="staticBack" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog ">
                            <div class="modal-content">
                                <div class="modal-header custom-header" style="background-color: #0069d9">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel"  style="color: #ffffff;">Detail Isi</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <h5 class="card-title text-center" style="font-size: 25px;"><strong>{{$isi['judul']}}</strong></h5>
                                <div style="margin-top: 10px;">
                                        <p class="card-text">Instruktur     : {{ $isi['instruktur'] }}</p>
                                        <p class="card-text">Kode Instruktur: {{ $isi['kode'] }}</p>
                                        <p class="card-text" >Hari Kelas    : {{date('l')}}</p>
                                        <p class="card-text" >Tanggal kelas : {{ date('d-M-Y') }}</p>
                                        <p class="card-text">Ruang          : {{ $isi['ruang'] }}</p>
                                        <p class="card-text">Total Member   : {{ $isi['total'] }}</p>
                                        <p class="card-text">Rating         :
                                            <span style="color: black;">
                                                @for ($i = 0; $i < $isi['rating']; $i++)
                                                <i class="fas fa-star fa-xs"></i>
                                                @endfor
                                            </span>
                                        </p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
  @empty
  @endforelse
</div>

<hr>
<div class="container" style="margin-top: 10px; max-width: 1200px">
    <div class="isi">
        <div class="d-flex justify-content-between align-items-center">
            <h5>Daftar Member</h5>
            <button type="button" class="btn btn-primary" id="presensiBtn" style="margin-top: 0; ">
                <i class="fa-solid fa-check" style="color: #ffffff; margin-right: 10px;"></i> Presensi
            </button>
        </div>
    </div>
</div>  
        <div class="row">
            @foreach($member as $members)
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card {{ $members['jenisKartu'] }}" style="height: 420px; width: 95%; display: flex; justify-content: center;">
                    <img src="{{ $members['gambar'] }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ $members['judul'] }}</h5>
                        <p class="card-text">Email: {{ $members['email'] }}</p>
                        <p class="card-text">Phone: {{ $members['NoTelp'] }}</p>
                        <p class="card-text">Jenis Kartu:
                        <span class="
                        @if($members['jenisKartu'] == 'Gold')
                            badge rounded-pill bg-warning text-light border 
                        @elseif ($members['jenisKartu'] == 'Silver')
                            badge rounded-pill bg-secondary text-light border
                        @elseif ($members['jenisKartu'] == 'Black')
                            badge rounded-pill bg-dark text-light border 
                        @endif
                        ">{{ $members['jenisKartu']}}</span> </p>
                        <p class="card-text"> Metode Pembayaran: 
                            <span class ="
                            @if($members['metode'] == 'Deposit Kelas')
                            badge text-bg-primary
                        @elseif ($members['metode'] == 'Deposit Uang')
                            badge text-bg-success
                        @endif
                            ">

                            {{$members['metode']}}</span>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</div>



    <div class="toast align-items-center text-bg-primary border-0" role="alert" aria-live="assertive" aria-atomic="true" id="liveToast" style="position: fixed; bottom: 10px; right: 10px;">
        <div class="d-flex">
            <div class="toast-body">
                <i class="fa-solid fa-check" style="color: #ffffff;"></i> Berhasil Mempresensi Member!
            </div>
        </div>
    </div>
</div>



<script>
    function showToast() {
        var toast = new bootstrap.Toast(document.getElementById('liveToast'));
        toast.show();
    }
    document.getElementById('presensiBtn').addEventListener('click', showToast);
</script>



















@endsection