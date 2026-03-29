<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- Pesan sukses --}}
            @if(session('success'))
                <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">
                    {{ session('success') }}
                </div>
            @endif

            {{-- Error form --}}
            @if ($errors->any())
                <div class="mb-4 p-4 bg-red-100 text-red-800 rounded">
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- Form tambah project --}}
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6 mb-6">
                <form action="{{ route('dashboard.projects.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block font-medium text-gray-700 dark:text-gray-300">Judul Project</label>
                        <input type="text" name="name" id="name" class="w-full border rounded p-2 mt-1" value="{{ old('name') }}" required>
                    </div>

                    <div class="mb-4">
                        <label for="description" class="block font-medium text-gray-700 dark:text-gray-300">Deskripsi</label>
                        <textarea name="description" id="description" rows="4" class="w-full border rounded p-2 mt-1" required>{{ old('description') }}</textarea>
                    </div>

                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
                        Simpan Project
                    </button>
                </form>
            </div>

            {{-- Daftar project --}}
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="text-lg font-semibold mb-4 text-gray-800 dark:text-gray-200">Daftar Project</h3>

                @if($projects->isEmpty())
                    <p class="text-gray-700 dark:text-gray-300">Belum ada project.</p>
                @else
                    <ul class="list-disc list-inside text-gray-700 dark:text-gray-300">
                        @foreach($projects as $project)
                            <li class="flex justify-between items-center mb-2">
                                <span>
                                    <strong>{{ $project->name }}</strong> - {{ $project->description }}
                                </span>
                                {{-- Tombol Hapus --}}
                                <form action="{{ route('dashboard.projects.destroy', $project->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus project ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="ml-4 bg-red-500 hover:bg-red-600 text-white px-2 py-1 rounded text-sm">
                                        Hapus
                                    </button>
                                </form>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>

        </div>
    </div>
</x-app-layout>