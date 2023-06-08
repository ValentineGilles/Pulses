<x-mail::message>
# Email de bienvenue

Felicitation vous avez bien créé votre compte sur notre site.

<x-mail::button :url="'https://www.google.fr'">
Button Text
</x-mail::button>

Merci,<br>
{{ config('app.name') }}
</x-mail::message>
