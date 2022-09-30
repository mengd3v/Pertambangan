<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Permintaan Pemakaian Kendaraan') }}
        </h2>
    </x-slot>
    @php
        echo $kendaraans[0]['nama'];
    @endphp
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-gray">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('pesanan.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="form-group col">
                                        <label for="Kendaraan">Nomor Kendaraan</label>
                                        <select name="kendaraan_id" id="Kendaraan" class="select2 form-control" required>
                                            <option value="" selected disabled>Pilih kendaraan</option>
                                        @foreach ($kendaraans as $kendaraan)
                                            <option value="{{$kendaraan->id}}">{{$kendaraan->nomor}}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label for="Garasi">Garasi</label>
                                        <select name="garasi_id" id="Garasi" class="select2 form-control" required>
                                            <option value="" selected disabled>Garasi Kendaraan</option>
                                            @foreach ($garasis  as $garasi)
                                                <option value="{{$garasi->id}}">{{$garasi->nama}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="form-group col">
                                        <label for="Driver">Driver</label>
                                        <input type="text" class="form-control" id="Driver" name="driver" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="Deskripsi">Deskripsi</label>
                                <textarea name="deskripsi" id="Deskripsi" class="form-control" required cols="30" rows="7"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <a href="{{ route('pesanan') }}" class="btn btn-outline-primary btn-block">Kembali</a>   
                            </div>
                            <div class="col-6">
                                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script>
     $('.select2').select2();
</script>