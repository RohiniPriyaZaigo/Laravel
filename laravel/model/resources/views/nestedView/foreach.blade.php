ForEach Statements:
<?php $new =[
                ["name" => "Rohini", "age" => 22, "address" => "chennai"],
                ["name" => "Priya", "age" => 21, "address" => "royapuram"]
        ];
?>
@foreach ($new as $new1)
{{$new1 ["name"]}}
@endforeach  