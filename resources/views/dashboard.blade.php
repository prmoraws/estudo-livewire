<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <section class="relative isolate overflow-hidden bg-white px-6 py-24 sm:py-5 lg:px-8">
        <div
            class="absolute inset-0 -z-10 bg-[radial-gradient(45rem_50rem_at_top,theme(colors.indigo.100),white)] opacity-20">
        </div>
        <div
            class="absolute inset-y-0 right-1/2 -z-10 mr-16 w-[200%] origin-bottom-left skew-x-[-30deg] bg-white shadow-xl shadow-indigo-600/10 ring-1 ring-indigo-50 sm:mr-28 lg:mr-0 xl:mr-16 xl:origin-center">
        </div>
        <div class="mx-auto max-w-2xl lg:max-w-4xl">
            <img class="mx-auto h-12" src="https://upload.wikimedia.org/wikipedia/commons/a/a1/IURD_logo.svg"
                alt="">
            <figure class="mt-10">
                <blockquote class="text-center text-xl font-semibold leading-8 text-gray-900 sm:text-2xl sm:leading-9">
                    <p>“Apascentai o rebanho de Deus, que está entre vós, tendo cuidado dele, não por força, mas
                        voluntariamente; nem por torpe ganância, mas de ânimo pronto; nem como tendo domínio sobre a
                        herança de Deus, mas servindo de exemplo ao rebanho. E quando aparecer o Sumo Pastor,
                        alcançareis a incorruptível coroa da glória” .</p>
                </blockquote>
                <figcaption class="mt-10">
                    <img class="mx-auto h-10 w-10 rounded-full" src="{{ url('storage/users/moraws-ceo.jpg') }}"
                        alt="Pastor Moraws">
                    <div class="mt-4 flex items-center justify-center space-x-3 text-base">
                        <div class="font-semibold text-gray-900">José Moraes</div>
                        <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true" class="fill-gray-900">
                            <circle cx="1" cy="1" r="1" />
                        </svg>
                        <div class="text-gray-600">Pastor UNP/José Rodrigues</div>
                    </div>
                </figcaption>
            </figure>
        </div>
    </section>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
    </div> --}}
</x-app-layout>
