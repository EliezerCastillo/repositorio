@extends('layouts.app')
@section('sidebar')
 <!--heredamos con parent lo que hay en la plantilla base pero añadimos otro elemento al menú-->
  @include('layouts.menu')
  @parent
@endsection

@section('content')
<!--    <div class="panel panel-heading">
        <h3 class="panel-title">{{ $titulo }}</h3>
    </div>&nbsp;-->

<div class="row">
	<div class="col-lg-12">
	    <div class="portlet">
	        <div class="portlet-heading">
	            <h3 class="panel-title text-info">
	                <b>{{ $titulo }}</b>
	            </h3>
	        </div>
	        <div class="clearfix"></div>                                  
	        <div class="portlet-body">
	                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat, ante nulla hendrerit arcu, ac tincidunt mauris lacus sed leo. vamus suscipit molestie vestibulum.
	        </div>                                   
	    </div>
	</div>	
</div>
{!! $view !!}
<script type="text/javascript">

</script>   
@endsection


