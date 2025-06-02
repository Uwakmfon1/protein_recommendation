<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @if (session('status'))
        <div 
            x-data="{ show: true }" 
            x-init="setTimeout(() => show = false, 5000)" 
            x-show="show"
            class="bg-green-600 border border-green-400 text-white px-4 py-3 h-300 rounded relative mb-4"
        >
            {{ session('status') }}
        </div>
    @endif

    {{-- <div> --}}
        {{-- Minimal protein form --}}
        <form action="{{ route('protein.recommend') }}" method="POST" class="max-w-md mx-auto mt-10 space-y-6 p-6 bg-white rounded shadow">
            <h2>Your One stop Protein Recommendation system</h2>
        @csrf

        <label class="block">
            <span class="text-gray-700 font-semibold">Age</span>
            <input type="number" name="age" min="1" max="120" required
                class="mt-1 block w-full rounded border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
        </label>

        <label class="block">
            <span class="text-gray-700 font-semibold">Gender</span>
            <select name="gender" required
                class="mt-1 block w-full rounded border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                <option value="" disabled selected>Select</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
        </label>

        <label class="block">
            <span class="text-gray-700 font-semibold">Goal</span>
            <select name="goal" required
                class="mt-1 block w-full rounded border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                <option value="" disabled selected>Select your goal</option>
                <option value="eat_more_protein">Eat More Protein</option>
                <option value="build_muscle">Build Muscle</option>
                <option value="lose_weight">Lose Weight</option>
            </select>
        </label>

        <button type="submit"
            class="w-full bg-indigo-600 hover:bg-indigo-700 text-red font-bold py-2 rounded transition">
            Get Recommendation
        </button>

        <p>
            lorem ipsum lorem ipsum sit ade loret isa amita
            lorem ipsum lorem ipsum sit ade loret isa amita
            lorem ipsum lorem ipsum sit ade loret isa amita
            lorem ipsum lorem ipsum sit ade loret isa amita
            lorem ipsum lorem ipsum sit ade loret isa amita
            lorem ipsum lorem ipsum sit ade loret isa amita            
            lorem ipsum lorem ipsum sit ade loret isa amita
        </p>
    </form>
    </div>

    <div>
        @foreach ($results as $result)
            <p>
                {{ $result }}
            </p>
        @endforeach
    </div>

</x-app-layout>
