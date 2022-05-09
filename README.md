<h1>How to use</h1>

<h2>Open the config file</h2>

<h2>installation</h2>

1. Edit the config.php file with the correct paths that fits your JSON.
2. Upload the zip to your server and extract it.
3. Use the RestAPI according to the guide below.

<h2>Anecdotes RestAPI Guide</h2>

<h2 dir="auto">URL:</h2>
<pre class="notranslate">
<code class="notranslate">{full folder path}/github.php</code>
</pre>

<h2 dir="auto">Method::</h2>
<pre class="notranslate">
<code class="notranslate">POST</code>
</pre>

<h2 dir="auto">Json exemple:</h2>
<pre class="notranslate">
<code class="notranslate">
{
    "evidence_id": 1,
    "evidence_data": [
        {
            "login_name": "anecdotes-exercise",
            "role": "owner",
            "user_details": {
                "updated_at": "2021-07-26T09:41:56Z",
                "id": 120000,
                "email": "exercise@anecdotes.ai",
                "first_name": "anec",
                "last_name": "dotes"
            },
            "security": {
                "mfa_enabled": true,
                "mfa_enforced": true
            }
        }
    ]
}
</code>
</pre>

<h2 dir="auto">Response Example:</h2>
<pre class="notranslate">
<code class="notranslate">
{
    "evidence_id":1,
    "full_name":"anec dotes",
    "email":"exercise@anecdotes.ai",
    "updated_at":"2021-07-26T09:41:56Z",
    "MFA_enabled":true
}
</code>
</pre>