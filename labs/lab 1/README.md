# WAPH-Web Application Programming and Hacking

## Instructor: Dr. Phu Phung

## Student

**Name**: Sai Keerthi Vadnala

**Email**: vadnalsi@ucmail.uc.edu

**Short-bio**: Sai Keerthi Vadnala great interest in learning web development and wants to explore more about it by doing handson projects.

<br>

![Sai Keerthi vadnala headshot](Images/headshot.JPG)


## Lab Overview

- Lab 1 describes about the foundations of web.
- This lab contains 2 parts: The Web and Http protocol, Basic web application programming. 
- Part 1 focuses on the web and http protocol, working with Wireshark for network packet analysis and gaining understanding of Telnet and wireshark.
- Part 2 focuses on working with CGI web applications in C, developing a simple PHP web application with user input, and understanding of HTTP GET and POST requests.



## Repository Information

Respository's URL: [https://github.com/Saikeerthi72/waph-vadnalsi.git](https://github.com/Saikeerthi72/waph-vadnalsi.git)

This is a private repository for Sai Keerthi Vadnala to store all code from the course. The organization of this repository is as follows.

### Labs 

[Hands-on exercises in lectures](labs) 

  - [Lab 0](https://github.com/Saikeerthi72/waph-vadnalsi/tree/main/labs/lab%200): Development Environment Setup 

## Part I - The Web and HTTP Protocol
## Task 1. Familiar with the Wireshark tool and HTTP Protocol

- Wireshark is a network protocol analyzer that enables analysis of network traffic.
- Firstly, to install the tool use 'sudo apt install wireshark -qt'.
- To verify the version use 'wireshark --version' and to run the application use 'sudo wireshark &'.
- Open the wireshark, click on the 4th icon to setup, select 'any' in the next step and 'start' button to start capturing.
- Now open the browser and browse 'example.com' link.
- Open the wireshark tool and click on stop capturing and filter by 'http' to see the http request and response messages.
- Click on http request GET/index.html and analyze the http request message.
- Similarly, click on the http response message and analyze it.
- Next, right click on the http request, click on follow, select HTTP stream.
- Below are the screenshots for Task 1 (Fig. 1,2,3).

![Fig. 1: HTTP Request](Images/headshot.JPG)
![Fig. 2: HTTP REsponse](Images/headshot.JPG)
![Fig. 3: HTTP Stream](Images/headshot.JPG)

## Apache Web Server Testing
<br>
![Apache2_default_page](Images/Apache2_default_page.png)


## Part II - git Repositories and Exercises

## The Course repository
<br>
![ss2](Images/ss2.png)

## Private repository
- I have logged into my Github account, and clicked on "New" to create a new repository
- I have named the repository as **waph-vadnalsi**, selected it as Private, and created the repository.
- URL of the repo: [https://github.com/Saikeerthi72/waph-vadnalsi.git](https://github.com/Saikeerthi72/waph-vadnalsi.git)
- In the handson exercises, I have generated and setted SSH Keys using commands: ssh-keygen, ls ~/.ssh, ls ~/.ssh/id_rsa.pub from the terminal and copied the key.
- And I have added the key to my github account: Click on settings > SSH and GPG Keys > New SSH Key.
- I have named the Key as *UbuntuVM* and pasted the copied key here.
- I have cloned the remote repository into my VM using command: git clone git@github.com:Saikeerthi72/waph-vadnalsi.git
- I have created a labs folder inside the waph-vadnalsi (local repository) and has copied the contents of README-template.MD from waph folder to README.MD file of waph-vadnalsi

<br>

![ss3](Images/ss3.png)


