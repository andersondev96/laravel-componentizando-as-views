@props([
'title'
])

<div class="space-y-6 sm:px-6 lg:px-0 lg:col-span-9">
    <section aria-labelledby="billing-history-heading">
        <div class="bg-white pt-6 shadow sm:rounded-md sm:overflow-hidden">
            <div class="px-4 sm:px-6">
                <h2 class="text-lg leading-6 font-medium text-gray-900">{{ $title }}</h2>
            </div>
            <div class="mt-6 flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-hidden border-t border-gray-200">
                            <table class="min-w-full divide-y divide-gray-200">
                               {{ $slot }}
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
