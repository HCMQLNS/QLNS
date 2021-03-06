@extends('master')
@section('content')

	<canvas id="income" width="600" height="400"></canvas>

sfc
<script>
// bar chart data
    var barData = {
    labels : ["January","February","March","April","May","June"],
    datasets : [
        {
            fillColor : "#48A497",
            strokeColor : "#48A4D1",
            data : [456,479,324,569,702,600]
        },
        {
            fillColor : "rgba(73,188,170,0.4)",
            strokeColor : "rgba(72,174,209,0.4)",
            data : [364,504,605,400,345,320]
        }
        ]
    }
 
    // get bar chart canvas
    var income = document.getElementById("income").getContext("2d");
 
    // draw bar chart
    new Chart(income).Bar(barData);
</script>
@endsection