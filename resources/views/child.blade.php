<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.master')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is my body content.</p>
	 <a href="{{ URL::to('child') }}">HOME</a><br>
    <a href="{{ URL::to('child/1') }}">us1</a><br>
    <a href="{{ URL::to('child/2') }}">us2</a><br>
    <?php 
    foreach($data as $row)
    {
    	echo $row->id;
    	echo "<br>";
		echo $row->nombre;
			echo "<br>";
		echo $row->email;
			echo "<br>";		

    }
 
     ?>
@endsection