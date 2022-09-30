<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kendaraan') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-gray">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="">
                        <a href="{{ route('admin.kendaraan.create') }}" class="btn btn-primary">Tambah Kendaraan</a>
                    </div>
                    <br>
                    <x-flash-message>
                    </x-flash-message>
                    <div class="row">
                        <div class="col">
                            <label for="filterJenis">Filter  : </label>
                            <select name="filterJenis" id="filterJenis" class="form-select">
                                <option value="">Semua Jenis</option>
                                <option value="pengangkut barang">Pengangkut Barang</option>
                                <option value="pengangkut orang">Pengangkut Orang</option>
                            </select>   
                            <hr>     
                        </div>
                    </div>
                    <table class="table table-bordered data-table" id="DataTable">
                        <thead>
                            <tr>
                                <th>Nomor Kendaraan</th>
                                <th>Merek</th>
                                <th>Tipe</th>
                                <th>Jenis</th>
                                <th>Kepemilikan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>              
                </div>
            </div>
        </div>
    </div>
    <x-delete-modal>
    </x-delete-modal>

</x-admin-layout>

<script>
$(document).ready( function () {
    $('#DataTable').DataTable({
           processing: true,
           serverSide: true,
           ajax: "{{ route('admin.kendaraan') }}",
           columns: [
                    { data: 'nomor', name: 'nomor' },                    
                    { data: 'merk', name: 'merk' },
                    { data: 'tipe', name: 'tipe' },
                    { data: 'jenis', name: 'jenis' },
                    { data: 'kepemilikan', name: 'kepemilikan' },
                    { data: 'action', name: 'action' },                    
                 ]
    });

    //calling filter jenis kendaraan
    $('#filterJenis').on('change', function () {
        var value = $(this).val();
        console.log(value);
        filter(3, value);
    });
});

//delete data
function confirmDelete(id) {
    event.preventDefault();
    var url = "{{ route('admin.kendaraan.delete', ':id')}}";
    url = url.replace(':id', id);
    $('#confirmButton').attr('href', url);
}

//fungsi filter jenis kendaraan
function filter(colnum,value) {
    var table = $('#DataTable').DataTable();
    console.log(value);
    if (value == "") {
        table.column(colnum).search(value).draw();
    }else{
        var credit = $(this).map(function() {
            return  value;
        }).get().join('|');
        table.column(colnum).search(credit).draw();
    }
}


</script>