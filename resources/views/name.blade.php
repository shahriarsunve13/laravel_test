<!doctype html>

<style>
body {
  align-items: center;
  background-color: #bebebe !important; 
  display: flex;
  height: 100vh;
  justify-content: center;
  border: none;
}

.element {
  align-items: center;
  background-color: #bebebe !important ;
  box-shadow: 
    12px 12px 16px 0 rgba(0, 0, 0, 0.25),
    -8px -8px 12px 0 rgba(255, 255, 255, 0.3);
  border-radius: 50px;
  display: flex;
  height: 200px;
  justify-content: center;
  margin-right: 4rem;
  width: 200px;
  border: none !important;
}


</style>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$name}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <div class="card element" style="height: 600px;width:900px; position:absolute;top:150px;left:500px">

      <img src="https://assets.dryicons.com/uploads/icon/svg/8662/d8e23982-2467-44e1-ada3-04505c3f9ebb.svg" style="height: 80px;width;80px;margin-top:100px"/>

    
      <div class="card-body"  style="padding: 100px">

      <form class="row " action="{{Route('store.named')}}"  method="POST">
        @csrf
        <div class="col-12">
          <input type="text"  class="form-control mb-3 mt-3 @error('name') is-invalid @enderror" placeholder="name"  value="{{ old('name') }}"  name="name" id="name" >
          @error('name')
          <strong class="text-danger">{{ $message}}</strong>
          @enderror
        </div>
        <div class="col-12">
          <input type="text"  class="form-control mb-3 mt-3 @error('mail') is-invalid @enderror" placeholder="mail"  value="{{ old('mail') }}"  name="name" id="name" >
          @error('mail')
          <strong class="text-danger">{{ $message}}</strong>
          @enderror
        </div>
        <div class="col-12">
          <input type="password" class="form-control mb-3 mt-3 @error('name') is-invalid @enderror" value="{{ old('pass')}}" name="pass" id="pass" placeholder="Password">
          @error('pass')
          <strong class="text-danger">{{ $message}}</strong>
          @enderror
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-warning mt-3 mb-3">Log In</button>
        </div>
      </form>
    </div>


    </div>

    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>

