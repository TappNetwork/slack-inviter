<p>
  Join {{config('slack-inviter.community_name')}} on slack
</p>
<form method="post" action="#" id="slackInviterForm">
  @csrf
  <div class="form-group">
    <input class="form-control" required name="email" type="email" placeholder="address@email.com" id="slackInviterEmail"/>
  </div>
  <button class="form-control btn btn-block btn-primary" type="submit" id="slackInviterBtn">
    <span class="spinner-border spinner-border-sm" role="status" id="slackInviterSpinner" hidden></span>
    Join
  </button>
</form>

@include('slack-inviter::partials.scripts')
