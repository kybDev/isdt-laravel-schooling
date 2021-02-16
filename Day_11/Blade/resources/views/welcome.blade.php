<?php
    $name = "kyben";
    $age = 18;
    $company = "army";
    $persons = [1, 2, 3];
?>

Hello {{ $name }}
<br>
Hello <?php echo $name ?>

<br><br>


@if ($age >= 18)
    You can buy alcohol
@else
    We dont sell to minors
@endif


<br><br>

@isset($company)
    There is a company {{ $company }}
@endisset

<br><br>

{{-- Check if array has value --}}
@empty($persons)
    No persons here
@endempty
<br><br>

@foreach ($persons as $item)
    <b>I'm number {{ $item }}</b><br>
@endforeach
