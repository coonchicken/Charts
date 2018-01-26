@extends('Main')
@section('chart_content');
  <div class="col-sm-10">
     <div class="well">

<div class="panel-body">
  <center>
     <p>First chart</p>
     <div>
  {!! $chart1->html() !!}
  </div>
           </center>
</div>
<div class="panel-body">
  <center>
     <p>Second chart</p>
     <div>
    {!! $chart2->html() !!}
  </div>
           </center>

</div>

<div class="panel-body">
  <center>
     <p>Third chart</p>
     <div>
    {!! $chart3->html() !!}
  </div>
           </center>
</div>

<div class="panel-body">
  <center>
     <p>Fourth chart</p>
     <div>
    {!! $chart4->html() !!}
  </div>
           </center>
</div>

<div class="panel-body">
  <center>
     <p>Fourth chart</p>
     <div>
    {!! $chart5->html() !!}
  </div>
           </center>
</div>


     </div>
 </div>


   {!! Charts::scripts() !!}

{!! $chart1->script() !!}
{!! $chart2->script() !!}
{!! $chart3->script() !!}
{!! $chart4->script() !!}
{!! $chart5->script() !!}

{!! $chart5->script() !!}

@stop
