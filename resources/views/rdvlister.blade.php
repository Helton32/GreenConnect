<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-green-800 leading-tight">
            {{ __('Tableau de Bord') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-green-200">
                    <h3 class="text-2xl font-semibold mb-6">Rendez-vous</h3>
                    <div class="overflow-x-auto">
                        <table class="min-w-full table-auto">
                            <thead>
                                <tr class="bg-green-100">
                                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Nom</th>
                                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Prenom</th>
                                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Adresse</th>
                                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Numéro de téléphone</th>
                                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Date</th>
                                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Heure</th>
                                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Email</th>
                                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Status</th>
                                </tr>
                            </thead>
                            <tbody class="text-sm text-gray-600">
                                @foreach ($rdv as $rdvs)
                                    <tr class="hover:bg-gray-50 transition-all duration-300 {{ $rdvs->status == 'terminé' ? 'bg-gray-200' : '' }}">
                                        <td class="border-t px-6 py-3">{{ $rdvs->Name }}</td>
                                        <td class="border-t px-6 py-3">{{ $rdvs->LastName }}</td>
                                        <td class="border-t px-6 py-3">{{ $rdvs->Adresse }}</td>
                                        <td class="border-t px-6 py-3">{{ $rdvs->Telephone }}</td>
                                        <td class="border-t px-6 py-3">{{ $rdvs->Date }}</td>
                                        <td class="border-t px-6 py-3">{{ $rdvs->Heure }}</td>
                                        <td class="border-t px-6 py-3">{{ $rdvs->Email }}</td>
                                        <td class="border-t px-6 py-3">
                                            <form method="POST" action="{{ route('update-status') }}" class="w-full">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $rdvs->id }}">
                                                <select name="status" onchange="this.form.submit()" class="block w-full px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                                                    <option value="en cours" {{ $rdvs->status == 'en cours' ? 'selected' : '' }}>En cours</option>
                                                    <option value="terminé" {{ $rdvs->status == 'terminé' ? 'selected' : '' }}>Terminé</option>
                                                </select>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <!-- Pagination Links -->
                        <div class="mt-6">
                            {{ $rdv->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
