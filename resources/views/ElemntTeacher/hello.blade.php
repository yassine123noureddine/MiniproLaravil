@extends('Layout.master')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1><?php echo  $nom ?></h1>
<br>
<h1><?php echo  $prenom ?></h1>
<br>
<h1>in php</h1>
<ul>

    <?php foreach($languges as $langug): ?>
    
    <li><?=  $langug ?></li>
    <?php endforeach?>

</ul>    
<h1>in php with blade</h1>
<h1>cours:</h1>
@unless(count($languges)>0)
this is my table vide ,is preplem ?,yes not proplem ,this table is mine

@else
<table border="1" style="width:100%">
    <tr>
        <th>Cours:</th>
    </tr>
@foreach($languges as $langug)
      <tr>
        <td>{{$langug}}</td>
      </tr>
    
   @endforeach 

</table>
@endunless

<!-- <br>
@empty($languges)
hello madafa krse
@endempty
<br>
@isset($languges)
hello $nom completed
@endisset -->
<br>
@switch("ali")
  @case("noureddine")
  <h1>hello noureddine</h1>
  @break
  @case("mohamd")
  <h1>hello mohamd</h1>
  @break
  @case("jamal")
  <h1>hello jamal</h1>
  @break
  @case("ali")
  <h1>hello ali</h1>
  @break
  @default
   <h1>hhhhhhhhhhhhhhhhhhhhhhhhhhhh</h1>
@endswitch

@php 
$n3=$n1*$n2*$n2 ;
echo $n3;
@endphp

</body>
</html>