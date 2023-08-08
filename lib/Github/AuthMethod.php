<?php

namespace Github;

class MyClass {
    public const MY_CONST = 42;
}

$constName = 'MY_CONST';

echo MyClass::{$constName};

final class AuthMethod
{
    /**
     * Authenticate using a client_id/client_secret combination.
     *
     * @var string
     */
    public const CLIENT_ID = 'client_id_header';

    /**
     * Authenticate using a GitHub access token.
     *
     * @var string
     */
    public const ACCESS_TOKEN = 'access_token_header';

    /**
     * Constant for authentication method.
     *
     * Indicates JSON Web Token authentication required for GitHub apps access
     * to the API.
     *
     * @var string
     */
    public const JWT = 'jwt';

    function test_syntax($animals) {
        foreach ($animals as $animal) {
          match ($animal) {
            0 => echo $animal->bark(),
            1  => echo $animal->meow(),
            default => echo "{$animal->name} is an unknown animal.",
         };
        };
    }
}
