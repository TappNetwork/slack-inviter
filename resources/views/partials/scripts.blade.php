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
        button.classList.remove('bg-gray-300');
        button.classList.add('border-primary-600');
        window.setTimeout(function () {
          if (xhr.status == 200) {
            button.classList.remove('border-primary-600');
            button.classList.add('bg-primary-400');
          } else {
            button.classList.remove('border-primary-600');
            button.classList.add('bg-rose-400');
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
