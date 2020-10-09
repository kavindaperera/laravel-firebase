@component('components.app')
    <header class="mb-6 relative">
        <div class="relative">
            <img
                src="/images/default-profile-banner.jpg"
                alt=""
                class="mb-2"
            >

            <img
                src="{{ $user->avatar }}"
                alt=""
                class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
                width="150"
                height="150"
                style="left: 50%"
            >
        </div>

        <div class="flex justify-between items-center mb-6">
            <div style="max-width: 270px">
                <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>
            <div class="flex">

                @can('edit', $user)
                <a
                    href="{{ $user->path('edit') }}"
                    class="rounded-full border border-gray-300 py-2 px-2 text-black text-xs mr-2">
                    Edit Profile
                </a>
                @endcan

                @component('components.follow-button', ['user'=>$user])
                @endcomponent

            </div>
        </div>
        <p>
            Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
            blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language
            ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a
            paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful
            Pointing has no control about the blind texts it is an almost unorthographic life One day however a small
            line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
        </p>


    </header>
    @include('_timeline', [
        'tweets' => $tweets
    ])
@endcomponent
