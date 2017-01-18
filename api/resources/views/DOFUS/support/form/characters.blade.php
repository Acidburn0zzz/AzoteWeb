{{ $name }} :<br>

@foreach ($characters as $character)
<label for="{{ $character->Id }}">
    <div class="character">
        @if ($child)
            <input class="special" type="radio" name="special|character" id="{{ $character->Id }}" value="child|{{ $character->Id }}|{{ $child }}">
        @else
            <input class="special" type="radio" name="special|character" id="{{ $character->Id }}" value="final|{{ $character->Id }}">
        @endif
        <img src="{{ DofusForge::player($character->Id, 'sigma', 'face', 2, 50, 50) }}">
        {{ $character->Name }} - {{ $character->classe() }} niveau {{ $character->level() }}
    </div>
</label>
@endforeach

<br>
