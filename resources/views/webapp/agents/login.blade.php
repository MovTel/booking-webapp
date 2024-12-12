@include('webapp.partials.header', ['title' => 'Agents Login'])
<form action="{{ url('agent/login/attempt') }}" method="POST">
  @csrf
  <div class="forms">
    <div class="form-field">
      <label for="email">Email: </label><input type="email" name="email" id="email" required autocomplete="off">
      @error('email')<span class="error">{{ $message }}</span>@enderror
    </div>
    <div class="form-field">
      <label for="password">Password: </label><input type="password" name="password" id="password" required autocomplete="off">
      @error('password')<span class="error">{{ $message }}</span>@enderror
    </div>
  </div>
  <input type="submit" value="Login">
</form>
@include('webapp.partials.footer')