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
                Nama Biji Kopi   
            </th> 
           <th>
                Harga   
            </th> 
           <th>
                Action   
            </th> 
        </tr>
        @foreach ($bijikopis as $bijikopi)
            <tr>
                <td>
                        {{ $loop->index + 1 }}  
                </td> 
                <td>
                        {{ $bijikopi->nama }}   
                </td> 
                <td>
                        {{ $bijikopi->harga }}   
                </td> 
                <td>
                    <form method="POST" action="{{ route('biji-kopi.delete', $bijikopi->id) }}">
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

    <a href="{{ route('tambah-biji-kopi') }}">
        <h1>
            Tambah
        </h1>
    </a>
</body>
</html>