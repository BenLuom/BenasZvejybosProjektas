<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Mėnulio fazės') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('fazes.create') }}">Pridėti naują mėnulio fazę<a>
                            <br /><br />
                            <table>
                                <thead>
                                <tr>
                                    <th>Fazė</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($fazes as $faze)
                                <tr>
                                    <td>{{ $category->faze }}</td>
                                    <td>
                                        <a href="{{ route('fazes.edit', $faze) }}">Edit</a>
                                        <form method="POST" action="{{ route('fazes.destroy', $faze) }}">
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
