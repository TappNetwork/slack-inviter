@push('scripts')
<script>
  let csrf = "{{csrf_token()}}";
  document.addEventListener("DOMContentLoaded", function () {
    let form = document.getElementById('slackInviterForm');
    form.addEventListener("submit", function (event) {
      event.preventDefault();
      let button = document.getElementById('slackInviterBtn');
      let spinner = document.getElementById('slackInviterSpinner');
      let email = document.getElementById('slackInviterEmail').value;
      let formData = new FormData();
      let xhr = new XMLHttpRequest();
      formData.append('email', email);
      xhr.onload = function () {
        spinner.removeAttribute('hidden');
        button.classList.remove('btn-primary');
        button.classList.add('btn-outline-primary');
        window.setTimeout(function () {
          if (xhr.status == 200) {
            button.classList.remove('btn-outline-primary');
            button.classList.add('btn-success');
          } else {
            button.classList.remove('btn-outine-primary');
            button.classList.add('btn-danger');
          }
          spinner.setAttribute('hidden', true);
          button.innerHTML = "Invitation Sent."
          button.setAttribute('disabled', true);
        }, 500)
      };
      xhr.open('POST', '/slack-invite/invite');
      xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
      xhr.setRequestHeader('X-CSRF-TOKEN', csrf);
      xhr.send(formData);
    });
  });
</script>
@endpush
