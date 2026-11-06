<x-app-layout>
    <div class="py-4">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-gray-900">
                    <x-category-tabs>
                        No Categories Found
                    </x-category-tabs>
                </div>
            </div>

            <div class="mt-8 text-gray-900">
                @forelse ($posts as $p)
                <div class="flex bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 mb-8">
                    <x-post-item :post="$p" />
                    <a href="#">
                        <img class="w-48 h-full rounded-r-lg" object-cover src="https://v3.flowbite.com/images/blog/image-1.jpg" alt="" />
                    </a>
                </div>
                @empty
                <div class="text-center text-gray-400 py-16">No Post Found</div>
                @endforelse
            </div>

            {{ $posts->links() }}
        </div>
    </div>
</x-app-layout>