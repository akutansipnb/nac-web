<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Laporan Pendaftar Lomba</title>
    <style>
        *{
            font-family:'Times New Roman', Times, serif
            margin: 0;
        }
        .container {
            margin: 0px auto;
            width: 100%;
        }
        .header {
            width: 100%;
            margin: 0rem;
        }
        .header img{
            width: 96%;
        }
        .content {
            width: 100%;
            margin: 0.5rem auto;
            text-align: center;
            font-size: 20px;
        }
        .content p {
            font-size: 14px;
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin-bottom: 1rem;
        }
        .content table, th, td {
            border: 1px black solid;
            border-collapse: collapse;
            padding: 0.5rem;
            font-size: 16px;
        }
        .content-mentor {
            margin-bottom: 1rem;
        }
        .content-contestant table {
            margin-top: 1rem;
        }
    </style>
  </head>
  <body>
        <!-- Start Page -->
    <div class="container">
        <!-- KOP report -->
        <div class="header">
            <img src="{{public_path('img/kop.jpeg')}}" alt="KOP" style="width: 100%">
        </div>

        <center>        <hr>
            <h2>DATA PESERTA LOMBA
        <br> {{$comp}}
        </h2></center>
        <hr>
        <!-- Report Content -->
        <div class="content">
            <!-- Report Title Contestant Identity -->
            <div class="content-contestant">
                List Peserta <strong></strong>
                <hr width="40%">
                <!-- Table -->
                <table style="width: 100%;">
                <tr>
                    <th>#</th>
                    <th>NAMA PESERTA</th>
                    <th>NIM</th>
                    <th>EMAIL</th>
                    <th>SEKOLAH</th>
                    <th>TELP</th>
                    <th>ALAMAT</th>
                </tr>
                @foreach ($datas as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->users->name}}</td>
                    <td>{{$item->identity_code}}</td>
                    <td>{{$item->users->email}}</td>
                    <td>{{$item->academy->academy_name}}</td>
                    <td>{{$item->phone}}</td>
                    <td>{{$item->adress}}</td>
                </tr>
                @endforeach

            </table>
            </div>
        </div>
    </div>

  </body>
</html>
