# Team-dove
 Auth-Wiki
A library for authentication codes for different programming languages and frameworks.
**Table of content
•	Project Description
•	Project Implementation
•	Requirements
•	Installation Guide
•	The Team**

________________________________________
**Project Description**
Auth-wiki is a library of multi-factor authentication codes. 

The aim of the platform is to provide quick access to authentication code snippets and libraries for developers, in order to fastrack their software development timeline.

The platform is built on the principle of (Don’t re-invent the wheel). As a developer, you do not have to waste time writing classes or libraries for managing user authentication in your project.

All you need to do is to visit the platform, browse through a list of authentication codes written in your preferred programming language, then login to download the code snippet.

You can equally contribute to the libraries via comments as long as you are a registered user of the community.

**Project Links**

View Github Repository: https://github.com/zuri-training/Team-dove
View Figma Design:
View Database Schema: 
View Project’s Live URL: 

Our Research Plan
________________________________________
Project Implementation
This is a web application built using a PHP framework called Laravel. This framework has a wide range of functionality and works perfectly with both small and large web application. The entire template provided by the frontend developers will be converted to "blade" template which will be used in the application. The authentication codes for various language and frameworks will be made available for download and a concise description will be provided for each code. The authenticated users will also be able to show how satisfied they are and this will help the future users make an informed decision.

**Design Tools**
        Figma 
**Backend Development**
1.	Language => PHP
2.	Framework => (Laravel)
3.	Libraries => (To be determined)
4.	Database => (MySQL database)
**Frontend Development**
1.	HTML
2.	CSS
3.	JavaScript
4.	Library: React.js
5.	Font Awesome Icons
**Requirements**
•	PHP (>= v8.1.10 recommended)
•	Composer
•	MySQL or any database (update DB_CONNECTION in .env)

**Installation Guide**
•	Clone git repository https://github.com/zuri-training/Team-dove.git
•	Install dependencies composer install
•	Create .env file. Copy contents from .env.example into .env (If .env file does not exist after installing dependencies)
•	Generate APP_KEY php artisan key:generate
•	Create database
•	Update .env file
•	Import table php artisan migrate
•	Done? Go live! php artisan serve

**The Project Team**
**Design Team**
•	Otusanya Iyabo (Team Lead)
•	Aisha Sanusi
•	Confidence Asor
•	Jemine Okorodudu
•	Uchechukwu Godwin
•	Maureen Dimgba
•	Moyinoluwa Ojo
•	Anne Aleje
•	Ezechukwu Ruth

**Development Team**
•	Dorcas Samuel (Fullstack)
•	Christopher Adeyemi (Backend)
•	Obinna Akaolisa (Fullstack)
•	Andrew Efomah (Frontend)
•	Babatunde Okunlola (Fullstack Assistant Team leader) 
•	Adesina Adedeji (Fullstack)
•	Siseku Oluwajuwon (Frontend)

**Frontend Developers Guide** 
For this project frontend developers will be pulling from the 'Frontend' branch and also making pull requests to the same branch. The backend developers will be working on the 'secondary' and 'intermediate' branches. All finalized changes will be merged with the main branch after proper screening.
Frontend developers will be submitting tasks by making pull requests to the 'Frontend' branch of the parent repository

**Backend Developers Guide**
Initial Setup Procedure for Backend developers
Backend developers are allowed to clone the repository directly.
Click on the 'code' button and copy the url of the repository. On your local machine, open the command line or terminal and navigate to the directory you want to clone the repository into. In the command line window, enter git clone <enter the url you copied here>, it should look like git clone https://github.com/<your_username>/Team-dove.git. Press 'Enter', your repo should be cloned into your chosen directory now Before working in your remote repository it is necessary to switch to the branch you are to work on by running git checkout origin/<branch_name> e.g git checkout origin/intermediate.
Before working in your remote repository it is necessary to switch to the branch you are to work on by running git checkout origin/<branch_name> e.g git checkout origin/intermediate.
  
**Pushing Code to the Repository**
•	Stage and commit the changes made.
•	When you want to push your code back to the remote repository, you should push directly to your specific branch. Run git push origin HEAD:<branch_name> e.g git push origin HEAD:intermediate.
  
Pulling Changes made to your Branch from the Remote Repository
•	Fetch the changes that have been made to original repository using git fetch origin.
•	Switch to your branch (if you are not already on it) using git checkout origin/<branch_name> e.g git checkout origin/secondary.
•	Merge the changes from your remote branch to your local branch using git merge origin/<branch_name> e.g git merge origin/secondary.
  
**Frontend Developers Guide**
Initial Setup Procedures for Frontend developers
Forking the Repository and Cloning it to your Local Machine
•	Click on the Fork icon on the top-right of the repository's page and fork the repository. Your fork should now be created with the directory <your_username>/Team-dove. Next, you need to clone it to your local machine/computer.
•	Click on the 'code' button and copy the url of the repo. On your local machine, open the command line or terminal and navigate to the directory you want to clone the repository into. In the command line window, enter git clone <enter the url you copied here>, it should look like git clone https://github.com/<your_username>/Team-dove.git. Press 'Enter', your repo should be cloned into your chosen directory now. Let's proceed to the next step.
•	Now that you have cloned the forked repository you need to set your 'upstream' and pull from the branch you'll be working on. 
