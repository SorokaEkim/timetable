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
                        <a href="{{ route('user.personal-area') }}">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                                    <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z" clip-rule="evenodd" />
                                </svg>                                                                 
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>