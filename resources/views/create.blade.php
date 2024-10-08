@extends('layouts.master')
@section('contant')

<section class="slider ">
<div class="row m-0">
    <div class="col-6 offset-3 mt-5 jumbotron">
<form action="">
    <section class="form-group">
        <label for="">firstname</label>
        <input type="text" name="firstname" placeholder="firstnme...    " class="form-control">

    </section>
     <section class="form-group">
        <label for="">lastname</label>
        <input type="text" name="lastname" placeholder="lastname...    " class="form-control">

    </section>
     <section class="form-group">
        <label for="">email</label>
        <input type="email" name="email" placeholder="email...    " class="form-control">

    </section>
    <section class="form-group">
        
        <input type="submit" value="register" id="btn"  class="btn btn-success">

    </section>

</form>
    </div>
</div>
</section>


@endsection
@section('js')
    <script >
        
    let demo=document.detElementById('btn')
    demo.addEventListener('click',function(){
        $('.jumbotron').fadeOut(500);
    });
        

        // $document.ready(function{
        //  $('#click-me').click(function(){
        //   $('.slider ').css(' background-color:white')
        //  });
        // });
    </script>
@endsection
@section('title','this is create page')