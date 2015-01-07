All API calls should be prefixed with "api/", for example "http://example.com/api/teams".

Auh model:
    signup - POST:
        params:
            'email'
            'password' SHA1 hashed
            'confirmPassword' SHA1 hashed
            'firstName'
            'lastName'

        returns (200):
            'player created'
            auth data

    login - POST:
        params:
            'email'
            'password' SHA1 hashed
        returns (200):
            auth data
    logout - GET:
        params:
            'Logout'
        returns (200):

    fbLogin - GET:
        params:
        returns (302):
            Redirects user to f
            acebook to grant application access to user data
    fbCallback - GET: callback function for facebook auth
        params:
            code - facebook generated token
        returns (200):
            'Logged in via facebook'
            auth data
