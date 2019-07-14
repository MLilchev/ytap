@extends('layouts.master')

@section('header', 'Welcome Page')

 @section('content')
<form method="POST" action="../list.blade.php">
  <p>Enter link</p>    
    <input type="text" name="link">
  <p>Enter title</p>    
    <input type="text" name="title">
   <p>Enter title</p>    
    <input type="text" name="description">
    <div>
      <button action="submit">Submit</button>
   <div>
</form>
@endsection