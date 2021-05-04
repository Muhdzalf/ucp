<div>
    @if (session()->has('message'))
    <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
      <div class="flex">
        <div>
          <p class="text-sm">{{ session('message') }}</p>
        </div>
      </div>
    </div>
@endif
    <table class="table-fixed w-full">
        <thead>
            <tr class="bg-gray-100">
                <th class="px-4 py-2 w-40">NIM</th>
                <th class="px-4 py-2">Nama</th>
                <th class="px-4 py-2">Alamat</th>
                <th class="px-4 py-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data_mahasiswa as $mahasiswa)
            <tr>
                <td class="border px-4 py-2">{{ $mahasiswa->nim }}</td>
                <td class="border px-4 py-2">{{ $mahasiswa->nama }}</td>
                <td class="border px-4 py-2">{{ $mahasiswa->alamat }}</td>
                <td class="border px-4 py-2">
                <button wire:click="edit({{ $mahasiswa->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                @if ($isOpen)
                    @include('livewire.dummy')
                @endif
                    <button wire:click="delete({{ $mahasiswa->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" onclick="return confirm('Apakah anda yakin mau menghapus data ini?')">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>