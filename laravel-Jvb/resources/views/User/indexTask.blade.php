<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title>Laravel Repository Pattern Tutorial</title>
 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  </head>
  <body>
    
    <div class="container">
        <h2>users</h2>
 
        {{-- List users --}}
 
        <div class="row">
            <div class="col-md-6">
                <ul class="list-group">
                    @foreach($users as $user)                
                        <li class="list-group-item">
                            {{ Form::open( 
                                ['route' => ['user.delete', $user->id], 
                                'method' => 'delete',
                                'class' => 'form-inline']) }}
                                {{ csrf_field() }}
                                {{ $user->description }}
                                <div class="pull-right">
                                    <a href="{{ route('user.index', $user->id) }}">Edit</a>
                                    {{ Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) }}
                                </div>
                            {{ Form::close() }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
 
        {{-- user Form --}}
 
        <div class="row">
            <div class="col-md-6">
                @if(isset($edituser))
                    {{ Form::model($edituser, 
                        ['route' => ['user.update', $edituser->id],
                        'method' => 'patch',
                        'class' => 'form-inline']) }}
                @else
                    {{ Form::open( 
                        ['route' => 'user.store',
                        'method' => 'post',
                        'class' => 'form-inline']) }}
                @endif
 
                        <div class="form-group">
                            {{ Form::text('description', null,
                                ['class' => 'form-control',
                                'size' => '58px',
                                'placeholder' => 'user description']) }}
                        </div>
                        
                        <div class="form-group">
                            {{ Form::submit('Ok', ['class' => 'btn btn-primary form-control']) }}
                        </div>
                    {{ Form::close() }}
            </div>
        </div>
 
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
  </body>
</html>