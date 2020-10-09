<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
    <form method="POST" action="/tweets">
        @csrf
        <textarea
            name="body"
            class="w-full"
            placeholder="What's Up Buddy?!"
            autofocus
        >
                    </textarea>

        <hr class="my-4">
        <footer class="flex justify-between items-center ">
            <img
                src="{{ current_user()->avatar }}"
                alt=""
                class="rounded-full mr-2"
                width="40"
            >
            <button
                type="submit"
                class="bg-blue-500 hover:bg-blue-600 rounded-lg shadow py-2 px-2 text-white"
            >
                Tweet-a-roo!
            </button>
        </footer>

    </form>

    @error('body')
        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>
