<div>
    <style>
        .regions {
            margin: 2rem;
            padding: 1rem;
            box-shadow: 0 0 10px gray;
            max-width: 300px;
            list-style: none;
        }
        .regions__item {margin: 1rem;}
        .regions__link {text-decoration: none;}
        .regions__link-active {
            pointer-events: none;
            font-weight: bold;
        }
    </style>
    <h2>Choose your region</h2>
    <ul class="regions">
        @foreach($regions as $region)
            <li class="regions__item">
                <a href="{{route('multiregional', $region->en)}}"
                    class="regions__link {{$region->en == $choosen ? 'regions__link-active' : ''}}">
                    {{$region->ru}}
                </a>
            </li>
        @endforeach
    </ul>
</div>