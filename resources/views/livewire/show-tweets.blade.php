<div>
    Show Tweets

    <p>{{ $content }}</p>

    <form method="post" wire:submit.prevent="create">
        <input type="text" name="content" id="content" wire:model.live="content">
        @error('content') {{ $message }} @enderror
        <button type="submit">Criar msn</button>
    </form>

    <hr>

    @foreach ($tweets as $tweet)
        {{ $tweet->user->name }} - {{ $tweet->content }} <br>
    @endforeach

    <hr>
    <div>
        {{ $tweets->links() }}
    </div>
</div>