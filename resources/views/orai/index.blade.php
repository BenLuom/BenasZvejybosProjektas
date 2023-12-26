<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Orai') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('orai.create') }}">Pridėti naują orų prognozę<a>
                            <br /><br />
                    <table>
                        <thead>
                            <tr>
                                <th>Oras</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($orai as $oras)
                        <tr>
                            <td>{{ $oras->temperatura }}</td>
                            <td>
                            <td>{{ $oras->vejo_kryptis}}</td>
                            <td>
                            <td>{{ $oras->slegis }}</td>
                            <td>
                                <a href="{{ route('orai.edit', $oras) }}">Edit</a>
                            <form method="POST" action="{{ route('orai.destroy', $oras) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
