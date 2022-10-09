<header>
    <div class="border py-4">
        <div class="container mx-auto">
            <div class="flex justify-between items-center">
                <div class="font-bold text-2xl">
                    <a href="{{ route('home') }}">{{ config('app.name')}}</a>
                </div>
                <div>
                    <ul class="font-semibold text-xl">
                        <li><a href="{{ route('contacts') }}">Контакты</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>