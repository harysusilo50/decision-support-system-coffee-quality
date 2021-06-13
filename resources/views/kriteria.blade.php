<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biji Kopi</title>
</head>
<body>
    <table>
        <tr>
           <th>
                No  
            </th> 
           <th>
                Kriteria  
            </th> 
           <th>
                Tipe   
            </th> 
           <th>
                Bobot   
            </th> 
           <th>
                Action   
            </th> 
        </tr>
        @foreach ($kriterias as $kriteria)
            <tr>
                <td>
                        {{ $loop->index + 1 }}  
                </td> 
                <td>
                        {{ $kriteria->kriteria }}   
                </td> 
                <td>
                        {{ $kriteria->tipe }}   
                </td> 
                <td>
                        {{ $kriteria->bobot }}   
                </td> 
                <td>
                    <form method="POST" action="{{ route('kriteria.delete', $kriteria->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">
                            delete
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    <a href="{{ route('tambah-kriteria') }}">
        <h1>
            Tambah
        </h1>
    </a>
</body>
</html>