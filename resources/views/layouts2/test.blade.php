@php
$sekarang = date("Y-m-d");
$tomorrow = mktime(0,0,0,date("m")+1,date("d"),date("Y"));
// echo "Tomorrow is ".date("Y/m/d", $tomorrow);
@endphp
{{date("Y/m/d", $tomorrow)}}