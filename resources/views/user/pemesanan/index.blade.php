<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Permintaan Pemakaian Kendaraan') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-gray">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="">
                        <a href="{{ route('pesanan.create') }}" class="btn btn-primary">Tambah Permintaan</a>
                    </div>
                    <br>
                    <x-flash-message>
                    </x-flash-message>
                    <table class="table table-bordered data-table" id="DataTable">
                        <thead>
                            <tr>
                                <th>Waktu</th>
                                <th>Nomor Kendaraan</th>
                                <th>Garasi</th>
                                <th>Pengelola</th>
                                <th>Driver</th>
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
</x-app-layout>

<script>
$(document).ready( function () {
    $('#DataTable').DataTable({
           processing: true,
           serverSide: true,
           ajax: "{{ route('pesanan') }}",
           columns: [
                    { data: 'waktu', name: 'waktu' },                    
                    { data: 'kendaraan', name: 'kendaraan' },
                    { data: 'garasi', name: 'garasi' },
                    { data: 'pengelola', name: 'pengelola' },
                    { data: 'driver', name: 'driver' },
                    { data: 'action', name: 'action' },                    
                 ]
    });
});

function confirmDelete(id) {
    event.preventDefault();
    var url = "{{ route('pesanan.batal', ':id')}}";
    url = url.replace(':id', id);
    $('#confirmButton').attr('href', url);
}

</script>