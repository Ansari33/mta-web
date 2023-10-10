<p>User Terhapus!</p>
<table class="table table-hover">
            <th>Nama</th>
            <th>Username</th>
            <th>Password</th>
            <th>Level  User</th>
            <th>Aktif</th>
            
            <th>Aksi</th>

            @foreach($user as $us)
            <tr>
                <td>{{$us->fullname}}</td> 
                <td>{{$us->User}}</td>
                <td>{{$us->Pass}}</td>
                @if($us->Level == 1)
                <td>Super Admin</td>
                @endif
                @if($us->Level == 0)
                <td>User Only</td>
                @endif
                <td>{{$us->aktif}}</td>
                <td><button onclick="hapusu('{{$us->User}}');" data-us="({{$us->User}})"  class="btn btn-danger btn-sm" title="Hapus User"><i class="fa fa-trash"></i></button>
                    <a href="/cek/{{$us->User}}" class="btn btn-info btn-sm" title="Lihat User"><i class="fa fa-eye"></i></a>
                </td>
            </tr>
            @endforeach
            </table>