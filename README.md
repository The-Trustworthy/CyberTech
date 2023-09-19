# CyberTech

![banner-cybertech](./assets/banner.png)

## Intro  

This website has been established with the educational objective of enhancing one's understanding of _ethical hacking._ The platform primarily employs `HTML`, `CSS`, `JavaScript`, and `PHP` for backend functionality. It's important to acknowledge that this website may possess one or more vulnerabilities susceptible to cyber attacks. Therefore, it is imperative to operate this site within a controlled environment and utilize it exclusively for ethical purposes.  

## Directory Structure  

Before attempting challenges, the following setup should necessarily be there in your _working directory:_  

    .
    .
    ├── .docker                                                             # docker configration
    │   │
    │   └── 000-default.conf         
    │
    ├── src                                                                 # complete source code
    │   │
    │   ├── assets
    │   │   │
    │   │   ├── css                                                         # required css 
    │   │   │ 
    │   │   ├── js                                                          # required js
    │   │   │ 
    │   │   ├── sass                                                        # required sass
    │   │   │ 
    │   │   └── webfonts                                                    # required fonts
    │   │
    │   ├── resources                                                       # additional resources 
    │   │   │
    │   │   ├── theme/bootstrap 
    │   │   │ 
    │   │   ├── config.php                                                  # and similar scripts
    │   │   . 
    │   │   └── ...
    │   │
    │   ├── uploads                                                         # room for uploaded files 
    │   │   │
    │   │   ├── .gitkeep
    │   │   . 
    │   │   └── ...
    │   │
    │   ├── images                                                          # all images 
    │   │   . 
    │   │   └── ...
    │   │
    │   ├── static                                                          # static css/js/font etc.. 
    │   │   . 
    │   │   └── ...
    │   │
    │   ├── index.html                                                      # landing page 
    │   │
    │   ├── content.html 
    │   │
    │   ├── gallery.php 
    │   .
    │   └── ...         
    │
    ├── docker-compose.yml
    │
    ├── Dockerfile
    │
    └── ...

## Usage  

There are multiple ways to use this project. Visit [here](./VulnWeb/) for some detailed description.

### Using Apache/WAMP/XAMPP Server  

In order to run on the local server, the online resources could be offered. Following links could be helpful:  

1. Uisng [Apache on Windows](https://www.tutorialspoint.com/php/php_installation_windows_apache.htm) _(by Tutorialspoint)_  
2. Using [WAMP](https://www.instructables.com/How-to-Run-a-PHP-Script-With-Wamp-Server/) _(by Instructables)_  
3. Using [XAMPP](https://www.simplilearn.com/tutorials/php-tutorial/php-using-xampp) _(by Simplilearn)_  

### Using Docker  

You need to run following commands in sequence to access the website in Docker:  

**Step-1:**  

Get the original image of `cybertech` project form [dockerhub](https://hub.docker.com/r/raviprakash1907/cybertech).  

```sh 
$ docker pull raviprakash1907/cybertech  
```

**Step-2:**   

This command is not mandatory. However, in case, you have updated the `Dockerfile`, you are supposed to run this command.  

```sh 
$ docker build -t <image-tag> .  
```

**Step-3:**  

Running the container.  

```sh 
$ docker-compose up  
```

## Contribution  

This project is open to welcome constructive contributions through open-source. May the force be with you.  

## License  

This project is licensed under the MIT License - see the [LICENSE.md](https://github.com/The-Trustworthy/CyberTech/blob/main/LICENSE) file for details.  