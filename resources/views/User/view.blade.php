
<h1>(hasOne) relationship</h1>
<div class="container">
  <h3>User name: {{$data->name}}</h3>
  <h4>Address: {{ $data->getUserAddress->user_address }}</h4>
</div>

//View.blade.php
<h1>(hasMany) relationship</h1>
<div class="container">
   @foreach($data as $posts)
      <h2>{{ $posts->title }}</h2><hr>
      <p>{{ $posts->description }}</p>
      <p>Posted by: {{ $posts->user_id }}</p>
    @endforeach
</div>