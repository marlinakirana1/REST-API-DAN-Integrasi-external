<h1>Profile</h1>
    <hr>
    <table border ='0'
    @if($nama =='Marlina Kirana')

    <tr>
        <td> Nama Lengkap: </td>
        <td> {{$nama}} </td>
    </tr>
    @else
    <tr>
        <td> Nama Lengkap: </td>
        <td> tidak ada nama</td>
    </tr>
@endif
</table>
<hr>
<h1>Contoh Pengulangan </h1>
<table>
@foreach(["nama"] as $data_array)
    <tr>
        <td> Nama </td>
        <td> {{ $data_array }} </td>
    </tr>
    @endforeach
</table>

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