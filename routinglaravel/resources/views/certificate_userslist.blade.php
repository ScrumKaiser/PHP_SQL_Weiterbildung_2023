@extends('layouts.app')

@section('content')
    <div class="ui grid">
        @foreach ($users as $user)
            @component('components.certificate_user')
                @slot('name')
                    {{ $user['name'] }}
                @endslot
                @slot('email')
                    {{ $user['email'] }}
                @endslot
                @slot('phone')
                    {{ $user['phone'] ?? 'N/A' }}
                @endslot
                @slot('age')
                    {{ $user['age'] }}
                @endslot
            @endcomponent
            
            {{--
                Alter < 18 und keine Telefonnummer=> grün
                Alter ≥18 und keine Telefonnumer => blau
                Alter < 18 und Telefonnummer=> rot
                Alter ≥ 18 und Telefonnummer => magenta
            --}}
            {{-- @if ($user['age'] < 18 && !isset($user['phone']))
                <span style="color:green">{{ $user['name'] }}</span>
            @elseif($user['age'] >= 18 && !isset($user['phone']))
                <span style="color:blue">{{ $user['name'] }}</span>
            @elseif($user['age'] < 18 && isset($user['phone']))
                <span style="color:red">{{ $user['name'] }}</span>
            @elseif($user['age'] >= 18 && isset($user['phone']))
                <span style="color:magenta">{{ $user['name'] }}</span>
            @else
                <span>{{ $user['name'] }}</span>
            @endif
            <br>

            @php $color='black';@endphp

            @if ($user['age'] < 18 && !isset($user['phone']))
                @php $color='green';@endphp
            @elseif($user['age'] >= 18 && !isset($user['phone']))
                @php $color='blue';@endphp
            @elseif($user['age'] < 18 && isset($user['phone']))
                @php $color='red';@endphp
            @elseif($user['age'] >= 18 && isset($user['phone']))
                @php $color='magenta';@endphp
            @endif

            <span style="color:{{ $color }}">{{ $user['name'] }}</span>
            <br>

            @switch($user)
                @case($user['age'] < 18 && !isset($user['phone']))
                    <span style="color:green">{{ $user['name'] }}</span>
                @break

                @case($user['age'] >= 18 && !isset($user['phone']))
                    <span style="color:blue">{{ $user['name'] }}</span>
                @break

                @case($user['age'] < 18 && isset($user['phone']))
                    <span style="color:red">{{ $user['name'] }}</span>
                @break

                @case($user['age'] >= 18 && isset($user['phone']))
                    <span style="color:magenta">{{ $user['name'] }}</span>
                @break

                @default
                    <span>{{ $user['name'] }}</span>
            @endswitch
            <br> --}}
        @endforeach
    </div>
@endsection
