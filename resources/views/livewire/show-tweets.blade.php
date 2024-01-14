<div class="p-4 m-4">
    Show Tweets

    <p>{{ $content }}</p>

    <form method="post" wire:submit.prevent="create">
        <input type="text" name="content" id="content" wire:model.live="content"
            class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500">
        @error('content')
            {{ $message }}
        @enderror
        <button
            class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded"
            type="submit">Criar msn</button>
    </form>

    <hr>



    @foreach ($tweets as $tweet)
        <div class="flex flex-col items-start space-y-4 sm:flex-row sm:space-y-0 sm:space-x-6 p-4 border rounded-lg">
            @if ($tweet->user->photo)
                <img class="object-cover w-20 h-20 mt-3 mr-3 rounded-full"
                    src="{{ url("storage/{$tweet->user->photo}") }}">
            @else
                <img class="object-cover w-20 h-20 mt-3 mr-3 rounded-full"
                    src="{{ url('storage/users/sem-foto.jpg') }}">
            @endif
            <div>
                <p class="font-display mb-2 text-2xl font-semibold text-blue-600" itemprop="author">
                <p rel="author">{{ $tweet->user->name }}</p>
                </p>
                <div class="mb-4 prose prose-sm text-gray-600">
                    <p>{{ $tweet->content }}</p>
                </div>
                <div class="flex">
                    @if ($tweet->likes->count())
                        <a href="#" wire:click.prevent="unlike({{ $tweet->id }})"
                            class="flex gap-x-3 justify-content align-items" rel="noopener noreferrer"><svg
                                class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path fill="currentColor"
                                    d="m18.774 8.245-.892-.893a1.5 1.5 0 0 1-.437-1.052V5.036a2.484 2.484 0 0 0-2.48-2.48H13.7a1.5 1.5 0 0 1-1.052-.438l-.893-.892a2.484 2.484 0 0 0-3.51 0l-.893.892a1.5 1.5 0 0 1-1.052.437H5.036a2.484 2.484 0 0 0-2.48 2.481V6.3a1.5 1.5 0 0 1-.438 1.052l-.892.893a2.484 2.484 0 0 0 0 3.51l.892.893a1.5 1.5 0 0 1 .437 1.052v1.264a2.484 2.484 0 0 0 2.481 2.481H6.3a1.5 1.5 0 0 1 1.052.437l.893.892a2.484 2.484 0 0 0 3.51 0l.893-.892a1.5 1.5 0 0 1 1.052-.437h1.264a2.484 2.484 0 0 0 2.481-2.48V13.7a1.5 1.5 0 0 1 .437-1.052l.892-.893a2.484 2.484 0 0 0 0-3.51Z" />
                                <path fill="#fff"
                                    d="M8 13a1 1 0 0 1-.707-.293l-2-2a1 1 0 1 1 1.414-1.414l1.42 1.42 5.318-3.545a1 1 0 0 1 1.11 1.664l-6 4A1 1 0 0 1 8 13Z" />
                            </svg> Descurtir</a>
                    @else
                        <a href="#" wire:click.prevent="like({{ $tweet->id }})"
                            class="flex gap-x-3 justify-content align-items" rel="noopener noreferrer"><svg
                                class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 21">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="m6.072 10.072 2 2 6-4m3.586 4.314.9-.9a2 2 0 0 0 0-2.828l-.9-.9a2 2 0 0 1-.586-1.414V5.072a2 2 0 0 0-2-2H13.8a2 2 0 0 1-1.414-.586l-.9-.9a2 2 0 0 0-2.828 0l-.9.9a2 2 0 0 1-1.414.586H5.072a2 2 0 0 0-2 2v1.272a2 2 0 0 1-.586 1.414l-.9.9a2 2 0 0 0 0 2.828l.9.9a2 2 0 0 1 .586 1.414v1.272a2 2 0 0 0 2 2h1.272a2 2 0 0 1 1.414.586l.9.9a2 2 0 0 0 2.828 0l.9-.9a2 2 0 0 1 1.414-.586h1.272a2 2 0 0 0 2-2V13.8a2 2 0 0 1 .586-1.414Z" />
                            </svg> Curtir</a>
                    @endif
                </div>
            </div>
        </div>
    @endforeach
    <hr>
    <div>
        {{ $tweets->links() }}
    </div>
</div>
