@extends('layout.apps')

@section('content')
<div class="p-2 grid items-center rounded-lg gap-3">
    <div class="justify-between">
        <h1 class="text-2xl lg:text-3xl font-semibold">
            <span style="border-bottom: 1px solid #B6BBC4;"><span>Data Rayon</span></span>
        </h1>
    </div>
    <div class="text-right">
        @if (Auth::user()->role == "admin")
        <a href="{{ route('rayons.create') }}" class="text-white p-2 rounded-lg" style="background-color: #0766AD;">
            Tambah Data
        </a>    
        @endif
    </div>
    <div class="table-responsive mt-1 overflow-x-auto">
        <div class="overflow-x-auto">
            <table class="w-full border-collapse">
                <thead>
                    <tr class="text-center">
                        <th class="border-b border-gray-400 px-4 py-2">No.</th>
                        <th class="border-b border-gray-400 px-4 py-2">User</th>
                        <th class="border-b border-gray-400 px-4 py-2">Rayon</th>
                        @if (Auth::user()->role == "admin")
                            <th class="border-b border-gray-400 px-4 py-2">Action</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @forelse ($rayons as $rayon)
                        <tr>
                            <td class="border-b border-gray-400 px-4 py-2 text-center">{{ $loop->iteration }}</td>
                            <td class="border-b border-gray-400 px-4 py-2 text-center">{{ $rayon->pembimbingSiswa->name }}</td>
                            <td class="border-b border-gray-400 px-4 py-2 text-center">{{ $rayon->rayon }}</td>
                            @if (Auth::user()->role == "admin")
                                <td class="border-b border-gray-400 px-4 py-2 text-center">
                                    <div class="flex justify-center gap-2">
                                        <a href="{{ route('rayons.edit', $rayon->id) }}" class="rounded-lg p-2 text-white flex items-center" style="background-color: #0766AD;">
                                            <i class="ri-edit-line"></i><p>Edit</p>
                                        </a>
                                        <form action="{{ route('rayons.destroy', $rayon->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-black rounded-lg p-2 text-white flex items-center" onclick="return confirm('Data akan dihapus permanen, apakah kamu yakin?')">
                                                <i class="ri-delete-bin-fill"></i><p>Delete</p>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            @endif
                        </tr>
                    @empty
                        <tr>
                            <td class="text-center" colspan="{{ Auth::user()->role == 'admin' ? '6' : '5' }}">No data available</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    
</div>
@endsection
