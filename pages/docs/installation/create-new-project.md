## Create a new project

The best way to start is to just download the [Sasige Starter](https://github.com/brainfoolong/sasige-starter/archive/master.zip) repository. 

    mkdir sasige-website && cd sasige-website
    wget https://github.com/brainfoolong/sasige-starter/archive/master.zip -O sasige.zip && unzip sasige.zip && rm sasige.zip
    ./sasige/bin/sasige build
    # => Now look into folder public or use following command
    ./sasige/bin/sasige serve
    # => Now browse to http://localhost:4433