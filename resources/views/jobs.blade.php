<x-layout>
    <x-slot:heading>
        Job Listing
    </x-slot:heading>
    @foreach ($jobs as $job)
        <ul>
            <li>
                <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline">
                    <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year
                </a>
            </li>
        </ul>
    @endforeach
</x-layout>
