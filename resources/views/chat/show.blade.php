@component('components.app')
    <div style="max-width: 270px" class="mb-10">
        <h2 class="font-bold text-2xl mb-0">{{ auth()->user()->name }}</h2>
        <p class="text-sm">Joined {{ auth()->user()->created_at->diffForHumans() }}</p>
    </div>

    <form method="POST" action="/chat/send">
        @csrf
        <textarea
            name="message"
            class="w-full text-center"
            placeholder="Enter Message"
            autofocus
        >
                    </textarea>

        <hr class="my-4">
        <footer class="flex justify-center items-center ">

            <button
                type="submit"
                class="bg-blue-500 hover:bg-blue-600 rounded-lg shadow py-2 px-2 text-white"
            >
                Send
            </button>
        </footer>

    </form>

@endcomponent
