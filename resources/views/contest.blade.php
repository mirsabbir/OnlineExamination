@extends('layouts.app')



@section('content')

    <h1 id="dayt" class="title" style="text-align:center;" >remaining time</h1>

    
    <div class="label" style="text-align:center;margin-top:60px;">{{$model_name}}</div>
    <form action="" method ="post">
    <div class="container" >
        <?php $i = 1; ?>
        @foreach($all as $qs)

            <div class="formbody">

           <div><p><b>{{$i }}</b> . {{$qs->body}}</p></div> <br>


            <p><input type="radio" name="{{$i}}" value = "a">&nbsp &nbsp {{$qs->a}}</p> 
            <p><input type="radio" name="{{$i}}" value = "b">&nbsp &nbsp {{$qs->b}}<p> 
            <p><input type="radio" name="{{$i}}" value = "c">&nbsp &nbsp {{$qs->c}}</p> 
            <p><input type="radio" name="{{$i++}}" value = "d">&nbsp &nbsp {{$qs->d}}</p> 
            </div>
        @endforeach
        
        <button type="submit" class="button is-fullwidth is-primary"style="margin-top:30px;margin-bottom:90px;">Submit</button>
    </form>


    </div>

<script>
    

  var rem = <?php echo($rem) ?>
    

</script>

@endsection

