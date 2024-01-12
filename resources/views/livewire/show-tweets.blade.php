<div>
    Show Tweets

    <p>{{ $content }}</p>

    <form method="post" wire:submit.prevent="create">
        <input type="text" name="content" id="content" wire:model.live="content" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500">
        @error('content')
            {{ $message }}
        @enderror
        <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" type="submit">Criar msn</button>
    </form>

    <hr>

    @foreach ($tweets as $tweet)
        <p class="font-sans md:font-serif italic"> {{ $tweet->user->name }} </p>
        <p class="line-clamp-3">"{{ $tweet->content }}"</p><time class="font-serif text-sm">{{ $tweet->created_at }}</time><br>
    @endforeach

    <hr>
    <div>
        {{ $tweets->links() }}
    </div>
</div>
