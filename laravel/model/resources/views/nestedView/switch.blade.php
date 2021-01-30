Switch Statements:

<?php $a = 10 ?>
    @switch($a)
    @case(5):
        "value is  not correct";
    @break;
    @case(10):
        "value is correct 10";
    @break;
    @default:
        "value is out of range";
    @break;
    @endswitch