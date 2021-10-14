<?php
/*require 'vendor/mollie/polyfill-libsodium/bootstrap.php';*/
return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | This option controls the default authentication "guard" and password
    | reset options for your application. You may change these defaults
    | as required, but they're a perfect start for most applications.
    |
    */

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    |
     | Ensuite, vous pouvez définir chaque garde d'authentification pour votre application.
     | Bien sûr, une excellente configuration par défaut a été définie pour vous
     | ici qui utilise le stockage de session et le fournisseur d'utilisateurs Eloquent.
     |
     | Tous les pilotes d'authentification ont un fournisseur d'utilisateurs. Ceci définit comment le
     | les utilisateurs sont en fait extraits de votre base de données ou d'un autre stockage
     | mécanismes utilisés par cette application pour conserver les données de votre utilisateur.
     |
     | Pris en charge: "session"
    |
    */

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
        'api' => [
            'driver' => 'passport',
            'provider' => 'users',
            'hash' => false,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    |
     | Tous les pilotes d'authentification ont un fournisseur d'utilisateurs. Ceci définit comment
     | les utilisateurs sont en fait extraits de votre base de données ou d'un autre stockage
     | mécanismes utilisés par cette application pour conserver les données de votre utilisateur.
     |
     | Si vous avez plusieurs tables ou modèles utilisateur, vous pouvez configurer plusieurs
     | sources qui représentent chaque modèle/tableau. Ces sources peuvent alors
     | être affecté à toute protection d'authentification supplémentaire que vous avez définie.
     |
     | Pris en charge : "base de données", "éloquent"
     |
    */

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,
        ],

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords
    |--------------------------------------------------------------------------
    |
     | Vous pouvez spécifier plusieurs configurations de réinitialisation de mot de passe si vous en avez
     | plus d'une table utilisateur ou d'un modèle dans l'application et que vous souhaitez avoir
     | des paramètres de réinitialisation de mot de passe distincts en fonction des types d'utilisateurs spécifiques.
     |
     | Le délai d'expiration est le nombre de minutes pendant lesquelles le jeton de réinitialisation doit être
     | considéré comme valide. Cette fonction de sécurité garde les jetons de courte durée afin que
     | ils ont moins de temps à deviner. Vous pouvez modifier cela au besoin. |
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Password Confirmation Timeout
    |--------------------------------------------------------------------------
    |
     | Ici, vous pouvez définir le nombre de secondes avant une confirmation de mot de passe
     | expire et l'utilisateur est invité à ressaisir son mot de passe via le
     | écran de confirmation. Par défaut, le délai d'attente dure trois heures.    |
    */

    'password_timeout' => 10800,

];

