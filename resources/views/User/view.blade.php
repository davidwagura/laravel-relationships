
<h1>(hasOne) relationship</h1>
<div class="container">
  <h3>User name: {{$data->name}}</h3>
  <h4>Address: {{ $data->getUserAddress->user_address }}</h4>
</div>