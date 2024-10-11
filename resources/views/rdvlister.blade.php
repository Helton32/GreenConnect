<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tableau de Bord') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3>Rendez-vous</h3>
                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">Nom</th>
                                <th class="px-4 py-2">Prenom</th>
                                <th class="px-4 py-2">Adresse</th>
                                <th class="px-4 py-2">Numero de telephone</th>
                                <th class="px-4 py-2">Date</th>
                                <th class="px-4 py-2">Heure</th>
                                <th class="px-4 py-2">Email</th>
                                <th class="px-4 py-2">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rdv as $rdvs)

                                <tr>

                                    <td class="border px-4 py-2">{{ $rdvs->Name }}</td>
                                    <td class="border px-4 py-2">{{ $rdvs->LastName }}</td>
                                    <td class="border px-4 py-2">{{ $rdvs->Adresse }}</td>
                                    <td class="border px-4 py-2">{{ $rdvs->Telephone }}</td>
                                    <td class="border px-4 py-2">{{ $rdvs->Date }}</td>
                                    <td class="border px-4 py-2">{{ $rdvs->Heure }}</td>
                                    <td class="border px-4 py-2">{{ $rdvs->Email }}</td>

                                    <td class="border px-4 py-2">
                                       <form method="POST" action="{{ route('update-status') }}">
                                              @csrf
                                         <input type="hidden" name="id" value="{{ $rdvs->id }}">
                                         <select name="status" onchange="this.form.submit()">
                                         <option value="en cours" {{ $rdvs->status == 'en cours' ? 'selected' : '' }}>En cours</option>
                                         <option value="terminé" {{ $rdvs->status == 'terminé' ? 'selected' : '' }}>Terminé</option>
                                         </select>
                                       </form>
                                        </td>                                
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
