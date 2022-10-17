<header>
    <div class="border py-4">
        <div class="container mx-auto">
            <div class="flex justify-between items-center">
                <div class="font-bold text-2xl">
                    <a href="{{ route('home') }}">{{ config('app.name')}}</a>
                </div>
                <div class="flex items-center">
                    <div class="mr-10">
                        <ul class="font-semibold text-xl">
                            <li><a href="{{ route('contacts') }}">Контакты</a></li>
                        </ul>
                    </div>
                    <div>
                        @guest
                            <a href="{{ route('user.personal-area') }}">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                                        <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z" clip-rule="evenodd" />
                                    </svg>                                                                 
                                </div>
                            </a>
                        @endguest

                        @auth
                            <a href="{{ route('user.logout') }}">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                                    </svg>                                                                 
                                </div>
                            </a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>