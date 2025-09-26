<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>{{ $name }}</td>
        </tr>
        <tr>
            <td>Umur</td>
            <td>:</td>
            <td>{{ $my_age }}</td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td>:</td>
            <td>
                <ol>
                    @foreach ($hobbies as $h)
                        <li>{{ $h }}</li>
                    @endforeach
                </ol>
            </td>
        </tr>
        <tr>
            <td>Tanggal harus wisuda</td>
            <td>:</td>
            <td>{{ $tanggal_harus_wisuda }}</td>
        </tr>
        <tr>
            <td>Jarak hari sebelum harus wisuda</td>
            <td>:</td>
            <td>{{ $time_to_study_left }}</td>
        </tr>
        <tr>
            <td>Semester <b>{{ $current_semester }}</b></td>
            <td>:</td>
            <td>
                @if ($current_semester <= 3)
                    <p>Masih Awal, Kejar TAK</p>
                @elseif($current_semester > 3)
                    <p>Jangan main-main, kurang-kurangi main game!</p>
                @endif
            </td>
        </tr>
        <tr>
            <td>Cita - cita</td>
            <td>:</td>
            <td>{{ $future_goal }}</td>
        </tr>
    </table>
</body>

</html>
