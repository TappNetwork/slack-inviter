@push('scripts')
<script>
  let csrf = "{{csrf_token()}}";
  document.addEventListener("DOMContentLoaded", function () {
    let form = document.getElementById('slackInviterForm');
    form.addEventListener("submit", function (event) {
      event.preventDefault();
      let email = document.getElementById('slackInviterEmail').value;
      var formData = new FormData();
      formData.append('email', email);
      let xhr = new XMLHttpRequest();
      xhr.onload = function () {
        if (xhr.status == 200) {
        } else {
        }
      };
      xhr.open('POST', '/slack-invite/invite');
      xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
      xhr.setRequestHeader('X-CSRF-TOKEN', csrf);
      xhr.send(formData);
    });
  });
</script>
@endpush
