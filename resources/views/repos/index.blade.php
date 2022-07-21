<x-app-layout>
    <div class="container mx-auto xl:px-72 lg:px-36 px-4 py-4">
        @if (session('success_message'))
            <div class="bg-green-200 text-green-800 rounded-md px-3 py-3 my-4">
                {{ session('success_message') }}
            </div>
        @endif

        <h3 class="text-2xl font-semibold mt-6">{{ auth()->user()->name . "'s" }} Repos</h3>

        <div class="space-y-8 divide-y divide-slate-500 py-8">
            @forelse ($repos as $repo)
                <div class="flex justify-between pt-6">
                    <div>
                        <h3 class="flex items-center space-x-2">
                            <a href="/repos/{{ $repo->name }}" class="text-blue-500 text-xl font-semibold">{{ $repo->name }}</a>
                            <span class="border border-gray-500 rounded-full text-xs px-2 py-1">Public</span>
                        </h3>

                        <div class="mt-2">{{ $repo->description }}</div>

                        <div class="flex text-sm space-x-6 mt-2">
                            <div>PHP</div>
                            <div class="flex items-center">
                                <svg aria-label="star" role="img" height="16" viewBox="0 0 16 16" version="1.1" width="16" data-view-component="true" class="w-4 h-4 fill-current">
                                    <path fill-rule="evenodd" d="M8 .25a.75.75 0 01.673.418l1.882 3.815 4.21.612a.75.75 0 01.416 1.279l-3.046 2.97.719 4.192a.75.75 0 01-1.088.791L8 12.347l-3.766 1.98a.75.75 0 01-1.088-.79l.72-4.194L.818 6.374a.75.75 0 01.416-1.28l4.21-.611L7.327.668A.75.75 0 018 .25zm0 2.445L6.615 5.5a.75.75 0 01-.564.41l-3.097.45 2.24 2.184a.75.75 0 01.216.664l-.528 3.084 2.769-1.456a.75.75 0 01.698 0l2.77 1.456-.53-3.084a.75.75 0 01.216-.664l2.24-2.183-3.096-.45a.75.75 0 01-.564-.41L8 2.694v.001z"></path>
                                </svg>
                                <div class="ml-1">3</div>
                            </div>
                            <div class="flex items-center">
                                <svg aria-label="fork" role="img" height="16" viewBox="0 0 16 16" version="1.1" width="16" data-view-component="true" class="w-4 h-4 fill-current">
                                    <path fill-rule="evenodd" d="M5 3.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm0 2.122a2.25 2.25 0 10-1.5 0v.878A2.25 2.25 0 005.75 8.5h1.5v2.128a2.251 2.251 0 101.5 0V8.5h1.5a2.25 2.25 0 002.25-2.25v-.878a2.25 2.25 0 10-1.5 0v.878a.75.75 0 01-.75.75h-4.5A.75.75 0 015 6.25v-.878zm3.75 7.378a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm3-8.75a.75.75 0 100-1.5.75.75 0 000 1.5z"></path>
                                </svg>
                                <div class="ml-1">3</div>
                            </div>
                            <div>Updated {{ $repo->created_at->diffForHumans() }}</div>
                        </div>
                    </div>
                    <div>
                        <button class="bg-slate-600 rounded-md px-8 py-2">Star</button>
                    </div>
                </div>
            @empty
                <div>No repos yet.</div>
            @endforelse


        </div>
    </div>
</x-app-layout>
