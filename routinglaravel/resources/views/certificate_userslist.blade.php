<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    {{--
    Alter < 18 und keine Telefonnummer=> grün
        Alter ≥18 und keine Telefonnumer => blau
        Alter < 18 und Telefonnummer=> rot
            Alter ≥ 18 und Telefonnummer => magenta
            --}}
    @foreach ($users as $user)
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
        <br> --}}

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
        
        <?php
        $color = 'black';
        
        if ($user['age'] < 18 && !isset($user['phone'])) {
            $color = 'green';
        } elseif ($user['age'] >= 18 && !isset($user['phone'])) {
            $color = 'blue';
        } elseif ($user['age'] < 18 && isset($user['phone'])) {
            $color = 'red';
        } elseif ($user['age'] >= 18 && isset($user['phone'])) {
            $color = 'magenta';
        }
        ?>

        <span style="color:{{ $color }}">{{ $user['name'] }}</span>
        <br>

        {{-- @switch($user)
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
</body>

</html>
