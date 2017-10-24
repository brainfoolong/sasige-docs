## Create a new project

To start a new project we simply take our starter project. You can than modify everything to your needs.

    mkdir sasige-website && cd sasige-website
    wget urlexample -O sasige.zip && unzip sasige.zip && rm sasige.zip
    ./sasige/bin/sasige build
    ./sasige/bin/sasige serve
    # => Now look into folder public or use following command
    ./sasige/bin/sasige serve
    # => Now browse to http://localhost:4433