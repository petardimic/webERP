@extends('layout.main')

@section('content')
<section>
    <section class="wrapper">
    <!-- page start-->
    @include("errors.global_alert_messages")
    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <header class="panel-heading">
                    Forgot Password
                </header>
                <div class="panel-body">
	                {{ Form::open(array('url' => 'forgot-password', 'class'=>'form-horizontal')) }}
                                <div class="form-group">
                                    <label class="col-lg-4 control-label">System ID</label>
                                    <div class="col-lg-4">
                                    	{{ Form::text('email', NULL, array('placeholder'=>'Email', 'class'=>"form-control")) }}
										{{ $errors->first('email') }}
                                    </div>
                                </div>
                                 <div class="pull-right">
                                 	{{ link_to('/','Cancel', array('class'=>'btn btn-danger'))}}
					                <button type="submit" class="btn btn-success">Send Reminder</button>
				                </div>
                           {{ Form::close() }}

                </div>
            </section>
        </div>
    </div>
    </section>
</section>
@stop