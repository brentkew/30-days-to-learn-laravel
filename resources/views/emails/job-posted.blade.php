<h1>New Job Posted</h1>

<p>Hello,</p>

<p>A new job has been posted on our platform:</p>

<ul>
    <li><strong>Job Title:</strong> {{ $job->title }}</li>
    <li><strong>Salary:</strong> {{ $job->salary }}</li>
    <li><strong>Posted By:</strong> {{ $job->employer->user->name }}</li>
    <li><strong>Description:</strong> {{ $job->description }}</li>
    <li><strong>Location:</strong> {{ $job->location }}</li>
</ul>

<p>To view the job details, please click the link below:</p>

<a href="{{ url('/jobs/' . $job->id) }}">View Job</a>

<p>Thank you,</p>
