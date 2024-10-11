<p class="text-base font-semibold leading-7 text-gray-900">
    Join {{config('slack-inviter.community_name')}} on Slack
</p>
<form method="post" action="#" id="slackInviterForm">
    @csrf
    <div class="mt-2 pb-4">
        <input value="{{isset($email) ? $email : null}}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-950/10 focus:ring-inset focus:ring-primary-600 sm:text-sm sm:leading-6 placeholder:text-gray-400 dark:bg-white/5 dark:ring-white/20 dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400" required name="email" type="email" placeholder="address@email.com" id="slackInviterEmail"/>
    </div>
    <button class="rounded-md relative grid-flow-col items-center justify-center font-semibold outline-none transition duration-75 focus-visible:ring-2 rounded-lg bg-gray-200 w-full px-3 py-2 text-sm hidden sm:inline-grid shadow-sm bg-white text-gray-950 hover:bg-gray-50 dark:bg-white/5 dark:text-white dark:hover:bg-white/10 ring-1 ring-gray-950/10 dark:ring-white/20 [input:checked+&]:bg-gray-400 [input:checked+&]:text-white [input:checked+&]:ring-0 [input:checked+&]:hover:bg-gray-300 dark:[input:checked+&]:bg-gray-600 dark:[input:checked+&]:hover:bg-gray-500" type="submit" id="slackInviterBtn">
        <span class="text-gray-600" role="status" id="slackInviterSpinner" hidden>
            <svg
                fill="none"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
                class="animate-spin h-5 w-5"
            >
                <path
                    clip-rule="evenodd"
                    d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19ZM12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                    fill-rule="evenodd"
                    fill="currentColor"
                    opacity="0.2"
                ></path>
                <path
                    d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z"
                    fill="currentColor"
                ></path>
            </svg>
        </span>
        Join
    </button>
</form>

@include('slack-inviter::partials.scripts')
