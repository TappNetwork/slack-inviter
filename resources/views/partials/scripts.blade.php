@push('scripts')
<script>
  document.addEventListener("DOMContentLoaded", function () {
    let form = document.getElementById('slackInviterForm');
    form.addEventListener("submit", function (event) {
      event.preventDefault();
      let email = document.getElementById('slackInviterEmail');
      var xhr = new XMLHttpRequest();
      xhr.open('POST', '/slack-inviter');
      xhr.send({'email': email});
    });
  });
</script>
@endpush
