<table id="tbl-paket" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>No</th>
            <th>id_paket</th>
            <th>id outlet</th>
            <th>Jenis</th>
            <th>Nama Paket</th>
            <th>Harga</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($paket as $k )
        <tr>
            <td>{{ $i = (isset($i)?++$i:$i=1) }}</td>
            <td>{{ $k->id }}</td>
            <td>{{ $k->id_outlet }}</td>
            <td>{{ $k->jenis }}</td>
            <td>{{ $k->nama_paket }}</td>
            <td>{{ $k->harga }}</td>
            <td>
                <button class="btn edit-paket" data-toggle="modal" data-target="formInputModal"
                    data-mode="edit"
                    data-id_paket="{{ $k ->id_paket }}"
                    data-id_outlet="{{ $k ->id_outlet }}"
                    data-jenis="{{ $k ->jenis }}"
                    data-nama_paket="{{ $k ->satuan }}"
                    data-harga_jual="{{ $k ->harga_jual }}"
                    data-stock="{{ $k ->stock }}"
                >

                <a><i class="fas" fa-edit></i></a>
                <form method="POST" action="paket/{{ $k->id }}" style="display:inline">
                @csrf
                @method('delete')
                <button type="button" class="btn delete-paket"><i class="fas fa-trash" style="color:red"></i></button> &nbsp;
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
