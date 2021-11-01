<div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
        {{__('admin.language')}}
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        @foreach (LocaleEdu\LocaleService::availableLocales() as $locale)
        <li><a class="dropdown-item" href="{{ route('locale', ['code' => $locale->code]) }}">{{ $locale->name }}</a></li>
        @endforeach
    </ul>
</div>