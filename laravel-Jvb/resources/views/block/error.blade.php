@if(count($errors)>0)
<i class="fas fa-exclamation-triangle">  Errors !</i>
<ol class="error_msg">
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ol>
@endif