<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ URL::asset('/img/surat.png') }}" type="image/png">
    <title>Surat Keterangan Kepemilikan Rumah</title>
    <style>
        .container {
            max-width: 600px;
            margin: 0 auto;
        }

       
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center mt-4 mb-0">Pemerintah Kabupaten Batanghari</h2>
                <h2 class="text-center mb-0">Kecamatan Muara Bulian</h2>
                <h2 class="text-center">Kelurahan Muara Bulian</h2>
            </div>
            <table><tr><td class="border border-2"></td></tr></table>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <h4 style="text-decoration: underline" class="fs-2 mt-4">Surat Keterangan Kepemilikan Rumah</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mt-2">
                <p>Yang bertanda tangan di bawah ini Ketua RT 027 menerangkan bahwa :</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                @foreach ($data as $d)
                <table class="table table-bordered">
                    <tr>
                        <td width="30%">Nama</td>
                        <td width="2%">:</td>
                        <td>{{ $d->nama }}</td>
                    </tr>
                    <tr>
                        <td>NIK</td>
                        <td>:</td>
                        <td>{{ $d->nik }}</td>
                    </tr>
                    <tr>
                        <td>Tempat/Tanggal Lahir</td>
                        <td>:</td>
                        <td>{{ $d->tempat_lahir }}/{{ \Carbon\Carbon::parse($d->tanggal_lahir)->isoFormat('D MMMM Y') }}</td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>{{ $d->jenis_kelamin }}</td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td>:</td>
                        <td>{{ $d->pekerjaan }}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>{{ $d->alamat}}</td>
                    </tr>
                </table>
                @endforeach
            </div>
        </div>
        <div class="keterangan">      
            <p class="mt-4">Adalah benar memiliki satu unit rumah yang berada di <span style="text-transform: capitalize">{{ strtolower(ucfirst($alamat_rumah)) }}</span></p>
            <p>Demikian surat keterangan ini dikeluarkan untuk dapat digunakan sebagaimana mestinya</p>
        </div>
        <div class="container1" style="margin-top: 10%">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-6">
                    <p style="text-align: center"> Muara Bulian, {{ \Carbon\Carbon::now()->isoFormat('D MMMM Y') }}</p>
                    <p style="text-align: center">Pemohon</p>
                    <p style="text-align: center;padding-top:10%">{{ $d->nama }}</p>
                </div>
                <div class="col-md-6" style="padding-top: 15%">
                    <p style="text-align: center">Mengetahui,</p>
                    <p style="text-align: center">Ketua RT 027</p>
                    <p style="text-align: center;padding-top:10%">Eko Prayitno</p>
                </div>
            </div>
        </div>
        
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>
