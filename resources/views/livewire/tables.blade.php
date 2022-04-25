<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <h2 class="font-medium leading-tight text-base mt-0 mb-2">Quesion 1: Affichez en ordre alphabétique la liste des noms des agriculteurs.</h2>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th class="px-6 py-4">
                    Nom:
                </th>
                @foreach ($q1 as $value)
                    <th class="px-6 py-4">
                        {{ $value->nom }}
                    </th>
                @endforeach
            </tr>

        </tbody>
    </table>
    <h2 class="text-5xl font-normal leading-normal mt-0 mb-2 text-emerald-800">Quesion 2: Affichez la liste des noms des parcelles dont la superficie est supérieure à 500.</h2>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th class="px-6 py-4">
                    Nom:
                </th>
                @foreach ($q2 as $value)
                    <th class="px-6 py-4">
                        {{ $value->nom }}
                    </th>
                @endforeach
            </tr>

        </tbody>
    </table>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <h2 class="text-5xl font-normal leading-normal mt-0 mb-2 text-emerald-800">Quesion 3: Affichez toutes les informations concernant les parcelles situées à Arith dont la
            superficie est supérieure à 200 et inférieure à 500.</h2>
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Id
                </th>
                <th scope="col" class="px-6 py-3">
                    nom
                </th>
                <th scope="col" class="px-6 py-3">
                    superficie
                </th>
                <th scope="col" class="px-6 py-3">
                    lieu
                </th>
            </tr>
        </thead>
        <tbody>

            @foreach ($q3 as $value)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th class="px-6 py-4">
                        {{ $value->id }}
                    </th>

                    <th class="px-6 py-4">
                        {{ $value->nom }}
                    </th>
                    <th class="px-6 py-4">
                        {{ $value->superficie }}
                    </th>
                    <th class="px-6 py-4">
                        {{ $value->lieu }}
                    </th>

                </tr>
            @endforeach
        </tbody>
    </table>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <h2 class="text-5xl font-normal leading-normal mt-0 mb-2 text-emerald-800">Quesion 4: Affichez la liste de toutes les parcelles avec le nom de leurs propriétaires.</h2>
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Id
                </th>
                <th scope="col" class="px-6 py-3">
                    nom
                </th>
                <th scope="col" class="px-6 py-3">
                    superficie
                </th>
                <th scope="col" class="px-6 py-3">
                    lieu
                </th>
                <th scope="col" class="px-6 py-3">
                    Nom Agriculteurs
                </th>
            </tr>
        </thead>
        <tbody>

            @foreach ($q4 as $value)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th class="px-6 py-4">
                        {{ $value->id }}
                    </th>

                    <th class="px-6 py-4">
                        {{ $value->nom }}
                    </th>
                    <th class="px-6 py-4">
                        {{ $value->superficie }}
                    </th>
                    <th class="px-6 py-4">
                        {{ $value->lieu }}
                    </th>
                    <th class="px-6 py-4">
                        {{ $value->agrname }}
                    </th>

                </tr>
            @endforeach
        </tbody>
    </table>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">

        <h2 class="text-5xl font-normal leading-normal mt-0 mb-2 text-emerald-800">Quesion 5: Affichez les interventions effectuées entre le 07-11-2011 et le 09-02-2012</h2>
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Emp_Id
                </th>
                <th scope="col" class="px-6 py-3">
                    Par_Id
                </th>
                <th scope="col" class="px-6 py-3">
                    Date De Debut
                </th>
                <th scope="col" class="px-6 py-3">
                    N_Jour
                </th>
            </tr>
        </thead>
        <tbody>

            @foreach ($q5 as $value)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th class="px-6 py-4">
                        {{ $value->emp_id }}
                    </th>

                    <th class="px-6 py-4">
                        {{ $value->par_id }}
                    </th>
                    <th class="px-6 py-4">
                        {{ $value->debut }}
                    </th>
                    <th class="px-6 py-4">
                        {{ $value->n_jour }}
                    </th>

                </tr>
            @endforeach
        </tbody>
    </table>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">

        <h2 class="text-5xl font-normal leading-normal mt-0 mb-2 text-emerald-800">Quesion 6: Afficher pour chaque intervention le nom de la parcelle concernée.</h2>
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Emp_Id
                </th>
                <th scope="col" class="px-6 py-3">
                    Par_Id
                </th>
                <th scope="col" class="px-6 py-3">
                    Date De Debut
                </th>
                <th scope="col" class="px-6 py-3">
                    N_Jour
                </th>
                <th scope="col" class="px-6 py-3">
                    Nom Par
                </th>
            </tr>
        </thead>
        <tbody>

            @foreach ($q6 as $value)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th class="px-6 py-4">
                        {{ $value->emp_id }}
                    </th>

                    <th class="px-6 py-4">
                        {{ $value->par_id }}
                    </th>
                    <th class="px-6 py-4">
                        {{ $value->debut }}
                    </th>
                    <th class="px-6 py-4">
                        {{ $value->n_jour }}
                    </th>
                    <th class="px-6 py-4">
                        {{ $value->nom }}
                    </th>

                </tr>
            @endforeach
        </tbody>
    </table>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">

        <h2 class="text-5xl font-normal leading-normal mt-0 mb-2 text-emerald-800">Quesion 7:Afficher pour chaque intervention le nom de la parcelle concernée et le nom de
            l'employé.</h2>
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Emp_Id
                </th>
                <th scope="col" class="px-6 py-3">
                    Par_Id
                </th>
                <th scope="col" class="px-6 py-3">
                    Date De Debut
                </th>
                <th scope="col" class="px-6 py-3">
                    N_Jour
                </th>
                <th scope="col" class="px-6 py-3">
                    Agr_nom
                </th>
                <th scope="col" class="px-6 py-3">
                    Par_Nom
                </th>
            </tr>
        </thead>
        <tbody>

            @foreach ($q7 as $value)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th class="px-6 py-4">
                        {{ $value->emp_id }}
                    </th>

                    <th class="px-6 py-4">
                        {{ $value->par_id }}
                    </th>
                    <th class="px-6 py-4">
                        {{ $value->debut }}
                    </th>
                    <th class="px-6 py-4">
                        {{ $value->n_jour }}
                    </th>
                    <th class="px-6 py-4">
                        {{ $value->agrname }}
                    </th>
                    <th class="px-6 py-4">
                        {{ $value->prname }}
                    </th>
                </tr>
            @endforeach
        </tbody>
    </table>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">

        <h2 class="text-5xl font-normal leading-normal mt-0 mb-2 text-emerald-800"> Quesion 8: Affichez les interventions de l’employe Pernet</h2>
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Emp_Id
                </th>
                <th scope="col" class="px-6 py-3">
                    Par_Id
                </th>
                <th scope="col" class="px-6 py-3">
                    Date De Debut
                </th>
                <th scope="col" class="px-6 py-3">
                    N_Jour
                </th>
                <th scope="col" class="px-6 py-3">
                    Nom Emp
                </th>
            </tr>

        </thead>
        <tbody>

            @foreach ($q8 as $value)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th class="px-6 py-4">
                        {{ $value->emp_id }}
                    </th>

                    <th class="px-6 py-4">
                        {{ $value->par_id }}
                    </th>
                    <th class="px-6 py-4">
                        {{ $value->debut }}
                    </th>
                    <th class="px-6 py-4">
                        {{ $value->n_jour }}
                    </th>
                    <th class="px-6 py-4">
                        {{ $value->nom }}
                    </th>
                </tr>
            @endforeach
        </tbody>
    </table>
<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">

<h2>Quesion 9: Calculez la superficie totale des parcelles.</h2>
<thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
    <tr>
        <th scope="col" class="px-6 py-3">
            Resultat
        </th>
    </tr>

</thead>
<tbody>


    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
        <th class="px-6 py-4">
            {{$q9}}
        </th>
    </tr>

</tbody>
</table>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">

        <h2 class="text-5xl font-normal leading-normal mt-0 mb-2 text-emerald-800">Quesion 10: Affichez le nom de la plus grande parcelle</h2>
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nom
                </th>
            </tr>

        </thead>
        <tbody>

            @foreach ($q10 as $value)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                    <th class="px-6 py-4">
                        {{ $value->nom }}
                    </th>
                </tr>
            @endforeach
        </tbody>
    </table>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">

        <h2 class="text-5xl font-normal leading-normal mt-0 mb-2 text-emerald-800">Quesion 11: Affichez le nom de la plus petite parcelle</h2>
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nom
                </th>
            </tr>

        </thead>
        <tbody>

            @foreach ($q11 as $value)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th class="px-6 py-4">
                        {{ $value->nom }}
                    </th>
                </tr>
            @endforeach
        </tbody>
    </table>
