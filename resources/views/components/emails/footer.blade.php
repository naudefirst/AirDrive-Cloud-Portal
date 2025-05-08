{{ Illuminate\Mail\Markdown::parse('---') }}

Thank you,<br>
{{ config('app.name') ?? 'AirDrive Cloud Portal' }}

{{ Illuminate\Mail\Markdown::parse('[Contact Support](https://airdrive.cloud)') }}
