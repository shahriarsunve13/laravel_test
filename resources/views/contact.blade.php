<h1>Contact Page</h1>

<a href="{{ url('/')}}">Back to Home</a>

@if(session('success'))
<div class="alert alert-success">{{session('success')}}</div>
@endif

<form method="post" action="{{route('student.store')}}">
    @csrf
    <input type="text"  id="name" name="name" placeholder="input your name"/>
    <input type="text"  id="mail" name="mail" placeholder="input your mail"/>
    <button>Submit</button>



</form>