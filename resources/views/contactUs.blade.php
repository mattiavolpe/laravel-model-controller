@extends("layouts.app")

@section("pageTitle")
Contact Us
@endsection

@section("content")
<div class="container">
  <h1 class="text-center text-light">Contact Us</h1>
  <form class="w-50 mx-auto">
    <div class="pb-3">
      <label for="name" class="form-label text-light">Name</label>
      <input type="text" name="name" id="name" class="form-control" placeholder="Your name..." aria-describedby="nameHelper">
      <small id="nameHelper" class="form-text text-muted">Type your name here</small>
    </div>
    <div class="pb-3">
      <label for="email" class="form-label text-light">E-mail</label>
      <input type="email"
        class="form-control" name="email" id="email" aria-describedby="emailHelper" placeholder="Your e-mail...">
      <small id="emailHelper" class="form-text text-muted">Type your e-mail here</small>
    </div>
    <div class="pb-3">
      <label for="confirmEmail" class="form-label text-light">Confirm e-mail</label>
      <input type="email"
        class="form-control" name="confirmEmail" id="confirmEmail" aria-describedby="confirmEmailHelper" placeholder="Confirm your e-mail...">
      <small id="emailHelper" class="form-text text-muted">Type again your e-mail here</small>
    </div>
    <div class="pb-3">
      <label for="message" class="form-label text-light">Message</label>
      <br>
      <textarea class="w-100 rounded-2" name="message" id="message" rows="10" placeholder="Your message..."></textarea>
      <br>
      <small id="messageHelper" class="form-text text-muted">Type your message here</small>
    </div>
    <div class="text-center">
      <button type="submit" class="btn btn-danger text-light mx-2">Send</button>
      <button type="reset" class="btn btn-warning text-dark mx-2">Reset</button>
    </div>
  </form>
</div>
@endsection
