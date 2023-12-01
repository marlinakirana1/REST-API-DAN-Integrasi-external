<h1>Profil &#128112;</h1>
    <hr>
    <table border='0'>
        @if($nama == 'Marlina')
            <tr>
                <td>Nama Saya :</td>
                <td>{{ $nama }} </td>
            </tr>
        @endif
    </table>

    <hr>
    <h1>Contoh Penerapan
        <br> Nama= Marlina Kirana
        <br> Nama= Resa Meylani
        <br> Nama= Insania Kamila
     </head>

     <h1>Contoh forelse </h1>
<table>
    @forelse( ['nama'] as $data)
    <tr>
        <td> Nama </td>
        <td> {{ $data }} </td>
    </tr>
    @empty
    data tidak ditemukan
    @endforelse
</table>

<h1>Contoh for<h1>
<table>
    @for($i=0;$i<5;$i++)
        {{$i}}<br>
    @endfor
</table>