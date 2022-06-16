<div class="container">
     <div class="row justify-content-center">
         <div class="col-md-8">
             <div class="card">
                 <div class="card-header">Selamat Datang!</div>
                   <div class="card-body">
                    {{-- @if (session('resent'))
                         <div class="alert alert-success" role="alert">
                            {{ __('A fresh mail has been sent to your email address.') }}
                        </div>
                    @endif --}}
                    <p>Email diterima dari: {{ $email }}</p>
                    <p>Infromasi Pengguna:</p>
                        {{-- Name: --}}
                        Nama : {!! $name !!}<br/>
                        {{-- Phone: --}}
                        Nomor Ponsel : {!! $phone !!}<br/>
                        {{-- Subject:  --}}
                        Subjek : {{ $subject }}<br/>
                        {{-- Pesan:  --}}
                        Pesan : {{ $pesan }}<br/>
                </div>
            </div>
        </div>
    </div>
</div>